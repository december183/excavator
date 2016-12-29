<?php
namespace Home\Model;
use Think\Model;
class CartModel extends Model{
    protected $_validate=array(
        array('num','number','购物车商品数量必须为数字',2,'regex'),
    );
    protected $_auto=array(
        array('date','time',1,'function'),
    );
}