<?php
namespace Admin\Controller;
use Think\Controller;
class ConfigController extends BaseController{
    protected $config=null;
    public function __construct(){
        parent::__construct();
        $this->config=D('Config');
    }
    public function index(){
        if(IS_POST){
            $data=I('param.');
            if($data && is_array($data)){
                foreach($data as $key=>$value){
                    $map['name']=array('eq',$key);
                    $map['type']=array('eq',1);
                    $this->config->where($map)->setField('value',$value);
                }
                $this->apiReturn(200,'更新配置成功',array('url'=>'index.php?s=Admin/Config/index'));
            }
        }else{
            $configlist=$this->config->field('name,title,fieldtype,value,type')->where(array('type'=>1))->select();
            $this->assign('configlist',$configlist);
            $this->display();
        }
    }
    public function other(){
        if(IS_POST){
            $data=I('param.');
            if($data && is_array($data)){
                foreach($data as $key=>$value){
                    $map['name']=array('eq',$key);
                    $map['type']=array('eq',2);
                    $this->config->where($map)->setField('value',$value);
                }
                $memcache=self::getMemcache();
                $memcache->delete('markInfo');
                $this->apiReturn(200,'更新配置成功',array('url'=>'index.php?s=Admin/Config/other'));
            }
        }else{
            $configlist=$this->config->field('name,title,fieldtype,value,type')->where(array('type'=>2))->select();
            $this->assign('configlist',$configlist);
            $this->display();
        }
    }
    public function wechat(){
        if(IS_POST){
            $data=I('param.');
            if($data && is_array($data)){
                foreach($data as $key=>$value){
                    $map['name']=array('eq',$key);
                    $map['type']=array('eq',3);
                    $this->config->where($map)->setField('value',$value);
                }
                $this->apiReturn(200,'更新配置成功',array('url'=>'index.php?s=Admin/Config/wechat'));
            }
        }else{
            $configlist=$this->config->field('name,title,fieldtype,value,type')->where(array('type'=>3))->select();
            $this->assign('configlist',$configlist);
            $this->display();
        }
    }
}