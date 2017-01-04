<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
        /*$memcache=self::getMemcache();
        $cateList=$memcache->get('cateList');
        $cateActive=$memcache->get('cateActive');
        $markInfo=$memcache->get('markInfo');
        $machinelist=$memcache->get('machineList');
        print_r(json_decode($cateList,true));
        echo '<br/><hr/>';
        print_r(json_decode($cateActive,true));
        echo '<br/><hr/>';
        print_r(json_decode($markInfo,true));
        echo '<br/><ht/>';
        print_r(json_decode($machinelist,true));
        exit();*/
        $this->display();
    }
}