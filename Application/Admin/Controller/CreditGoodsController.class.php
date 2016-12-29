<?php
namespace Admin\Controller;
use Think\Controller;
class CreditGoodsController extends BaseController{
    private $creditgoods=null;
    private $cate=null;
    public function __construct(){
        parent::__construct();
        $this->creditgoods=D('CreditGoods');
        $this->cate=D('Category');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if($data['action'] == 1){
                $ids=implode(',',$data['ids']);
                if($this->creditgoods->delete($ids)){
                    $this->apiReturn(200,'批量删除成功',array('url'=>'index.php?s=/Admin/CreditGoods/index'));
                }else{
                    $this->apiReturn(404,'批量删除失败');
                }
            }elseif($data['action'] == 2){
                foreach($data['ids'] as $id){
                    if($this->goods->where(array('id'=>$id))->setField('isup',1) < 1){
                        $this->apiReturn(404,'批量上架失败');
                    }
                }
                $this->apiReturn(200,'批量上架成功',array('url'=>'index.php?s=/Admin/CreditGoods/index'));
            }elseif($data['action'] == 3){
                foreach($data['ids'] as $id){
                    if($this->creditgoods->where(array('id'=>$id))->setField('status',1) < 1){
                        $this->apiReturn(404,'批量设置失败');
                    }
                }
                $this->apiReturn(200,'批量设置成功',array('url'=>'index.php?s=/Admin/CreditGoods/index'));
            }
        }else{
            $total=$this->creditgoods->count();
            $page=new \Think\PageAjax($total,PAGE_SIZE);
            $show=$page->show();
            $goodslist=$this->creditgoods->alias('a')->join('gms_brand AS b ON a.brand=b.id')->field('a.id,a.title,a.tags,a.thumbpic,b.name AS brandname,a.credit,a.inventory,a.hits,a.isfreight,a.isup,a.isrec')->order('date DESC')->limit($page->firstRow.','.$page->listRows)->select();
            $catelist=$this->cate->getSortActiveCateList();
            $this->assign('goodslist',$goodslist);
            $this->assign('page',$show);
            $this->assign('catelist',$catelist);
            $this->display();
        }
    }
    public function add(){
        if(IS_POST){
            $data=I('param.');
            $data['attrstr']=json_encode($data['attr']);
            if($data['mainpic']{strlen($data['mainpic'])-1} == ';'){
                $data['mainpic']=substr($data['mainpic'],0,-1);
            }
            if($data['thumbpic']{strlen($data['thumbpic'])-1} == ';'){
                $data['thumbpic']=substr($data['thumbpic'],0,-1);
            }
            if($this->creditgoods->create($data)){
                if($this->creditgoods->add()){
                    $this->apiReturn(200,'添加积分商品成功',array('url'=>'index.php?s=/Admin/CreditGoods/index'));
                }else{
                    $this->apiReturn(404,'添加积分商品失败');
                }
            }else{
                $this->apiReturn(402,$this->creditgoods->getError());
            }
        }else{
            $catelist=$this->cate->getSortActiveCateList();
            $this->assign('catelist',$catelist);
            $this->display();
        }
    }
    public function edit(){
        if(IS_POST){
            $data=I('param.');
            $data['attrstr']=json_encode($data['attr']);
            if($data['mainpic']{strlen($data['mainpic'])-1} == ';'){
                $data['mainpic']=substr($data['mainpic'],0,-1);
            }
            if($data['thumbpic']{strlen($data['thumbpic'])-1} == ';'){
                $data['thumbpic']=substr($data['thumbpic'],0,-1);
            }
            if(!$this->creditgoods->checkName($data['id'],$data['title'])){
                $this->apiReturn(402,'商品标题不能重复');
            }
            if($this->creditgoods->create($data)){
                if($this->creditgoods->save()){
                    $this->apiReturn(200,'修改积分商品成功',array('url'=>'index.php?s=/Admin/CreditGoods/index'));
                }else{
                    $this->apiReturn(404,'修改积分商品失败');
                }
            }else{
                $this->apiReturn(402,$this->creditgoods->getError());
            }
        }else{
            $id=I('param.id');
            $oneGoods=$this->creditgoods->where(array('id'=>$id))->find();
            $oneGoods['thumb']=explode(';',$oneGoods['thumbpic']);
            $catelist=$this->cate->getSortActiveCateList();
            $this->assign('oneGoods',$oneGoods);
            $this->assign('catelist',$catelist);
            $this->display();
        }
    }
    public function del(){
        $id=I('param.id');
        if($this->creditgoods->delete($id)){
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
        if(isset($data['cateid']) && $data['cateid'] != 0){
            $arr=$this->cate->getDelIds($data['cateid']);
            $map['cateid']=array('in',$arr);
        }
        $total=$this->creditgoods->where($map)->count();
        $page=new \Think\PageAjax($total,PAGE_SIZE);
        $show=$page->show();
        $goodslist=$this->creditgoods->alias('a')->join('gms_brand AS b ON a.brand=b.id')->field('a.id,a.title,a.tags,a.thumbpic,b.name AS brandname,a.credit,a.inventory,a.hits,a.isfreight,a.isup,a.isrec')->where($map)->order('a.date DESC')->limit($page->firstRow.','.$page->listRows)->select();
        if($goodslist){
            $this->apiReturn(200,'获取分页数据成功',array('list'=>$goodslist,'page'=>$show));
        }else{
            $this->apiReturn(404,'暂无数据');
        }
    }
    public function setUp(){
        $data['id']=I('param.id');
        $oneGoods=$this->creditgoods->field('id,isup')->where($data)->find();
        if($oneGoods){
            if($oneGoods['isup'] == 1){
                $data['isup']=0;
                if($this->creditgoods->save($data)){
                    $this->apiReturn(200,'已下架');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }else{
                $data['isup']=1;
                if($this->creditgoods->save($data)){
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
        $oneGoods=$this->creditgoods->field('id,isrec')->where($data)->find();
        if($oneGoods){
            if($oneGoods['isrec'] == 1){
                $data['isrec']=0;
                if($this->creditgoods->save($data)){
                    $this->apiReturn(200,'未推荐');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }else{
                $data['isrec']=1;
                if($this->creditgoods->save($data)){
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