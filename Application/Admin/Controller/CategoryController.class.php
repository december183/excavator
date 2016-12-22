<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends BaseController{
    private $cate=null;
    public function __construct(){
        parent::__construct();
        $this->cate=D('category');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if($data['action'] == 1){
                $idsArr=$this->cate->getDelIds($data['ids']);
                $ids=implode(',',$idsArr);
                if($this->cate->delete($ids)){
                    $memcache=self::getMemcache();
                    $memcache->clear();
                    $this->apiReturn(200,'批量删除成功',array('url'=>'index'));
                }else{
                    $this->apiReturn(404,'批量删除失败');
                }
            }elseif($data['action'] == 2){
                foreach($data['ids'] as $id){
                    if($this->cate->where(array('id'=>$id))->setField('status',1) < 1){
                        $this->apiReturn(404,'批量审核失败');
                    }
                }
                $memcache=self::getMemObj();
                $memcache->clear();
                $this->apiReturn(200,'批量审核成功',array('url'=>'index'));
            }
        }else{
            $catelist=$this->cate->getSortCateList();
            $this->assign('catelist',$catelist);
            $this->display();
        }
    }
    public function add(){
        if(IS_POST){
            $data=I('param.');
            if(isset($_FILES['pic']['tmp_name'])){
                $info=$this->upOne();
                $path=APP_ROOT.'/Uploads/images/'.$info['savepath'].$info['savename'];
                $data['thumb']=$this->thumb($path,150,150);
            }
            if($this->cate->create($data)){
                if($this->cate->add()){
                    $memcache=self::getMemcache();
                    $memcache->clear();
                    $this->apiReturn(200,'添加商品分类成功',array('url'=>'index'));
                }else{
                    $this->apiReturn(404,'添加商品分类失败');
                }
            }else{
                $this->apiReturn(402,$this->cate->getError());
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
            if(!$this->cate->checkName($data['id'],$data['name'])){
                $this->apiReturn(403,'分类名称不能重复');
            }
            if($this->cate->checkPid($data['id'],$data['pid'])){
                $this->apiReturn(403,'不能选择自己或自己的子类作为上级分类');
            }
            if(isset($_FILES['pic']['tmp_name'])){
                $info=$this->upOne();
                $path=APP_ROOT.'/Uploads/images/'.$info['savepath'].$info['savename'];
                $data['thumb']=$this->thumb($path,150,150);
            }
            if($this->cate->create($data)){
                if($this->cate->save()){
                    $memcache=self::getMemcache();
                    $memcache->clear();
                    $this->apiReturn(200,'修改商品分类成功',array('url'=>'index'));
                }else{
                    $this->apiReturn(404,'修改商品分类失败');
                }
            }else{
                $this->apiReturn(402,$this->cate->getError());
            }
        }else{
            $id=I('get.id');
            $oneCate=$this->cate->where(array('id'=>$id))->find();
            $catelist=$this->cate->getSortActiveCateList();
            $this->assign('oneCate',$oneCate);
            $this->assign('catelist',$catelist);
            $this->display();
        }
    }
    public function del(){
        $id=I('param.id');
        $idsArr=$this->auth->getDelIds($id);
        $ids=implode(',',$idsArr);
        if($this->auth->delete($ids)){
            $memcache=self::getMemcache();
            $memcache->clear();
            $this->apiReturn(200,'删除成功');
        }else{
            $this->apiReturn(404,'删除失败');
        }
    }
    public function setStatus(){
        $data['id']=I('param.id');
        $oneCate=$this->cate->field('id,status')->where($data)->find();
        if($oneCate){
            if($oneCate['status'] == 1){
                $data['status']=0;
                if($this->cate->save($data)){
                    $memcache=self::getMemcache();
                    $memcache->clear();
                    $this->apiReturn(200,'已禁用');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }else{
                $data['status']=1;
                if($this->cate->save($data)){
                    session('cateList',null);
                    $this->apiReturn(200,'已启用');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }
        }else{
            $this->apiReturn(401,'参数错误,未找到该分类信息');
        }
    }
    public function setSort(){
        $data=I('param.');
        if($this->cate->create($data)){
            if($this->cate->save()){
                $memcache=self::getMemcache();
                $memcache->clear();
                $this->apiReturn(200,'修改排序成功');
            }else{
                $this->apiReturn(404,'修改排序失败');
            }
        }else{
            $this->apiReturn(402,$this->cate->getError());
        }
    }
}