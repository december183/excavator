<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends BaseController{
    private $article=null;
    private $type=null;
    public function __construct(){
        parent::__construct();
        $this->article=D('Article');
        $this->type=D('ArticleType');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if($data['action'] == 1){
                $ids=implode(',',$data['ids']);
                if($this->article->delete($ids)){
                    $this->apiReturn(200,'批量删除成功',array('url'=>'index.php?s=Admin/Article/index'));
                }else{
                    $this->apiReturn(404,'批量删除失败');
                }
            }elseif($data['action'] == 2){
                foreach($data['ids'] as $id){
                    if($this->article->where(array('id'=>$id))->setField('isrec',1) < 1){
                        $this->apiReturn(404,'批量推荐失败');
                    }
                }
                $this->apiReturn(200,'批量推荐成功',array('url'=>'index.php?s=Admin/Article/index'));
            }
        }else{
            $typelist=$this->type->field('id,name')->where(array('status'=>1))->select();
            $total=$this->article->count();
            $page=new \Think\PageAjax($total,PAGE_SIZE);
            $show=$page->show();
            $articlelist=$this->article->field('id,title,tags,thumbpic,descript,isrec')->order('date DESC')->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('typelist',$typelist);
            $this->assign('page',$show);
            $this->assign('articlelist',$articlelist);
            $this->display();
        }
    }
    public function add(){
        if(IS_POST){
            $data=I('param.');
            if(isset($_FILES['pic']['tmp_name'])){
                $info=$this->upOne();
                $path=APP_ROOT.'/Uploads/images/'.$info['savepath'].$info['savename'];
                $data['thumbpic']=$this->thumb($path,200,200);
            }
            if($this->article->create($data)){
                if($this->article->add()){
                    $this->apiReturn(200,'添加文章成功',array('url'=>'index.php?s=Admin/Article/index'));
                }else{
                    $this->apiReturn(404,'添加文章失败');
                }
            }else{
                $this->apiReturn(402,$this->article->getError());
            }
        }else{
            $typelist=$this->type->field('id,name')->where(array('status'=>1))->select();
            $this->assign('typelist',$typelist);
            $this->display();
        }
    }
    public function edit(){
        if(IS_POST){
            $data=I('param.');
            if(isset($_FILES['pic']['tmp_name'])){
                $info=$this->upOne();
                $path=APP_ROOT.'/Uploads/images/'.$info['savepath'].$info['savename'];
                $data['thumbpic']=$this->thumb($path,200,200);
            }
            if(!$this->article->checkName($data['id'],$data['title'])){
                $this->apiReturn(403,'文章标题不能重复');
            }
            if($this->article->create($data)){
                if($this->article->save()){
                    $this->apiReturn(200,'修改文章成功',array('url'=>'index.php?s=Admin/Article/index'));
                }else{
                    $this->apiReturn(404,'修改文章失败');
                }
            }else{
                $this->apiReturn(402,$this->article->getError());
            }
        }else{
            $id=I('get.id');
            $oneArticle=$this->article->where(array('id'=>$id))->find();
            $typelist=$this->type->field('id,name')->where(array('status'=>1))->select();
            $this->assign('oneArticle',$oneArticle);
            $this->assign('typelist',$typelist);
            $this->display();
        }
    }
    public function del(){
        $id=I('param.id');
        if($this->article->delete($id)){
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
        $total=$this->article->where($map)->count();
        $page=new \Think\PageAjax($total,PAGE_SIZE);
        $show=$page->show();
        $articlelist=$this->article->field('id,title,tags,thumbpic,descript,isrec')->where($map)->order('date DESC')->limit($page->firstRow.','.$page->listRows)->select();
        if($articlelist){
            $this->apiReturn(200,'获取分页数据成功',array('list'=>$articlelist,'page'=>$show));
        }else{
            $this->apiReturn(404,'暂无数据');
        }
    }
    public function setRec(){
        $data['id']=I('param.id');
        $oneArticle=$this->article->field('id,isrec')->where($data)->find();
        if($oneArticle){
            if($oneArticle['isrec'] == 1){
                $data['isrec']=0;
                if($this->article->save($data)){
                    $this->apiReturn(200,'未推荐');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }else{
                $data['isrec']=1;
                if($this->article->save($data)){
                    $this->apiReturn(200,'已推荐');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }
        }else{
            $this->apiReturn(401,'参数错误,未找到该文章信息');
        }
    }
}