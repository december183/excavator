<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller{
    public function _initialize(){
        if(!session('user')){
            self::alertSkipLogin();
        }
    }
    public function alertSkipLogin(){
        echo '<script type="text/javascript">alert("请先登录");window.location.href="Home/Login/index";</script>';
        exit();
    }

    /**
     * 添加用户浏览记录
     * @param int $param
     */
    public function addTrace($param){
        $trace=cookie('trace');
        if(empty($trace)){
            cookie('trace',$param,3600*24*7);
        }else{
            $history=explode(',',$trace);
            array_unshift($history,$param);
            $history=array_unique($history);
            while(count($history) > 10){
                array_pop($history);
            }
            cookie('trace',implode(',',$history),3600*24*7);
        }
    }
    /**
     * 返回Memcache连接对象
     */
    public function getMemcache(){
        return new \Think\Cache\Driver\Memcache();
    }
}