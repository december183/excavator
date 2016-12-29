<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
    protected $_validate=array(
        array('phone','require','手机号码不能为空'),
        array('phone','/^1[34578]\d{9}$/','手机号码格式不正确'),
        array('pass','require','密码不能为空'),
        array('chkpass','pass','密码与密码确认必须一致',0,'confirm'),
    );
    protected $_auto=array(
        array('pass','password',1,'function'),
        array('pass','password',4,'function'),
        array('date','time',1,'function'),
    );
    public function login(Array $param){
        $oneUser=$this->field('id,phone,pass,thumb,level')->where(array('phone'=>$param['phone']))->find();
        if($oneUser){
            if($oneUser['pass'] == $param['pass']){
                unset($oneUser['pass']);
                session('user',$oneUser);
                return true;
            }else{
                $this->error('密码错误');
                return false;
            }
        }else{
            $this->error('不存在此用户，请确认手机号码是否正确');
            return false;
        }
    }
}