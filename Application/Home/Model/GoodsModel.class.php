<?php
namespace Home\Model;
use Think\Model;
class GoodsModel extends Model{
    protected $_validate=array(
        array(),
    );
    protected $_auto=array(
        array('date','time',1,'function'),
    );
    /**
     * 返回订单商品信息
     * @param int $id
     * @return array mixed
     */
    public function getGoodsInfo($id){
        return $this->field('title,thumbpic')->where(array('id'=>$id))->find();
    }
}