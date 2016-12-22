<?php
namespace Admin\Controller;
use Think\Controller;
class AreaController extends BaseController{
    private $area=null;
    public function __construct(){
        parent::__construct();
        $this->area=D('Area');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
        }else{
            $total=$this->area->count();
            $page=new \Think\PageAjax($total,PAGE_SIZE);
            $page->rollPage=8;
            $show=$page->show();
            $arealist=$this->area->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('page',$show);
            $this->assign('arealist',$arealist);
            $this->display();
        }
    }
    public function ajaxSearch(){
        $data=I('param.');
        if(isset($data['keywords']) && !empty($data['keywords'])){
            $map['areaname']=array('like','%'.$data['keywords'].'%');
        }
        $total=$this->area->where($map)->count();
        $page=new \Think\PageAjax($total,PAGE_SIZE);
        $page->rollPage=8;
        $show=$page->show();
        $arealist=$this->area->where($map)->limit($page->firstRow.','.$page->listRows)->select();
        if($arealist){
            $this->apiReturn(200,'获取分页数据成功',array('list'=>$arealist,'page'=>$show));
        }else{
            $this->apiReturn(404,'暂无数据');
        }
    }
}