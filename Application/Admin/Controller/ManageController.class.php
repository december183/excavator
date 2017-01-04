<?php
namespace Admin\Controller;
use Think\Controller;
class ManageController extends BaseController{
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if($data['action'] == 1){
                $ids=implode(',',$data['ids']);
                if($this->manage->delete($ids)){
                    $this->apiReturn(200,'批量删除成功',array('url'=>'index.php?s=Admin/Manage/index'));
                }else{
                    $this->apiReturn(404,'批量删除失败');
                }
            }elseif($data['action'] == 2){
                foreach($data['ids'] as $id){
                    if($this->manage->where(array('id'=>$id))->setField('status',1) < 1){
                        $this->apiReturn(404,'批量审核失败');
                    }
                }
                $this->apiReturn(200,'批量审核成功',array('url'=>'index.php?s=Admin/Manage/index'));
            }
        }else{
            $total=$this->manage->count();
            $page=new \Think\PageAjax($total,PAGE_SIZE);
            $show=$page->show();
            $managelist=$this->manage->alias('a')->join('gms_group AS b ON a.groupid=b.id')->field('a.id,a.username,a.email,a.phone,a.avatar,a.remark,a.status,a.date,b.name AS groupname')->order('a.date DESC')->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('managelist',$managelist);
            $this->assign('page',$show);
            $this->display();
        }
    }
    public function add(){
        if(IS_POST){
            $data=I('param.');
            if($this->group->checkAuth($data['groupid'])){
                $this->apiReturn(403,'权限不足,不能添加大于自身权限的用户');
            }
            if(isset($_FILES['pic']['tmp_name'])){
                $info=$this->upOne();
                $path=APP_ROOT.'/Uploads/images/'.$info['savepath'].$info['savename'];
                $data['avatar']=$this->thumb($path,150,150);
            }
            if($this->manage->create($data)){
                if($this->manage->add()){
                    $this->apiReturn(200,'添加管理员成功',array('url'=>'index.php?s=Admin/Manage/index'));
                }else{
                    $this->apiReturn(404,'添加管理员失败');
                }
            }else{
                $this->apiReturn(402,$this->manage->getError());
            }
        }else{
            $grouplist=$this->group->field('id,name')->where(array('status'=>1))->select();
            $this->assign('grouplist',$grouplist);
            $this->display();
        }
    }
    public function edit(){
        if(IS_POST){
            $data=I('param.');
            if(!$this->manage->checkName($data['id'],$data['username'])){
                $this->apiReturn(403,'管理员名称不能重复');
            }
            if($this->group->checkAuth($data['groupid'])){
                $this->apiReturn(403,'权限不足,不能修改大于自身权限的用户');
            }
            if(isset($_FILES['pic']['tmp_name'])){
                $info=$this->upOne();
                $path=APP_ROOT.'/Uploads/images/'.$info['savepath'].$info['savename'];
                $data['avatar']=$this->thumb($path,150,150);
            }
            if($this->manage->create($data)){
                if($this->manage->save()){
                    $this->apiReturn(200,'修改管理员成功',array('url'=>'index.php?s=Admin/Manage/index'));
                }else{
                    $this->apiReturn(404,'修改管理员失败');
                }
            }else{
                $this->apiReturn(402,$this->manage->getError());
            }
        }else{
            $id=I('get.id');
            $oneManage=$this->manage->where(array('id'=>$id))->find();
            $grouplist=$this->group->field('id,name')->where(array('status'=>1))->select();
            $this->assign('grouplist',$grouplist);
            $this->assign('oneManage',$oneManage);
            $this->display();
        }
    }
    public function reset(){
        if(IS_POST){
            $data=I('param.');
            $data['id']=session('user.id');
            if(isset($_FILES['pic']['tmp_name'])){
                $info=$this->upOne();
                $path=APP_ROOT.'/Uploads/images/'.$info['savepath'].$info['savename'];
                $data['avatar']=$this->thumb($path,150,150);
            }
            if($this->manage->create($data)){
                if($this->manage->save()){
                    $this->apiReturn(200,'密码修改成功',array('url'=>'index.php?s=Admin/Manage/reset'));
                }else{
                    $this->apiReturn(404,'密码修改失败');
                }
            }else{
                $this->apiReturn(402,$this->manage->getError());
            }
        }else{
            $oneManage=$this->manage->where(array('id'=>session('user.id')))->find();
            $this->assign('oneManage',$oneManage);
            $this->display();
        }
    }
    public function del(){
        $id=I('param.id');
        $oneManage=$this->manage->field('id,groupid')->where(array('id'=>$id))->find();
        if($oneManage){
            if($this->group->checkAuth($oneManage['groupid'])){
                $this->apiReturn(402,'权限不足,不能删除大于自身权限的用户');
            }
            if($this->manage->delete($id)){
                $this->apiReturn(200,'删除成功');
            }else{
                $this->apiReturn(404,'删除失败');
            }
        }else{
            $this->apiReturn(401,'参数错误,未找到该管理员用户信息');
        }

    }
    public function setStatus(){
        $data['id']=I('get.id');
        $oneManage=$this->manage->field('id,status')->where($data)->find();
        if($oneManage){
            if($oneManage['status'] == 1){
                $data['status']=0;
                if($this->manage->save($data)){
                    $this->apiReturn(200,'已禁用');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }else{
                $data['status']=1;
                if($this->manage->save($data)){
                    $this->apiReturn(200,'已启用');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }
        }else{
            $this->apiReturn(401,'参数错误,未找到该管理员信息');
        }
    }
    public function ajaxSearch(){
        $data=I('param.');
        if(isset($data['keywords']) && !empty($data['keywords'])){
            $map['username']=array('like','%'.$data['keywords'].'%');
        }
        $total=$this->manage->where($map)->count();
        $page=new \Think\PageAjax($total,PAGE_SIZE);
        $show=$page->show();
        $managelist=$this->manage->alias('a')->join('gms_group AS b ON a.groupid=b.id')->field('a.id,a.username,a.email,a.phone,a.avatar,a.remark,a.status,a.date,b.name AS groupname')->where($map)->order('a.date DESC')->limit($page->firstRow.','.$page->listRows)->select();
        if($managelist){
            $this->apiReturn(200,'获取分页数据成功',array('list'=>$managelist,'page'=>$show));
        }else{
            $this->apiReturn(404,'暂无数据');
        }
    }
}