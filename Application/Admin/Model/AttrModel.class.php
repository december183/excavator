<?php
namespace Admin\Model;
use Think\Model;
class AttrModel extends Model{
    protected $_validate=array(
        array('name','require','属性名称不能为空'),
        array('name','','属性名称不能重复',0,'unique',1),
        array('cateids','require','关联分类必须选择',1,'regex'),
    );
    protected $_auto=array(

    );
    /**
     * 检查名称是否重复
     * @param int $id
     * @param string $name
     * @return bool
     */
    public function checkName($id,$name){
        $oneAttr = $this->field('id,name')->where(array('name'=>$name))->find();
        if($oneAttr){
            return $oneAttr['id'] == $id ? true : false;
        }
        return true;
    }
}