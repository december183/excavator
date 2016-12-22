<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
    private $manage=null;
    public function _initialize(){
        if(session('user')){
            $this->redirect('Index/index');
        }
        $this->manage=D('Manage');
    }
    public function verify(){
        $config=array(
            'useNoise'=>false
        );
        $verify=new \Think\Verify($config);
        $verify->entry('login');
    }
    public function checkVerify($code,$id=''){
        $verify=new \Think\Verify();
        return $verify->check($code,$id);
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if(!self::checkVerify($data['code'],'login')){
                $this->apiReturn(401,'验证码错误');
            }
            if(isset($data['username']) && empty($data['username'])){
                $this->apiReturn(402,'用户名不能为空');
            }
            $oneManage=$this->manage->field('id,username,userpass')->where(array('username'=>$data['username']))->find();
            if($oneManage){
                if($oneManage['userpass'] == password($data['userpass'])){
                    unset($oneManage['userpass']);
                    session('user',$oneManage);
                    $this->apiReturn(200,'登录成功',array('url'=>'Admin/Index/index'));
                }else{
                    $this->apiReturn(403,'密码错误');
                }
            }else{
                $this->apiReturn(404,'不存在此用户');
            }
        }else{
            $this->display();
        }
    }
}