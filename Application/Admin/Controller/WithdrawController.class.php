<?php
namespace Admin\Controller;
use Think\Controller;
class WithdrawController extends BaseController{
    private $withdraw=null;
    public function __construct(){
        parent::__construct();
        $this->withdraw=D('Withdraw');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if($data['action'] == 1){
                foreach($data['ids'] as $id){
                    if($this->withdraw->where(array('id'=>$id))->setField('status',1) < 1){
                        $this->apiReturn(404,'批量设置失败');
                    }
                }
                $this->apiReturn(200,'批量设置成功',array('url'=>'index'));
            }
        }else{
            $total=$this->withdraw->count();
            $page=new \Think\PageAjax($total,PAGE_SIZE);
            $show=$page->show();
            $withdrawlist=$this->withdraw->alias('a')->join('gms_user AS b ON a.uid=b.id')->field('a.id,b.phone,a.money,a.realname,a.type,a.account,a.status,a.datetime')->order('datetime DESC')->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('page',$show);
            $this->assign('withdrawlist',$withdrawlist);
            $this->display();
        }
    }
    public function ajaxSearch(){
        $data=I('param.');
        if(isset($data['keywords']) && !empty($data['keywords'])){
            $map['realname']=array('like','%'.$data['keywords'].'%');
        }
        if(!empty($data['starttime']) && !empty($data['endtime'])){
            $map['datetime']=array('between',array(strtotime($data['starttime']),strtotime($data['endtime'])));
        }elseif(!empty($data['starttime']) && empty($data['endtime'])){
            $map['datetime']=array('gt',strtotime($data['starttime']));
        }elseif(empty($data['starttime']) && !empty($data['endtime'])){
            $map['datetime']=array('lt',strtotime($data['endtime']));
        }
        $total=$this->withdraw->where($map)->count();
        $page=new \Think\PageAjax($total,PAGE_SIZE);
        $show=$page->show();
        $withdrawlist=$this->withdraw->alias('a')->join('LEFT JOIN gms_user AS b ON a.uid=b.id')->field('a.id,b.phone,a.money,a.realname,a.type,a.account,a.status,a.datetime')->where($map)->order('datetime DESC')->limit($page->firstRow.','.$page->listRows)->select();
        if($withdrawlist){
            $this->apiReturn(200,'获取分页数据成功',array('list'=>$withdrawlist,'page'=>$show));
        }else{
            $this->apiReturn(404,'暂无数据');
        }
    }
    public function setStatus(){
        $data['id']=I('param.id');
        $oneWithdraw=$this->withdraw->field('id,status')->where($data)->find();
        if($oneWithdraw){
            if($oneWithdraw['status'] == 1){
                $data['status']=0;
                if($this->withdraw->save($data)){
                    $this->apiReturn(200,'待处理');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }else{
                $data['status']=1;
                if($this->withdraw->save($data)){
                    $this->apiReturn(200,'已处理');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }
        }else{
            $this->apiReturn(401,'参数错误,未找到该提现申请信息');
        }
    }
}