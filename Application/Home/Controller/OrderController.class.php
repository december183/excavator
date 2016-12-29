<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends BaseController{
    private $order=null;
    private $ordergoods=null;
    private $cart=null;
    public function __construct(){
        parent::__construct();
        $this->order=D('Order');
        $this->ordergoods=D('OrderGoods');
        $this->cart=D('Cart');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
        }else{
            $data=I('get.');
            if(isset($data['status'])){
                $map['status']=array('eq',$data['status']);
            }
            $map['uid']=session('user.id');
            $total=$this->order->where($map)->count();
            $page=new \Think\PageAjax($total,PAGE_SIZE);
            $show=$page->show();
            $orderlist=$this->order->alias('a')->join('gms_order_goods AS b ON a.id=b.orderid')->field('a.id,a.order_no,b.gid,b.title,b.thumbpic,b.num,b.price,a.totalfee,a.paymethod,a.status,a.date')->where($map)->order('date DESC')->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('page',$show);
            $this->assign('orderlist',$orderlist);
            $this->display();
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

    /**
     * 生成订单
     */
    public function add(){
        //接收传入的参数:所有商品的ID(ids),对应商品的数量(num),订单总金额(totalfee),支付方式(paymethod),收货地址ID(pickid),订单备注(remark)
        $param=I('param.');

        //传入的商品ID数组获取订单商品信息,订单总金额,并根据不同商家拆分的订单金额
        $arr=self::getOrderInfo($param['ids']);
        $data2['uid']=session('user.id');
        $data2['order_no']=getTradeNo();
        $data2['totalfee']=$arr['totalfee'];
        $data2['paymethod']=$param['paymethod'];
        $data2['pickid']=$param['pickid'];
        $data2['remark']=$param['remark'];
        $this->order->startTrans();
        //生成支付订单
        if($payid=$this->order->add()){

        }else{
            $this->order->rollback();
            $this->apiReturn(404,'生成支付订单失败');
        }
        //根据不同的商家生成不同的商品订单
        foreach($arr['ordersfee'] as $key=>$value){
            $totalfee=array_sum($value);
            $data['uid']=session('user.id');
            $data['sid']=$key;
            $data['payid']=$payid;
            $data['totalfee']=$totalfee;
            $data['paymethod']=$param['paymethod'];
            $data['pickid']=$param['pickid'];
            $data['remark']=$param['remark'];
            $data['order_no']=getTradeNo();
            if($this->order->create($data)){
                if($insertId=$this->order->add()){
                    foreach($arr['goodsinfo'] as $val){
                        $val['orderid']=$insertId;
                        if(!$this->ordergoods->add($val)){
                            $this->order->rollback();
                            $this->apiReturn(404,'插入订单商品信息失败');
                        }
                    }
                }else{
                    $this->order->rollback();
                    $this->apiReturn(404,'生成商品订单失败');
                }
            }else{
                $this->order->rollback();
                $this->apiReturn(402,$this->order->getError());
            }
        }
        $this->order->commit();
        //清空购物车
        $ids=implode(',',$param['ids']);
        $this->cart->delete($ids);
        //返回支付订单信息
        $this->apiReturn(200,'生成订单成功',array('order_no'=>$data2['order_no'],'paymethod'=>$param['paymethod'],'totalfee'=>$arr['totalfee']));
    }

    /**
     * 根据传入的商品ID数组获取订单商品信息,订单总金额,并根据不同商家拆分的订单金额
     * @param array $param
     * @return array
     */
    function getOrderInfo(Array $param){
        $goodsinfo=$ordersfee=array();
        $totalfee=0;
        foreach($param as $id) {
            $info=array();
            $oneGoods = $this->goods->field('id,uid,title,thumbpic,price,disprice')->where(array('id' => $id))->find();
            if(isset($oneGoods['disprice']) && !empty($oneGoods['disprice'])){
                $info['price']=$oneGoods['disprice'];
            }else{
                $info['price']=$oneGoods['price'];
            }
            $info['gid']=$oneGoods['id'];
            $info['title']=$oneGoods['title'];
            $info['thumbpic']=$oneGoods['thumbpic'];
            $info['num']=$param['num'][$id];
            $goodsinfo[]=$info;
            $totalfee+=$info['num']*$info['price'];
            $ordersfee[$oneGoods['uid']][] = $info['num']*$info['price'];
        }
        return array('goodsinfo'=>$goodsinfo,'totalfee'=>$totalfee,'ordersfee'=>$ordersfee);
    }
    /**
     * 订单支付
     */
    public function pay(){

    }

    /**
     * 订单详情
     */
    public function detail(){
        $id=I('param.id');
        $oneOrder=$this->order->alias('a')->join('gms_user AS b ON a.sid=b.id')->join('gms_pickaddr AS c ON a.pickid=c.id')->join('gms_order_goods AS d ON a.id=d.orderid')->field('a.id,b.name AS seller,a.order_no,d.gid,d.title,d.thumbpic,d.num,d.price,a.totalfee,a.paymethod,c.name AS pickname,c.phone AS pickphone,c.addr,a.remark,a.sendtime,a.status,a.date')->where(array('a.id'=>$id))->find();
        $this->assign('oneOrder',$oneOrder);
        $this->display();
    }
}