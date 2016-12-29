<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleTypeController extends BaseController{
    private $type=null;
    public function __construct(){
        parent::__construct();
        $this->type=D('ArticleType');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if($data['action'] == 1){
                $ids=implode(',',$data['ids']);
                if($this->type->delete($ids)){
                    $this->apiReturn(200,'批量删除成功',array('url'=>'index.php?s=Admin/ArticleType/index'));
                }else{
                    $this->apiReturn(404,'批量删除失败');
                }
            }elseif($data['action'] == 2){
                foreach($data['ids'] as $id){
                    if($this->type->where(array('id'=>$id))->setField('status',1) < 1){
                        $this->apiReturn(404,'批量设置失败');
                    }
                }
                $this->apiReturn(200,'批量设置成功',array('url'=>'index.php?s=Admin/ArticleType/index'));
            }
        }else{
            $typelist=$this->type->where(array('status'=>1))->select();
            $this->assign('typelist',$typelist);
            $this->display();
        }
    }
    public function add(){
        if(IS_POST){
            $data=I('param.');
            if($this->type->create($data)){
                if($this->type->add()){
                    $this->apiReturn(200,'新增文章类型成功',array('url'=>'index.php?s=Admin/ArticleType/index'));
                }else{
                    $this->apiReturn(404,'新增文章类型失败');
                }
            }else{
                $this->apiReturn(402,$this->type->getError());
            }
        }else{
            $this->display();
        }
    }
    public function edit(){
        if(IS_POST){
            $data=I('param.');
            if(!$this->type->checkName($data['id'],$data['name'])){
                $this->apiReturn(403,'文章类型名称不能重复');
            }
            if($this->type->create($data)){
                if($this->type->save()){
                    $this->apiReturn(200,'修改文章类型成功',array('url'=>'index.php?s=Admin/ArticleType/index'));
                }else{
                    $this->apiReturn(404,'修改文章类型失败');
                }
            }else{
                $this->apiReturn(402,$this->type->getError());
            }
        }else{
            $id=I('get.id');
            $oneType=$this->type->where(array('id'=>$id))->find();
            $this->assign('oneType',$oneType);
            $this->display();
        }
    }
    public function del(){
        $id=I('param.id');
        if($this->type->delete($id)){
            $this->apiReturn(200,'删除成功');
        }else{
            $this->apiReturn(404,'删除失败');
        }
    }
    public function setStatus(){
        $data['id']=I('param.id');
        $oneType=$this->type->field('id,status')->where($data)->find();
        if($oneType){
            if($oneType['status'] == 1){
                $data['status']=0;
                if($this->type->save($data)){
                    $this->apiReturn(200,'未使用');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }else{
                $data['status']=1;
                if($this->type->save($data)){
                    $this->apiReturn(200,'已使用');
                }else{
                    $this->apiReturn(404,'修改状态失败');
                }
            }
        }else{
            $this->apiReturn(401,'参数错误,未找到该类型信息');
        }
    }
}