<?php
namespace Home\Controller;
use Think\Controller;
class TraceController extends BaseController{
    public function index(){
        $trace=cookie('trace');
        $history=array();
        if(!empty($trace)){
            $arr=explode(',',$trace);
            foreach($arr as $value){
                $oneGoods=$this->goods->field('id,title,thumbpic,price')->where(array('id'=>$value))->find();
                $history[]=$oneGoods;
            }
        }
        $this->assign('history',$history);
        $this->display();
    }
}