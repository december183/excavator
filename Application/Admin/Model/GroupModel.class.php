<?php
namespace Admin\Model;
use Think\Model;
class GroupModel extends Model{
    protected $_validate=array(
        array('name','require','管理组名称不能为空'),
        array('name','','管理组名称不能重复',0,'unique',1),
        array('auth','require','管理组权限必须选择',1,'regex'),
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
        $oneGroup = $this->field('id,name')->where(array('name'=>$name))->find();
        if($oneGroup){
            return $oneGroup['id'] == $id ? true : false;
        }
        return true;
    }
}