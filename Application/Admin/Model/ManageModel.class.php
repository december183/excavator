<?php
namespace Admin\Model;
use Think\Model;
class ManageModel extends Model{
    protected $_validate=array(
        array('username','require','管理员名称不能为空'),
        array('username','','管理员名称不能重复',0,'unique',1),
        array('userpass','require','管理员密码不能为空',0,'regex',1),
        array('chkpass','userpass','密码与确认密码不一致',0,'confirm'),
        array('phone','/^1[34578]\d{9}$/','手机号码格式不正确',2,'regex'),
        array('email','email','邮箱格式不正确',2,'regex')
    );
    protected $_auto=array(
        array('date','time',1,'function'),
        array('userpass','password',1,'function'),
        array('userpass','',2,'ignore'),//修改时密码为空则忽略密码字段
    );

    /**
     * 检查名称是否重复
     * @param int $id
     * @param string $name
     * @return bool
     */
    public function checkName($id,$name){
        $oneManage = $this->field('id,username')->where(array('username'=>$name))->find();
        if($oneManage){
            return $oneManage['id'] == $id ? true : false;
        }
        return true;
    }
}