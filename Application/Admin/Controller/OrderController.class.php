<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends BaseController{
    private $order=null;
    private $goods=null;
    public function __construct(){
        parent::__construct();
        $this->order=D('Order');
        $this->goods=D('Goods');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if($data['action'] == 1){
                $ids=implode(',',$data['ids']);
                if($this->order->delete($ids)){
                    $this->apiReturn(200,'批量删除成功',array('url'=>'index'));
                }else{
                    $this->apiReturn(404,'批量删除失败');
                }
            }
        }else{
            $total=$this->order->count();
            $page=new \Think\PageAjax($total,PAGE_SIZE);
            $show=$page->show();
            $list=$this->order->field('id,order_no,goodsinfo,totalfee,paymethod,status,date')->order('date DESC')->limit($page->firstRow.','.$page->listRows)->select();
            $orderlist=self::getOrderInfo($list);
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
        $list=$this->order->field('id,order_no,goodsinfo,totalfee,paymethod,status,date')->where($map)->order('date DESC')->limit($page->firstRow.','.$page->listRows)->select();
        $orderlist=self::getOrderInfo($list);
        if($orderlist){
            $this->apiReturn(200,'获取分页数据成功',array('list'=>$orderlist,'page'=>$show));
        }else{
            $this->apiReturn(404,'暂无数据');
        }
    }
    public function getOrderInfo($param=array()){
        $result=array();
        foreach($param as $value){
            $value['goodsinfo']=json_decode($value['goodsinfo'],true);
            $value['count']=count($value['goodsinfo']);
            $value['info']=self::getOrderGoodsInfo($value['goodsinfo']);
            unset($value['goodsinfo']);
            $result[]=$value;
        }
        return $result;
    }
    public function getOrderGoodsInfo($param=array()){
        $res=array();
        foreach($param as $value){
            $arr=$this->goods->getGoodsInfo($value['id']);
            $arr=array_merge($value,$arr);
            $res[]=$arr;
        }
        return $res;
    }
    public function detail(){
        $id=I('param.id');
        $oneOrder=$this->order->alias('a')->join('gms_user AS b ON a.uid=b.id')->join('gms_user AS c ON a.sid=c.id')->join('gms_pickaddr AS d ON a.pickid=d.id')->field('a.id,b.name AS username,c.name AS seller,a.order_no,a.goodsinfo,a.totalfee,a.paymethod,d.name AS pickname,d.phone AS pickphone,d.addr,a.remark,a.sendtime,a.status,a.date')->where(array('a.id'=>$id))->find();
        $oneOrder['goodsinfo']=json_decode($oneOrder['goodsinfo'],true);
        $oneOrder['info']=self::getOrderGoodsInfo($oneOrder['goodsinfo']);
        unset($oneOrder['goodsinfo']);
        $this->assign('oneOrder',$oneOrder);
        $this->display();
    }
}