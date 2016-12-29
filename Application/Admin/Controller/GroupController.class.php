<?php
namespace Admin\Controller;
use Think\Controller;
class GroupController extends BaseController{
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if($data['action'] == 1){
                $ids=implode(',',$data['ids']);
                if($this->group->delete($ids)){
                    $this->apiReturn(200,'批量删除成功',array('url'=>'index.php?s=Admin/Group/index'));
                }else{
                    $this->apiReturn(404,'批量删除失败');
                }
            }elseif($data['action'] == 2){
                foreach($data['ids'] as $id){
                    if($this->group->where(array('id'=>$id))->setField('status',1) < 1){
                        $this->apiReturn(404,'批量审核失败');
                    }
                }
                $this->apiReturn(200,'批量审核成功',array('url'=>'index.php?s=Admin/Group/index'));
            }
        }else{
            $total=$this->group->count();
            $page=new \Think\PageAjax($total,PAGE_SIZE);
            $show=$page->show();
            $grouplist=$this->group->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('grouplist',$grouplist);
            $this->assign('page',$show);
            $this->display();
        }
    }
    public function add(){
        if(IS_POST){
            $data=I('param.');
            if(isset($data['ids']) && !empty($data['ids'])){
                $data['auth']=implode(',',$data['ids']);
            }
            if($this->group->create($data)){
                if($this->group->add()){
                    $this->apiReturn(200,'添加管理组成功',array('url'=>'index.php?s=Admin/Group/index'));
                }else{
                    $this->apiReturn(404,'添加管理组失败');
                }
            }else{
                $this->apiReturn(402,$this->group->getError());
            }
        }else{
            $authlist=$this->auth->getAuthList();
            $this->assign('authlist',$authlist);
            $this->display();
        }
    }
    public function edit(){
        if(IS_POST){
            $data=I('param.');
            if(!$this->group->checkName($data['id'],$data['name'])){
                $this->apiReturn(403,'管理组名称不能重复');
            }
            if(isset($data['ids']) && !empty($data['ids'])){
                $data['auth']=implode(',',$data['ids']);
            }
            if($this->group->create($data)){
                if($this->group->save()){
                    $this->apiReturn(200,'修改管理组成功',array('url'=>'index.php?s=Admin/Group/index'));
                }else{
                    $this->apiReturn(404,'修改管理组失败');
                }
            }else{
                $this->apiReturn(402,$this->group->getError());
            }
        }else{
            $id=I('get.id');
            $oneGroup=$this->group->where(array('id'=>$id))->find();
            $authlist=$this->auth->getAuthList();
            $this->assign('oneGroup',$oneGroup);
            $this->assign('authlist',$authlist);
            $this->display();
        }
    }
    public function del(){
        $id=I('param.id');
        if($this->group->delete($id)){
            $this->apiReturn(200,'删除成功');
        }else{
            $this->apiReturn(404,'删除失败');
        }
    }
    public function setStatus(){
        $data['id']=I('get.id');
        $oneGroup=$this->group->field('id,status')->where($data)->find();
        if($oneGroup){
            if($oneGroup['status'] == 1){
                $data['status']=0;
                if($this->group->save($data)){
                    $this->apiReturn(200,'已禁用');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }else{
                $data['status']=1;
                if($this->group->save($data)){
                    $this->apiReturn(200,'已启用');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }
        }else{
            $this->apiReturn(401,'参数错误,未找到该管理组信息');
        }
    }
    public function ajaxSearch(){
        $data=I('param.');
        if(isset($data['keywords']) && !empty($data['keywords'])){
            $map['name']=array('like','%'.$data['keywords'].'%');
        }
        $total=$this->group->where($map)->count();
        $page=new \Think\PageAjax($total,PAGE_SIZE);
        $show=$page->show();
        $grouplist=$this->group->where($map)->limit($page->firstRow.','.$page->listRows)->select();
        if($grouplist){
            $this->apiReturn(200,'获取分页数据成功',array('list'=>$grouplist,'page'=>$show));
        }else{
            $this->apiReturn(404,'暂无数据');
        }
    }
}