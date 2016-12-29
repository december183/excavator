<?php
namespace Admin\Model;
use Think\Model;
class CreditGoodsModel extends Model{
    protected $_validate=array(
        array('cateid','require','商品分类必须选择'),
    );
    protected $_auto=array(
        array('hits','randHits',1,'callback'),
        array('date','time',1,'function'),
    );
    /**
     * 检查名称是否重复
     * @param int $id
     * @param string $name
     * @return bool
     */
    public function checkName($id,$name){
        $oneGoods = $this->field('id,title')->where(array('title'=>$name))->find();
        if($oneGoods){
            return $oneGoods['id'] == $id ? true : false;
        }
        return true;
    }
    /**
     * 获取初始点击量
     * @return int
     */
    public function randHits(){
        return rand(1,100);
    }
}