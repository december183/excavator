<?php
namespace Admin\Controller;
use Think\Controller;
class BrandController extends BaseController{
    private $brand=null;
    private $cate=null;
    public function __construct(){
        parent::__construct();
        $this->brand=D('Brand');
        $this->cate=D('Category');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if($data['action'] == 1){
                $ids=implode(',',$data['ids']);
                if($this->brand->delete($ids)){
                    $this->apiReturn(200,'批量删除成功',array('url'=>'index'));
                }else{
                    $this->apiReturn(404,'批量删除失败');
                }
            }
        }else{
            $total=$this->brand->count();
            $page=new \Think\PageAjax($total,PAGE_SIZE);
            $show=$page->show();
            $list=$this->brand->field('id,name,thumb,cateids,sort')->order('sort ASC')->limit($page->firstRow.','.$page->listRows)->select();
            $brandlist=self::processData($list);
            $this->assign('page',$show);
            $this->assign('brandlist',$brandlist);
            $this->display();
        }
    }
    public function add(){
        if(IS_POST){
            $data=I('param.');
            $data['cateids']=implode(',',$data['ids']);
            if(isset($_FILES['pic']['tmp_name'])){
                $info=$this->upOne();
                $path=APP_ROOT.'/Uploads/images/'.$info['savepath'].$info['savename'];
                $data['thumb']=$this->thumb($path,150,150);
            }
            if($this->brand->create($data)){
                if($this->brand->add()){
                    $this->apiReturn(200,'新增品牌成功',array('url'=>'index'));
                }else{
                    $this->apiReturn(404,'新增品牌失败');
                }
            }else{
                $this->apiReturn(402,$this->brand->getError());
            }
        }else{
            $catelist=$this->cate->getSortActiveCateList();
            $this->assign('catelist',$catelist);
            $this->display();
        }
    }
    public function edit(){
        if(IS_POST){
            $data=I('param.');
            $data['cateids']=implode(',',$data['ids']);
            if(!$this->brand->checkName($data['id'],$data['name'])){
                $this->apiReturn(403,'品牌名称不能重复');
            }
            if(isset($_FILES['pic']['tmp_name'])){
                $info=$this->upOne();
                $path=APP_ROOT.'/Uploads/images/'.$info['savepath'].$info['savename'];
                $data['thumb']=$this->thumb($path,150,150);
            }
            if($this->brand->create($data)){
                if($this->brand->save()){
                    $this->apiReturn(200,'修改品牌成功');
                }else{
                    $this->apiReturn(404,'修改品牌失败');
                }
            }else{
                $this->apiReturn(402,$this->brand->getError());
            }
        }else{
            $id=I('get.id');
            $oneBrand=$this->brand->where(array('id'=>$id))->find();
            $catelist=$this->cate->getSortActiveCateList();
            $this->assign('oneBrand',$oneBrand);
            $this->assign('catelist',$catelist);
            $this->display();
        }
    }
    public function del(){
        $id=I('param.id');
        if($this->brand->delete($id)){
            $this->apiReturn(200,'删除成功');
        }else{
            $this->apiReturn(404,'删除失败');
        }
    }
    public function setSort(){
        $data=I('param.');
        if($this->brand->create($data,4)){
            if($this->brand->save()){
                $this->apiReturn(200,'修改排序成功');
            }else{
                $this->apiReturn(404,'修改排序失败');
            }
        }else{
            $this->apiReturn(402,$this->brand->getError());
        }
    }
    public function ajaxSearch(){
        $data=I('param.');
        if(isset($data['keywords']) && !empty($data['keywords'])){
            $map['name']=array('like','%'.$data['keywords'].'%');
        }
        $total=$this->brand->where($map)->count();
        $page=new \Think\PageAjax($total,PAGE_SIZE);
        $show=$page->show();
        $list=$this->brand->field('id,name,thumb,cateids,sort')->where($map)->order('sort ASC')->limit($page->firstRow.','.$page->listRows)->select();
        $brandlist=self::processData($list);
        if($brandlist){
            $this->apiReturn(200,'获取分页数据成功',array('list'=>$brandlist,'page'=>$show));
        }else{
            $this->apiReturn(404,'暂无数据');
        }
    }
    protected function processData(Array $param=array()){
        $result=array();
        foreach($param as $value){
            $arr=explode(',',$value['cateids']);
            $catenames=array();
            foreach($arr as $id){
                $oneCate=$this->cate->field('name')->where(array('id'=>$id))->find();
                $catenames[]=$oneCate['name'];
            }
            $value['catename']=implode(',',$catenames);
            $result[]=$value;
        }
        return $result;
    }
}