<?php
namespace Home\Controller;
use Think\Controller;
class CartController extends BaseController{
    private $cart=null;
    private $goods=null;
    public function __construct(){
        parent::__construct();
        $this->cart=D('Cart');
        $this->goods=D('Goods');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
            $ids=implode(',',$data['ids']);
            if($this->cart->delete($ids)){
                $this->apiReturn(200,'批量删除成功',array('url'=>'Home/Cart/index'));
            }else{
                $this->apiReturn(404,'批量删除失败');
            }
        }else{
            $list=$this->cart->order('date DESC')->select();
            foreach($list as $value){
                $oneGoods=$this->goods->field('title,thumbpic,price,disprice')->where(array('id'=>$value['gid']))->find();
                if($oneGoods){
                    if(isset($oneGoods['disprice']) && !empty($oneGoods['disprice'])){
                        $value['price']=$oneGoods['disprice'];
                    }else{
                        $value['price']=$oneGoods['price'];
                    }
                    $value['title']=$oneGoods['title'];
                    $value['thumbpic']=$oneGoods['thumbpic'];
                    $cartlist[]=$value;
                }else{
                    unset($value);
                    continue;
                }
            }
            $this->assign('cartlist',$cartlist);
            $this->display();
        }
    }
    public function add(){
        $id=I('param.id');
        $num=I('param.num');
        $oneGoods=$this->goods->field('id')->where(array('id'=>$id))->find();
        if($oneGoods){
            $oneCart=$this->cart->where(array('gid'=>$id))->find();
            if($oneCart){
                $this->apiReturn(403,'该商品已在购物车中');
            }else{
                $data['uid']=session('user.id');
                $data['gid']=$oneGoods['id'];
                $data['num']=$num;
                if($this->cart->create($data)){
                    if($this->cart->add()){
                        $this->apiReturn(200,'添加购物车商品成功',array('url'=>'Home/Cart/index'));
                    }else{
                        $this->apiReturn(404,'添加购物车商品失败');
                    }
                }else{
                    $this->apiReturn(402,$this->cart->getError());
                }
            }
        }else{
            $this->apiReturn(401,'参数错误,未找到该商品信息');
        }
    }
    public function del(){
        $id=I('param.id');
        if($this->cart->delete($id)){
            $this->apiReturn(200,'删除成功');
        }else{
            $this->apiReturn(404,'删除失败');
        }
    }
    public function flushCart(){
        $data['uid']=session('user.id');
        $cartlist=$this->cart->field('gid')->where($data)->select();
        foreach($cartlist as $value){
            if(!$this->cart->delete($value)){
                $this->apiReturn(404,'清空购物车失败');
            }
        }
        $this->apiReturn(200,'清空购物车成功');
    }
    public function setNum(){
        $data=I('param.');
        if($this->cart->create($data)){
            if($this->cart->save()){
                $this->apiReturn(200,'修改商品数量成功');
            }else{
                $this->apiReturn(404,'修改商品数量失败');
            }
        }else{
            $this->apiReturn(402,$this->cart->getError());
        }
    }
}