<?php
namespace Admin\Controller;
use Think\Controller;
class AccessoryController extends BaseController{
    private $accessory=null;
    private $cate=null;
    private $machine=null;
    private $accessorymachine=null;
    public function __construct(){
        parent::__construct();
        $this->accessory=D('Accessory');
        $this->cate=D('Category');
        $this->machine=D('Machine');
        $this->accessorymachine=D('AccessoryMachine');
    }
    public function index(){
        if(IS_POST) {
            $data = I('param.');
            if ($data['action'] == 1) {
                $ids = implode(',', $data['ids']);
                if ($this->accessory->delete($ids)) {
                    $this->apiReturn(200, '批量删除成功', array('url' => 'index.php?s=Admin/Accessory/index'));
                } else {
                    $this->apiReturn(404, '批量删除失败');
                }
            }
        }else{
            $catelist=$this->cate->getSortActiveCateList();
            $total=$this->accessory->count();
            $page=new \Think\PageAjax($total,PAGE_SIZE);
            $show=$page->show();
            $list=$this->accessory->alias('a')->join('LEFT JOIN gms_brand AS b ON a.brand=b.id')->join('LEFT JOIN gms_category AS c ON a.cateid=c.id')->field('a.id,b.name AS brandname,c.name AS catename,a.accesno,a.thumbpic,a.machids')->order('a.cateid ASC,a.id DESC')->limit($page->firstRow.','.$page->listRows)->select();
            $accessorylist=self::processData($list);
            $this->assign('page',$show);
            $this->assign('accessorylist',$accessorylist);
            $this->assign('catelist',$catelist);
            $this->display();
        }
    }
    public function processData($param){
        $res=array();
        foreach($param as $value){
            $data['ids']=explode(',',$value['machids']);
            $machine=array();
            foreach($data['ids'] as $id){
                $oneMachine=$this->machine->field('machineno')->where(array('id'=>$id))->find();
                $machine[]=$oneMachine['machineno'];
            }
            $value['machineno']=implode(',',$machine);
            $res[]=$value;
        }
        return $res;
    }
    public function add(){
        if(IS_POST){
            $data=I('param.');
            if(isset($_FILES['pic']['tmp_name'])){
                $info=$this->upOne();
                $path=APP_ROOT.'/Uploads/images/'.$info['savepath'].$info['savename'];
                $data['thumbpic']=$this->thumb($path,200,200);
            }
            $data['machids']=implode(',',$data['ids']);
            if($this->accessory->create($data)){
                $this->accessory->startTrans();
                if($insertId=$this->accessory->add()){
                    foreach($data['ids'] as $id){
                        $data2['accesid']=$insertId;
                        $data2['machineid']=$id;
                        if(!$this->accessorymachine->add($data2)){
                            $this->accessory->rollback();
                            $this->apiReturn(403,'插入配件关联机型数据失败');
                        }
                    }
                    $this->accessory->commit();
                    $this->apiReturn(200,'添加配件成功',array('url'=>'index.php?s=Admin/Accessory/index'));
                }else{
                    $this->accessory->rollback();
                    $this->apiReturn(404,'添加配件失败');
                }
            }else{
                $this->apiReturn(402,$this->accessory->getError());
            }
        }else{
            $catelist=$this->cate->getSortActiveCateList();
            $machinelist=$this->machine->getMachineList();
            $this->assign('catelist',$catelist);
            $this->assign('machinelist',$machinelist);
            $this->display();
        }
    }
    public function edit(){
        if(IS_POST){
            $data=I('param.');
            if(!$this->accessory->checkName($data['id'],$data['accesno'])){
                $this->apiReturn(402,'配件型号不能重复');
            }
            if(isset($_FILES['pic']['tmp_name'])){
                $info=$this->upOne();
                $path=APP_ROOT.'/Uploads/images/'.$info['savepath'].$info['savename'];
                $data['thumbpic']=$this->thumb($path,200,200);
            }
            $data['machids']=implode(',',$data['ids']);
            if($this->accessory->create($data)){
                $this->accessory->startTrans();
                if($this->accessory->save()){
                    $list=$this->accessorymachine->field('id')->where(array('accesid'=>$data['id']))->select();
                    $ids=implode(',',array_column($list,'id'));
                    $this->accessorymachine->delete($ids);
                    foreach($data['ids'] as $id){
                        $data2['accesid']=$data['id'];
                        $data2['machineid']=$id;
                        if(!$this->accessorymachine->add($data2)){
                            $this->accessory->rollback();
                            $this->apiReturn(403,'修改配件关联机型数据失败');
                        }
                    }
                    $this->accessory->commit();
                    $this->apiReturn(200,'修改配件成功',array('url'=>'index.php?s=Admin/Accessory/index'));
                }else{
                    $this->accessory->rollback();
                    $this->apiReturn(404,'修改配件失败');
                }
            }else{
                $this->apiReturn(402,$this->accessory->getError());
            }
        }else{
            $data['id']=I('param.id');
            $oneAcces=$this->accessory->where($data)->find();
            $catelist=$this->cate->getSortActiveCateList();
            $machinelist=$this->machine->getMachineList();
            $this->assign('oneAcces',$oneAcces);
            $this->assign('catelist',$catelist);
            $this->assign('machinelist',$machinelist);
            $this->display();
        }
    }
    public function del(){
        $id=I('param.id');
        $this->accessory->startTrans();
        if($this->accessory->delete($id)){
            $list=$this->accessorymachine->field('id')->where(array('accesid'=>$id))->select();
            $ids=implode(',',array_column($list,'id'));
            if(!$this->accessorymachine->delete($ids)){
                $this->rollback();
                $this->apiReturn(403,'删除关联机型数据失败');
            }
            $this->accessory->commit();
            $this->apiReturn(200,'删除成功');
        }else{
            $this->accessory->rollback();
            $this->apiReturn(404,'删除失败');
        }
    }
    public function ajaxSearch(){
        $data=I('param.');
        if(isset($data['keywords']) && !empty($data['keywords'])){
            $map['accesno']=array('like','%'.$data['keywords'].'%');
            $condition['accesno']=array('like','%'.$data['keywords'].'%');
        }
        if(isset($data['cateid']) && $data['cateid'] != 0){
            $map['cateid']=array('eq',$data['cateid']);
            $condition['a.cateid']=array('eq',$data['cateid']);
        }
        if(isset($data['brand']) && $data['brand'] != 0){
            $map['brand']=array('eq',$data['brand']);
            $condition['a.brand']=array('eq',$data['brand']);
        }
        $total=$this->accessory->where($map)->count();
        $page=new \Think\PageAjax($total,PAGE_SIZE);
        $show=$page->show();
        $list=$this->accessory->alias('a')->join('LEFT JOIN gms_brand AS b ON a.brand=b.id')->join('LEFT JOIN gms_category AS c ON a.cateid=c.id')->field('a.id,b.name AS brandname,c.name AS catename,a.accesno,a.thumbpic,a.machids')->where($condition)->order('a.cateid ASC,a.id DESC')->limit($page->firstRow.','.$page->listRows)->select();
        $accessorylist=self::processData($list);
        if($accessorylist){
            $this->apiReturn(200,'获取分页数据成功',array('list'=>$accessorylist,'page'=>$show));
        }else{
            $this->apiReturn(404,'暂无数据');
        }
    }
}