<?php
namespace Home\Controller;
use Think\Controller;
class SearchController extends ComController{
    private $goods=null;
    public function __construct(){
        parent::__construct();
        $this->goods=D('Goods');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
        }else{
            $this->display();
        }
    }
}