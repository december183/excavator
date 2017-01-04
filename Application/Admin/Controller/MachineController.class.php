<?php
namespace Admin\Controller;
use Think\Controller;
class MachineController extends BaseController{
    private $machine=null;
    private $cate=null;
    private $brand=null;
    public function __construct(){
        parent::__construct();
        $this->machine=D('Machine');
        $this->cate=D('Category');
        $this->brand=D('Brand');
    }
    public function index(){
        if(IS_POST){
            $data = I('param.');
            if ($data['action'] == 1) {
                $ids = implode(',', $data['ids']);
                if ($this->accessory->delete($ids)) {
                    $this->apiReturn(200, '批量删除成功', array('url' => 'index.php?s=Admin/Machine/index'));
                } else {
                    $this->apiReturn(404, '批量删除失败');
                }
            }
        }else{
            $catelist=$this->cate->field('id,name')->where(array('pid'=>1))->select();
            $total=$this->machine->count();
            $page=new \Think\PageAjax($total,PAGE_SIZE);
            $show=$page->show();
            $machinelist=$this->machine->alias('a')->join('LEFT JOIN gms_brand AS b ON a.brand=b.id')->join('LEFT JOIN gms_category AS c ON a.cateid=c.id')->field('a.id,a.thumbpic,a.machineno,c.name AS catename,b.name AS brandname')->order('a.cateid ASC,a.brand ASC,a.id DESC')->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('catelist',$catelist);
            $this->assign('page',$show);
            $this->assign('machinelist',$machinelist);
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
            if($this->machine->create($data)){
                if($this->machine->add()){
                    $memcache=self::getMemcache();
                    $memcache->delete('machineList');
                    $this->apiReturn(200,'添加机型成功',array('url'=>'index.php?s=Admin/Machine/index'));
                }else{
                    $this->apiReturn(404,'添加机型失败');
                }
            }else{
                $this->apiReturn(402,$this->machine->getError());
            }
        }else{
            $catelist=$this->cate->field('id,name')->where(array('pid'=>1))->select();
            $this->assign('catelist',$catelist);
            $this->display();
        }
    }
    public function edit(){
        if(IS_POST){
            $data=I('param.');
            if(!$this->machine->checkName($data['id'],$data['machineno'])){
                $this->apiReturn(402,'机器型号不能重复');
            }
            if(isset($_FILES['pic']['tmp_name'])){
                $info=$this->upOne();
                $path=APP_ROOT.'/Uploads/images/'.$info['savepath'].$info['savename'];
                $data['thumbpic']=$this->thumb($path,200,200);
            }
            if($this->machine->create($data)){
                if($this->machine->save()){
                    $memcache=self::getMemcache();
                    $memcache->delete('machineList');
                    $this->apiReturn(200,'修改机型成功',array('url'=>'index.php?s=Admin/Machine/index'));
                }else{
                    $this->apiReturn(404,'修改机型失败');
                }
            }else{
                $this->apiReturn(402,$this->machine->getError());
            }
        }else{
            $id=I('param.id');
            $oneMachine=$this->machine->where(array('id'=>$id))->find();
            $catelist=$this->cate->field('id,name')->where(array('pid'=>1))->select();
            $this->assign('oneMachine',$oneMachine);
            $this->assign('catelist',$catelist);
            $this->display();
        }
    }
    public function del(){
        $id=I('param.id');
        if($this->machine->delete($id)){
            $memcache=self::getMemcache();
            $memcache->delete('machineList');
            $this->apiReturn(200,'删除成功');
        }else{
            $this->apiReturn(404,'删除失败');
        }
    }
    public function ajaxSearch(){
        $data=I('param.');
        if(isset($data['keywords']) && !empty($data['keywords'])){
            $map['machineno']=array('like','%'.$data['keywords'].'%');
            $condition['machineno']=array('like','%'.$data['keywords'].'%');
        }
        if(isset($data['cateid']) && $data['cateid'] != 0){
            $map['cateid']=array('eq',$data['cateid']);
            $condition['a.cateid']=array('eq',$data['cateid']);
        }
        if(isset($data['brand']) && $data['brand'] != 0){
            $map['brand']=array('eq',$data['brand']);
            $condition['a.brand']=array('eq',$data['brand']);
        }
        $total=$this->machine->where($map)->count();
        $page=new \Think\PageAjax($total,PAGE_SIZE);
        $show=$page->show();
        $machinelist=$this->machine->alias('a')->join('LEFT JOIN gms_brand AS b ON a.brand=b.id')->join('LEFT JOIN gms_category AS c ON a.cateid=c.id')->field('a.id,a.thumbpic,a.machineno,c.name AS catename,b.name AS brandname')->where($condition)->order('a.cateid ASC,a.brand ASC,a.id DESC')->limit($page->firstRow.','.$page->listRows)->select();
        if($machinelist){
            $this->apiReturn(200,'获取分页数据成功',array('list'=>$machinelist,'page'=>$show));
        }else{
            $this->apiReturn(404,'暂无数据');
        }
    }
}