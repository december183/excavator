<?php
namespace Admin\Controller;
use Think\Controller;
class AuthController extends BaseController{
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if($data['action'] == 1){
                $idsArr=$this->auth->getDelIds($data['ids']);
                $ids=implode(',',$idsArr);
                if($this->auth->delete($ids)){
                    $this->apiReturn(200,'批量删除成功',array('url'=>'index'));
                }else{
                    $this->apiReturn(404,'批量删除失败');
                }
            }elseif($data['action'] == 2){
                foreach($data['ids'] as $id){
                    if($this->auth->where(array('id'=>$id))->setField('status',1) < 1){
                        $this->apiReturn(404,'设置显示失败');
                    }
                }
                $this->apiReturn(200,'设置显示成功',array('url'=>'index'));
            }elseif($data['action'] == 3){
                foreach($data['ids'] as $id){
                    if($this->auth->where(array('id'=>$id))->setField('isauth',1) < 1){
                        $this->apiReturn(404,'设置权限失败');
                    }
                }
                $this->apiReturn(200,'设置权限成功',array('url'=>'index'));
            }
        }else{
            $authlist=$this->auth->getSortItemList();
            $this->assign('authlist',$authlist);
            $this->display();
        }
    }
    public function add(){
        if(IS_POST){
            $data=I('param.');
            if($this->auth->create($data)){
                if($insertId=$this->auth->add()){
                    if($data['isauth'] == 1){
                        $data2['id']=session('userAuth.groupid');
                        $data2['auth']=session('userAuth.auth').','.$insertId;
                        $this->group->save($data2);
                        session('userAuth',null);
                        session('userItem',null);
                    }
                    $this->apiReturn(200,'添加菜单成功',array('url'=>'index'));
                }else{
                    $this->apiReturn(404,'添加菜单失败');
                }
            }else{
                $this->apiReturn(402,$this->auth->getError());
            }
        }else{
            $itemlist=$this->auth->getTopItemList();
            $this->assign('itemlist',$itemlist);
            $this->display();
        }
    }
    public function edit(){
        if(IS_POST){
            $data=I('param.');
            if(!$this->auth->checkName($data['id'],$data['name'])){
                $this->apiReturn(403,'菜单名称不能重复');
            }
            if($this->auth->create($data)){
                if($this->auth->save()){
                    session('userAuth',null);
                    session('userItem',null);
                    $this->apiReturn(200,'修改菜单成功',array('url'=>'index'));
                }else{
                    $this->apiReturn(404,'修改菜单失败');
                }
            }else{
                $this->apiReturn(402,$this->auth->getError());
            }
        }else{
            $id=I('get.id');
            $oneAuth=$this->auth->where(array('id'=>$id))->find();
            $itemlist=$this->auth->getTopItemList();
            $this->assign('oneAuth',$oneAuth);
            $this->assign('itemlist',$itemlist);
            $this->display();
        }
    }
    public function del(){
        $id=I('param.id');
        echo $id;
        $idsArr=$this->auth->getDelIds($id);
        $ids=implode(',',$idsArr);
        if($this->auth->delete($ids)){
            session('userAuth',null);
            session('userItem',null);
            $this->apiReturn(200,'删除成功');
        }else{
            $this->apiReturn(404,'删除失败');
        }
    }
    public function setStatus(){
        $data['id']=I('param.id');
        $oneAuth=$this->auth->field('id,status')->where($data)->find();
        if($oneAuth){
            if($oneAuth['status'] == 1){
                $data['status']=0;
                if($this->auth->save($data)){
                    session('userAuth',null);
                    session('userItem',null);
                    $this->apiReturn(200,'否');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }else{
                $data['status']=1;
                if($this->auth->save($data)){
                    session('userAuth',null);
                    session('userItem',null);
                    $this->apiReturn(200,'是');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }
        }else{
            $this->apiReturn(401,'参数错误,未找到该菜单信息');
        }
    }
    public function setAuth(){
        $data['id']=I('param.id');
        $oneAuth=$this->auth->field('id,isauth')->where($data)->find();
        if($oneAuth){
            if($oneAuth['isauth'] == 1){
                $data['isauth']=0;
                if($this->auth->save($data)){
                    session('userAuth',null);
                    session('userItem',null);
                    $this->apiReturn(200,'否');
                }else{
                    $this->apiReturn(404,'设置访问权限失败');
                }
            }else{
                $data['isauth']=1;
                if($this->auth->save($data)){
                    session('userAuth',null);
                    session('userItem',null);
                    $this->apiReturn(200,'是');
                }else{
                    $this->apiReturn(404,'设置访问权限失败');
                }
            }
        }else{
            $this->apiReturn(401,'参数错误,未找到该菜单信息');
        }
    }
    public function setSort(){
        $data=I('param.');
        if($this->auth->create($data)){
            if($this->auth->save()){
                session('userAuth',null);
                session('userItem',null);
                $this->apiReturn(200,'修改排序成功');
            }else{
                $this->apiReturn(404,'修改排序失败');
            }
        }else{
            $this->apiReturn(402,$this->auth->getError());
        }
    }
}