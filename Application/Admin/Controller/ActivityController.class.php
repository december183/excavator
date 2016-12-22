<?php
namespace Admin\Controller;
use Think\Controller;
class ActivityController extends BaseController{
    private $activity=null;
    private $cate=null;
    private $type=null;
    public function __construct(){
        parent::__construct();
        $this->activity=D('Activity');
        $this->cate=D('Category');
        $this->type=D('ActivityType');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if($data['action'] == 1){
                $ids=implode(',',$data['ids']);
                if($this->activity->delete($ids)){
                    $this->apiReturn(200,'批量删除成功',array('url'=>'Admin/Activity/index'));
                }else{
                    $this->apiReturn(404,'批量删除失败');
                }
            }elseif($data['action'] == 2){
                foreach($data['ids'] as $id){
                    if($this->activity->where(array('id'=>$id))->setField('isrec',1) < 1){
                        $this->apiReturn(404,'批量推荐失败');
                    }
                }
                $this->apiReturn(200,'批量推荐成功',array('url'=>'Admin/Activity/index'));
            }
        }else{
            $total=$this->activity->count();
            $page=new \Think\PageAjax($total,PAGE_SIZE);
            $show=$page->show();
            $activelist=$this->activity->field('id,title,thumbpic,descript,starttime,endtime,status,isrec')->limit($page->firstRow.','.$page->listRows)->select();
            $catelist=$this->cate->getSortActiveCateList();
            $typelist=$this->type->field('id,name')->where(array('status'=>1))->select();
            $this->assign('page',$show);
            $this->assign('activelist',$activelist);
            $this->assign('catelist',$catelist);
            $this->assign('typelist',$typelist);
            $this->display();
        }
    }
    public function add(){
        if(IS_POST){
            $data=I('param.');
            if(isset($_FILES['pic']['tmp_name'])){
                $info=$this->upOne();
                $path=APP_ROOT.'/Uploads/images/'.$info['savepath'].$info['savename'];
                $data['thumbpic']=$this->thumb($path,200,200);
            }
            if($this->activity->checkTime($data['starttime'],$data['endtime'])){
                $this->apiReturn(403,'活动结束时间必须大于开始时间');
            }
            if($this->activity->create($data)){
                if($this->activity->add()){
                    $this->apiReturn(200,'添加活动成功',array('url'=>'Admin/Activity/index'));
                }else{
                    $this->apiReturn(404,'添加活动失败');
                }
            }else{
                $this->apiReturn(402,$this->activity->getError());
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
            if(isset($_FILES['pic']['tmp_name'])){
                $info=$this->upOne();
                $path=APP_ROOT.'/Uploads/images/'.$info['savepath'].$info['savename'];
                $data['thumbpic']=$this->thumb($path,200,200);
            }
            if(!$this->activity->checkName($data['id'],$data['title'])){
                $this->apiReturn(403,'活动主题不能重复');
            }
            if($this->activity->checkTime($data['starttime'],$data['endtime'])){
                $this->apiReturn(403,'活动结束时间必须大于开始时间');
            }
            if($this->activity->create($data)){
                if($this->activity->save()){
                    $this->apiReturn(200,'修改活动成功',array('url'=>'Admin/Activity/index'));
                }else{
                    $this->apiReturn(404,'修改活动失败');
                }
            }else{
                $this->apiReturn(402,$this->activity->getError());
            }
        }else{
            $id=I('get.id');
            $oneActive=$this->activity->where(array('id'=>$id))->find();
            $catelist=$this->cate->getSortActiveCateList();
            $typelist=$this->type->field('id,name')->where(array('status'=>1))->select();
            $this->assign('oneActive',$oneActive);
            $this->assign('catelist',$catelist);
            $this->assign('typelist',$typelist);
            $this->display();
        }
    }
    public function del(){
        $id=I('param.id');
        if($this->activity->delete($id)){
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
        if(isset($data['cateid']) && $data['cateid'] != 0){
            $map['cateid']=array('eq',$data['cateid']);
        }
        $total=$this->activity->where($map)->count();
        $page=new \Think\PageAjax($total,PAGE_SIZE);
        $show=$page->show();
        $activelist=$this->activity->field('id,title,thumbpic,descript,starttime,endtime,status,isrec')->where($map)->order('date DESC')->limit($page->firstRow.','.$page->listRows)->select();
        if($activelist){
            $this->apiReturn(200,'获取分页数据成功',array('list'=>$activelist,'page'=>$show));
        }else{
            $this->apiReturn(404,'暂无数据');
        }
    }
    public function setRec(){
        $data['id']=I('param.id');
        $oneActive=$this->activity->field('id,isrec')->where($data)->find();
        if($oneActive){
            if($oneActive['isrec'] == 1){
                $data['isrec']=0;
                if($this->activity->save($data)){
                    $this->apiReturn(200,'未推荐');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }else{
                $data['isrec']=1;
                if($this->activity->save($data)){
                    $this->apiReturn(200,'已推荐');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }
        }else{
            $this->apiReturn(401,'参数错误,未找到该活动信息');
        }
    }
}