<?php
namespace Home\Controller;
use Think\Controller;
class ComController extends Controller{
    /**
     * 获取登录之后的跳转页面
     * @return string
     */
    public function getLoginSkipUrl(){
        $url=$_SERVER['HTTP_REFERER'];
        if($url == ''){
            $preurl='/';
        }else{
            if(strpos($url,'Login') === false){
                $preurl=$url;
            }else{
                $preurl='/';
            }
        }
        return $preurl;
    }
    /**
     * 返回Memcache连接对象
     */
    public function getMemcache(){
        return new \Think\Cache\Driver\Memcache();
    }
}