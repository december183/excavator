<?php
namespace Home\Controller;
use Think\Controller;
class CateListController extends ComController{
    private $cate=null;
    private $goods=null;
    private $brand=null;
    public function __construct(){
        parent::__construct();
        $this->cate=D('Category');
        $this->goods=D('Goods');
        $this->brand=D('Brand');
    }
    public function index(){
        $this->display();
    }
}