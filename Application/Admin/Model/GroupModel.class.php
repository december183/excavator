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

    /**
     * 检查新增用户的合法性
     * @param $groupId 新增用户所在组ID
     * @param $curGroupId 当前登录用户所在组ID
     * @return bool
     */
    public function checkAuth($groupid){
        $oneGroup=$this->field('auth')->where(array('id'=>$groupid))->find();
        $curGroup=$this->field('auth')->where(array('id'=>session('user.groupid')))->find();
        return strpos($curGroup['auth'],$oneGroup['auth']) === false ? true : false;
    }

    /**
     * 检查新增用户组的合法性
     * @param $auth 新增用户组的权限
     * @return bool
     */
    public function checkGroupAuth($auth){
        $curGroup=$this->field('auth')->where(array('id'=>session('user.groupid')))->find();
        return strpos($curGroup['auth'],$auth) === false ? true : false;
    }
}