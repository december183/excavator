<?php
namespace Admin\Controller;
use Think\Controller;
class AttrController extends BaseController{
    private $attr=null;
    private $cate=null;
    private $type=null;
    public function __construct(){
        parent::__construct();
        $this->attr=D('Attr');
        $this->cate=D('Category');
        $this->type=D('AttrType');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if($data['action'] == 1){
                $ids=implode(',',$data['ids']);
                if($this->attr->delete($ids)){
                    $this->apiReturn(200,'批量删除成功',array('url'=>'Admin/Attr/index'));
                }else{
                    $this->apiReturn(404,'批量删除失败');
                }
            }
        }else{
            $total=$this->attr->count();
            $page=new \Think\PageAjax($total,PAGE_SIZE);
            $show=$page->show();
            $list=$this->attr->alias('a')->join('gms_attr_type AS b ON a.type=b.id')->field('a.id,a.name,a.cateids,a.value,b.name AS typename')->limit($page->firstRow.','.$page->listRows)->select();
            $attrlist=self::processData($list);
            $this->assign('attrlist',$attrlist);
            $this->assign('page',$show);
            $this->display();
        }
    }
    public function add(){
        if(IS_POST){
            $data=I('param.');
            $data['cateids']=implode(',',$data['ids']);
            if($this->attr->create($data)){
                if($this->attr->add()){
                    $this->apiReturn(200,'新增属性成功',array('url'=>'Admin/Attr/index'));
                }else{
                    $this->apiReturn(404,'新增属性失败');
                }
            }else{
                $this->apiReturn(402,$this->attr->getError());
            }
        }else{
            $catelist=$this->cate->getSortActiveCateList();
            $typelist=$this->type->field('id,name')->where(array('status'=>1))->select();
            $this->assign('catelist',$catelist);
            $this->assign('typelist',$typelist);
            $this->display();
        }
    }
    public function edit(){
        if(IS_POST){
            $data=I('param.');
            $data['cateids']=implode(',',$data['ids']);
            if(!$this->attr->checkName($data['id'],$data['name'])){
                $this->apiReturn(403,'属性名称不能重复');
            }
            if($this->attr->create($data)){
                if($this->attr->save()){
                    $this->apiReturn(200,'修改属性成功',array('url'=>'Admin/Attr/index'));
                }else{
                    $this->apiReturn(404,'修改属性失败');
                }
            }else{
                $this->apiReturn(402,$this->attr->getError());
            }
        }else{
            $id=I('get.id');
            $oneAttr=$this->attr->where(array('id'=>$id))->find();
            $catelist=$this->cate->getSortActiveCateList();
            $typelist=$this->type->field('id,name')->where(array('status'=>1))->select();
            $this->assign('oneAttr',$oneAttr);
            $this->assign('catelist',$catelist);
            $this->assign('typelist',$typelist);
            $this->display();
        }
    }
    public function del(){
        $id=I('param.id');
        if($this->attr->delete($id)){
            $this->apiReturn(200,'删除成功');
        }else{
            $this->apiReturn(404,'删除失败');
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
    public function ajaxSearch(){
        $data=I('param.');
        if(isset($data['keywords']) && !empty($data['keywords'])){
            $map['name']=array('like','%'.$data['keywords'].'%');
            $condition['a.name']=array('like','%'.$data['keywords'].'%');
        }
        $total=$this->attr->where($map)->count();
        $page=new \Think\PageAjax($total,PAGE_SIZE);
        $show=$page->show();
        $list=$this->attr->alias('a')->join('gms_attr_type AS b ON a.type=b.id')->field('a.id,a.name,a.cateids,a.value,b.name AS typename')->where($condition)->limit($page->firstRow.','.$page->listRows)->select();
        $attrlist=self::processData($list);
        if($attrlist){
            $this->apiReturn(200,'获取分页数据成功',array('list'=>$attrlist,'page'=>$show));
        }else{
            $this->apiReturn(404,'暂无数据');
        }
    }
}