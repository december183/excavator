<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
        /*$memcache=self::getMemcache();
        $cateList=$memcache->get('cateList');
        $cateActive=$memcache->get('cateActive');
        print_r(json_decode($cateList,true));
        echo '<br/><hr/>';
        print_r(json_decode($cateActive,true));
        exit();*/
        $this->display();
    }
}