<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends BaseController{
    private $order=null;
    public function __construct(){
        parent::__construct();
        $this->order=D('Order');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if($data['action'] == 1){
                $ids=implode(',',$data['ids']);
                if($this->order->delete($ids)){
                    $this->apiReturn(200,'批量删除成功',array('url'=>'index.php?s=Admin/Order/index'));
                }else{
                    $this->apiReturn(404,'批量删除失败');
                }
            }
        }else{
            $total=$this->order->count();
            $page=new \Think\PageAjax($total,PAGE_SIZE);
            $show=$page->show();
            $orderlist=$this->order->alias('a')->join('gms_order_goods AS b ON a.id=b.orderid')->field('a.id,a.order_no,b.gid,b.title,b.thumbpic,b.num,b.price,a.totalfee,a.paymethod,a.status,a.date')->order('date DESC')->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('page',$show);
            $this->assign('orderlist',$orderlist);
            $this->display();
        }
    }
    public function del(){
        $id=I('param.id');
        if($this->order->delete($id)){
            $this->apiReturn(200,'删除成功');
        }else{
            $this->apiReturn(404,'删除失败');
        }
    }
    public function ajaxSearch(){
        $data=I('param.');
        if(isset($data['keywords']) && !empty($data['keywords'])){
            $map['order_no']=array('eq',$data['keywords']);
        }
        if(!empty($data['starttime']) && !empty($data['endtime'])){
            $map['date']=array('between',array(strtotime($data['starttime']),strtotime($data['endtime'])));
        }elseif(!empty($data['starttime']) && empty($data['endtime'])){
            $map['date']=array('gt',strtotime($data['starttime']));
        }elseif(empty($data['starttime']) && !empty($data['endtime'])){
            $map['date']=array('lt',strtotime($data['endtime']));
        }
        $total=$this->order->where($map)->count();
        $page=new \Think\PageAjax($total,PAGE_SIZE);
        $show=$page->show();
        $orderlist=$this->order->alias('a')->join('gms_order_goods AS b ON a.id=b.orderid')->field('a.id,a.order_no,b.gid,b.title,b.thumbpic,b.num,b.price,a.totalfee,a.paymethod,a.status,a.date')->where($map)->order('date DESC')->limit($page->firstRow.','.$page->listRows)->select();
        if($orderlist){
            $this->apiReturn(200,'获取分页数据成功',array('list'=>$orderlist,'page'=>$show));
        }else{
            $this->apiReturn(404,'暂无数据');
        }
    }
    public function detail(){
        $id=I('param.id');
        $oneOrder=$this->order->alias('a')->join('gms_user AS b ON a.sid=b.id')->join('gms_pickaddr AS c ON a.pickid=c.id')->join('gms_order_goods AS d ON a.id=d.orderid')->field('a.id,b.name AS seller,a.order_no,d.gid,d.title,d.thumbpic,d.num,d.price,a.totalfee,a.paymethod,c.name AS pickname,c.phone AS pickphone,c.addr,a.remark,a.sendtime,a.status,a.date')->where(array('a.id'=>$id))->find();
        $this->assign('oneOrder',$oneOrder);
        $this->display();
    }
}