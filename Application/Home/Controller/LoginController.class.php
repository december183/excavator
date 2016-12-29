<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends ComController{
    private $user=null;
    public function __construct(){
        parent::__construct();
        $this->user=D('User');
    }
    public function index(){
        $url=self::getLoginSkipUrl();
        if(IS_POST){
            $data=I('param.');
            if($data=$this->user->create($data,4)){
                if($this->user->login($data)){
                    $this->apiReturn(200,'登录成功',array('url'=>$url));
                }else{
                    $this->apiReturn(404,'登录失败');
                }
            }else{
                $this->apiReturn(402,$this->user->getError());
            }
        }else{
            $this->display();
        }
    }
}