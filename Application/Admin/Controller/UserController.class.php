<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends BaseController{
    private $user=null;
    public function __construct(){
        parent::__construct();
        $this->user=D('User');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if($data['action'] == 1){
                $ids=implode(',',$data['ids']);
                if($this->user->delete($ids)){
                    $this->apiReturn(200,'批量删除成功',array('url'=>'index.php?s=Admin/User/index'));
                }else{
                    $this->apiReturn(404,'批量删除失败');
                }
            }elseif($data['action'] == 2){
                foreach($data['ids'] as $id){
                    if($this->user->where(array('id'=>$id))->setField('status',1) < 1){
                        $this->apiReturn(404,'批量设置失败');
                    }
                }
                $this->apiReturn(200,'批量设置成功',array('url'=>'index.php?s=Admin/User/index'));
            }
        }else{
            $total=$this->user->count();
            $page=new \Think\PageAjax($total,PAGE_SIZE);
            $show=$page->show();
            $userlist=$this->user->alias('a')->join('gms_area AS b ON a.areano=b.areano')->field('a.id,a.name,a.phone,a.thumb,a.level,a.credit,a.account,a.wechat,a.alipay,a.status,b.areaname')->order('date DESC')->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('page',$show);
            $this->assign('userlist',$userlist);
            $this->display();
        }
    }
    public function del(){
        $id=I('param.id');
        if($this->user->delete($id)){
            $this->apiReturn(200,'删除成功');
        }else{
            $this->apiReturn(404,'删除失败');
        }
    }
    public function ajaxSearch(){
        $data=I('param.');
        if(isset($data['keywords']) && !empty($data['keywords'])){
            $map['name']=array('like','%'.$data['keywords'].'%');
        }
        if(isset($data['type']) && $data['type'] != 0){
            if($data['type'] == 1){
                $map['level']=array('neq',3);
            }elseif($data['type'] == 2){
                $map['level']=array('eq',3);
            }
        }
        $total=$this->user->where($map)->count();
        $page=new \Think\PageAjax($total,PAGE_SIZE);
        $show=$page->show();
        $userlist=$this->user->alias('a')->join('gms_area AS b ON a.areano=b.areano')->field('a.id,a.name,a.phone,a.thumb,a.level,a.credit,a.account,a.wechat,a.alipay,a.status,b.areaname')->where($map)->order('date ASC')->limit($page->firstRow.','.$page->listRows)->select();
        if($userlist){
            $this->apiReturn(200,'获取分页数据成功',array('list'=>$userlist,'page'=>$show));
        }else{
            $this->apiReturn(404,'暂无数据');
        }
    }
    public function setStatus(){
        $data['id']=I('param.id');
        $oneUser=$this->user->field('id,status')->where($data)->find();
        if($oneUser){
            if($oneUser['status'] == 1){
                $data['status']=0;
                if($this->user->save($data)){
                    $this->apiReturn(200,'已禁用');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }else{
                $data['status']=1;
                if($this->user->save($data)){
                    $this->apiReturn(200,'正常');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }
        }else{
            $this->apiReturn(401,'参数错误,未找到该用户信息');
        }
    }
}