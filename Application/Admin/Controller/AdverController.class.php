<?php
namespace Admin\Controller;
use Think\Controller;
class AdverController extends BaseController{
    private $adver=null;
    private $type=null;
    public function __construct(){
        parent::__construct();
        $this->adver=D('Adver');
        $this->type=D('AdverType');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if($data['action'] == 1){
                $ids=implode(',',$data['ids']);
                if($this->adver->delete($ids)){
                    $this->apiReturn(200,'批量删除成功',array('url'=>'index'));
                }else{
                    $this->apiReturn(404,'批量删除失败');
                }
            }elseif($data['action'] == 2){
                foreach($data['ids'] as $id){
                    if($this->adver->where(array('id'=>$id))->setField('status',1) < 1){
                        $this->apiReturn(404,'批量设置失败');
                    }
                }
                $this->apiReturn(200,'批量设置成功',array('url'=>'index'));
            }
        }else{
            $typelist=$this->type->field('id,name')->where(array('status'=>1))->select();
            $total=$this->adver->count();
            $page=new \Think\PageAjax($total,PAGE_SIZE);
            $show=$page->show();
            $adverlist=$this->adver->field('id,title,pic,linkurl,type,sort,status')->order('sort ASC')->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('typelist',$typelist);
            $this->assign('page',$show);
            $this->assign('adverlist',$adverlist);
            $this->display();
        }
    }
    public function add(){
        if(IS_POST){
            $data=I('param.');
            if(isset($_FILES['pic']['tmp_name'])){
                $info=$this->upOne();
                $path=APP_ROOT.'/Uploads/images/'.$info['savepath'].$info['savename'];
                if(!empty($data['width']) && !empty($data['height'])){
                    $data['pic']=$this->thumb($path,$data['width'],$data['height']);
                }else{
                    $data['pic']=$this->thumb($path);
                }
            }
            if($this->adver->create($data)){
                if($this->adver->add()){
                    $this->apiReturn(200,'添加广告成功',array('url'=>'index'));
                }else{
                    $this->apiReturn(404,'添加广告失败');
                }
            }else{
                $this->apiReturn(402,$this->adver->getError());
            }
        }else{
            $typelist=$this->type->field('id,name')->where(array('status'=>1))->select();
            $this->assign('typelist',$typelist);
            $this->display();
        }
    }
    public function edit(){
        if(IS_POST){
            $data=I('param.');
            if(isset($_FILES['pic']['tmp_name'])){
                $info=$this->upOne();
                $path=APP_ROOT.'/Uploads/images/'.$info['savepath'].$info['savename'];
                if(!empty($data['width']) && !empty($data['height'])){
                    $data['pic']=$this->thumb($path,$data['width'],$data['height']);
                }else{
                    $data['pic']=$this->thumb($path);
                }
            }
            if(!$this->adver->checkName($data['id'],$data['title'])){
                $this->apiReturn(403,'广告标题不能重复');
            }
            if($this->adver->create($data)){
                if($this->adver->save()){
                    $this->apiReturn(200,'修改广告成功',array('url'=>'index'));
                }else{
                    $this->apiReturn(404,'修改广告失败');
                }
            }else{
                $this->apiReturn(402,$this->adver->getError());
            }
        }else{
            $id=I('param.id');
            $oneAdver=$this->type->where(array('id'=>$id))->find();
            $typelist=$this->type->field('id,name')->where(array('status'=>1))->select();
            $this->assign('oneAdver',$oneAdver);
            $this->assign('typelist',$typelist);
            $this->display();
        }
    }
    public function del(){
        $id=I('param.id');
        if($this->adver->delete($id)){
            $this->apiReturn(200,'删除成功');
        }else{
            $this->apiReturn(404,'删除失败');
        }
    }
    public function ajaxSearch(){
        $data=I('param.');
        if(isset($data['keywords']) && !empty($data['keywords'])){
            $map['title']=array('like','%'.$data['keywords'].'%');
        }
        if(isset($data['type']) && $data['type'] != 0){
            $map['type']=array('eq',$data['type']);
        }
        $total=$this->adver->where($map)->count();
        $page=new \Think\PageAjax($total,PAGE_SIZE);
        $show=$page->show();
        $adverlist=$this->adver->field('id,title,pic,linkurl,type,sort,status')->where($map)->order('sort ASC')->limit($page->firstRow.','.$page->listRows)->select();
        if($adverlist){
            $this->apiReturn(200,'获取分页数据成功',array('list'=>$adverlist,'page'=>$show));
        }else{
            $this->apiReturn(404,'暂无数据');
        }
    }
    public function setStatus(){
        $data['id']=I('param.id');
        $oneAdver=$this->adver->field('id,status')->where($data)->find();
        if($oneAdver){
            if($oneAdver['status'] == 1){
                $data['status']=0;
                if($this->adver->save($data)){
                    $this->apiReturn(200,'未展示');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }else{
                $data['status']=1;
                if($this->adver->save($data)){
                    $this->apiReturn(200,'展示中');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }
        }else{
            $this->apiReturn(401,'参数错误,未找到该广告信息');
        }
    }
    public function setSort(){
        $data=I('param.');
        if($this->adver->create($data)){
            if($this->adver->save()){
                $this->apiReturn(200,'修改排序成功');
            }else{
                $this->apiReturn(404,'修改排序失败');
            }
        }else{
            $this->apiReturn(402,$this->adver->getError());
        }
    }
}