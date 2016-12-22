<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends BaseController{
    private $goods=null;
    private $cate=null;
    private $type=null;
    public function __construct(){
        parent::__construct();
        $this->goods=D('Goods');
        $this->cate=D('Category');
        $this->type=D('GoodsType');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if($data['action'] == 1){
                $ids=implode(',',$data['ids']);
                if($this->goods->delete($ids)){
                    $this->apiReturn(200,'批量删除成功',array('url'=>'index'));
                }else{
                    $this->apiReturn(404,'批量删除失败');
                }
            }elseif($data['action'] == 2){
                foreach($data['ids'] as $id){
                    if($this->goods->where(array('id'=>$id))->setField('status',1) < 1){
                        $this->apiReturn(404,'批量审核失败');
                    }
                }
                $this->apiReturn(200,'批量审核成功',array('url'=>'index'));
            }elseif($data['action'] == 3){
                foreach($data['ids'] as $id){
                    if($this->goods->where(array('id'=>$id))->setField('isup',1) < 1){
                        $this->apiReturn(404,'批量上架失败');
                    }
                }
                $this->apiReturn(200,'批量上架成功',array('url'=>'index'));
            }elseif($data['action'] == 4){
                foreach($data['ids'] as $id){
                    if($this->goods->where(array('id'=>$id))->setField('isrec',1) < 1){
                        $this->apiReturn(404,'批量推荐失败');
                    }
                }
                $this->apiReturn(200,'批量推荐成功',array('url'=>'index'));
            }
        }else{
            $total=$this->goods->where()->count();
            $page=new \Think\PageAjax($total,PAGE_SIZE);
            $show=$page->show();
            $goodslist=$this->goods->alias('a')->join('gms_brand AS b ON a.brand=b.id')->field('a.id,a.title,a.tags,a.thumbpic,b.name AS brandname,a.price,a.inventory,a.hits,a.isfreight,a.isdiscount,a.ishot,a.isup,a.isrec,a.status')->where(array('isdelete'=>0))->select();
            $catelist=$this->cate->getSortActiveCateList();
            $typelist=$this->type->field('id,name')->where(array('status'=>1))->select();
            $this->assign('goodslist',$goodslist);
            $this->assign('page',$show);
            $this->assign('catelist',$catelist);
            $this->assign('typelist',$typelist);
            $this->display();
        }
    }
    public function del(){
        $id=I('param.id');
        if($this->goods->delete($id)){
            $this->apiReturn(200,'删除成功');
        }else{
            $this->apiReturn(404,'删除失败');
        }
    }
    public function ajaxSearch(){
        $data=I('param.');
        if(isset($data['keywords']) && !empty($data['keywords'])){
            $map['title']=array('like','%'.$data['keywords'].'%');
        }
        if(isset($data['type']) && $data['type'] != 0){
            $map['type']=array('eq',$data['type']);
        }
        if(isset($data['cateid']) && $data['cateid'] != 0){
            $arr=$this->cate->getDelIds($data['cateid']);
            $map['cateid']=array('in',$arr);
        }
        $map['isdelete']=array('eq',0);
        $total=$this->goods->where($map)->count();
        $page=new \Think\PageAjax($total,PAGE_SIZE);
        $show=$page->show();
        $goodslist=$this->goods->alias('a')->join('gms_brand AS b ON a.brand=b.id')->field('a.id,a.title,a.tags,a.thumbpic,b.name AS brandname,a.price,a.inventory,a.hits,a.isfreight,a.isdiscount,a.ishot,a.isup,a.isrec,a.status')->where($map)->order('a.date DESC')->limit($page->firstRow.','.$page->listRows)->select();
        if($goodslist){
            $this->apiReturn(200,'获取分页数据成功',array('list'=>$goodslist,'page'=>$show));
        }else{
            $this->apiReturn(404,'暂无数据');
        }
    }
    public function setStatus(){
        $data['id']=I('param.id');
        $oneGoods=$this->goods->field('id,status')->where($data)->find();
        if($oneGoods){
            if($oneGoods['status'] == 1){
                $data['status']=0;
                if($this->goods->save($data)){
                    $this->apiReturn(200,'未审核');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }else{
                $data['status']=1;
                if($this->goods->save($data)){
                    $this->apiReturn(200,'已通过');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }
        }else{
            $this->apiReturn(401,'参数错误,未找到该商品信息');
        }
    }
    public function setUp(){
        $data['id']=I('param.id');
        $oneGoods=$this->goods->field('id,isup')->where($data)->find();
        if($oneGoods){
            if($oneGoods['isup'] == 1){
                $data['isup']=0;
                if($this->goods->save($data)){
                    $this->apiReturn(200,'已下架');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }else{
                $data['isup']=1;
                if($this->goods->save($data)){
                    $this->apiReturn(200,'已上架');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }
        }else{
            $this->apiReturn(401,'参数错误,未找到该商品信息');
        }
    }
    public function setRec(){
        $data['id']=I('param.id');
        $oneGoods=$this->goods->field('id,isrec')->where($data)->find();
        if($oneGoods){
            if($oneGoods['isrec'] == 1){
                $data['isrec']=0;
                if($this->goods->save($data)){
                    $this->apiReturn(200,'未推荐');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }else{
                $data['isrec']=1;
                if($this->goods->save($data)){
                    $this->apiReturn(200,'已推荐');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }
        }else{
            $this->apiReturn(401,'参数错误,未找到该商品信息');
        }
    }
}