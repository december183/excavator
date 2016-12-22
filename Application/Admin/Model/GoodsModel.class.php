<?php
namespace Admin\Model;
use Think\Model;
class GoodsModel extends Model{
    protected $_validate=array(

    );
    protected $_auto=array(

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