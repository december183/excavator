<?php
namespace Home\Controller;
use Think\Controller;
class CollectController extends BaseController{
    private $collect=null;
    private $cate=null;
    public function __construct(){
        parent::__construct();
        $this->collect=D('Collect');
        $this->cate=D('Category');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
            $ids=implode(',',$data['ids']);
            if($this->collect->delete($ids)){
                $this->apiReturn(200,'批量删除成功',array('url'=>'Home/Collect/index'));
            }else{
                $this->apiReturn(404,'批量删除失败');
            }
        }else{
            $catelist=$this->cate->getSortActiveCateList();
            $total=$this->collect->count();
            $page=new \Think\PageAjax($total,PAGE_SIZE);
            $show=$page->show();
            $collectlist=$this->collect->order('date DESC')->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('catelist',$catelist);
            $this->assign('collectlist',$collectlist);
            $this->assign('page',$show);
            $this->display();
        }
    }
    public function add(){
        $id=I('param.id');
        $oneGoods=$this->goods->field('id,cateid')->where(array('id'=>$id))->find();
        if($oneGoods){
            $data['gid']=$oneGoods['id'];
            $data['cateid']=$oneGoods['cateid'];
            $data['uid']=session('user.id');
            if($this->collect->create($data)){
                if($this->collect->add()){
                    $this->apiReturn(200,'添加收藏成功');
                }else{
                    $this->apiReturn(404,'添加收藏失败');
                }
            }else{
                $this->apiReturn(402,$this->collect->getError());
            }
        }else{
            $this->apiReturn(401,'参数错误,未找到该商品信息');
        }
    }
    public function del(){
        $id=I('param.id');
        if($this->collect->delete($id)){
            $this->apiReturn(200,'删除成功');
        }else{
            $this->apiReturn(404,'删除失败');
        }
    }
    public function ajaxSearch(){
        $datetime=time();
        $data=I('param.');
        if(isset($data['type']) && $data['type'] == 1){
            $map['date']=array('gt',$datetime-24*3600*30);
        }elseif(isset($data['type']) && $data['type'] == 2){
            $map['date']=array('gt',$datetime-24*3600*90);
        }elseif(isset($data['type']) && $data['type'] == 3){
            $map['date']=array('gt',$datetime-24*3600*180);
        }elseif(isset($data['type']) && $data['type'] == 4){
            $map['date']=array('gt',$datetime-24*3600*360);
        }
        if(isset($data['cateid']) && $data['cateid'] != 0){
            $arr=$this->cate->getDelIds($data['cateid']);
            $map['cateid']=array('in',$arr);
        }
        $total=$this->collect->where($map)->count();
        $page=new \Think\PageAjax($total,PAGE_SIZE);
        $show=$page->show();
        $collectlist=$this->collect->where($map)->order('date DESC')->limit($page->firstRow.','.$page->listRows)->select();
        if($collectlist){
            $this->apiReturn(200,'获取分页数据成功',array('list'=>$collectlist,'page'=>$show));
        }else{
            $this->apiReturn(404,'暂无数据');
        }
    }
}