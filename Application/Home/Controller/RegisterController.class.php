<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends ComController{
    private $user=null;
    public function __construct(){
        parent::__construct();
        $this->user=D('User');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if(!isset($data['agree']) || empty($data['agree'])){
                $this->apiReturn(401,'请勾选同意用户协议');
            }
            if(!self::checkMscode($data['code'],$data['phone'])){
                $this->apiReturn(402,'验证码错误');
            }
            if($this->user->create($data)){
                if($this->user->add()){
                    $this->apiReturn(200,'注册成功',array('url'=>'Login/index'));
                }else{
                    $this->apiReturn(404,'注册失败');
                }
            }else{
                $this->apiReturn(403,$this->user->getError());
            }
        }else{
            $this->display();
        }
    }
    public function checkMscode($code,$phone){
        $memcache=self::getMemcache();
        $mscode=$memcache->get($phone);
        return $mscode == $code ? true : false;
    }
}