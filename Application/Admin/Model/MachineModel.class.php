<?php
namespace Admin\Model;
use Think\Model;
class MachineModel extends Model{
    protected $_validate=array(
        array('cateid','0','机器分类必须选择',0,'notequal'),
        array('brand','0','机器品牌必须选择',0,'notequal'),
        array('accesno','require','机器型号不能为空'),
        array('accesno','','机器型号不能重复',0,'unique'),
    );
    protected $_auto=array(

    );
    /**
     * 检查型号是否重复
     * @param int $id
     * @param string $name
     * @return bool
     */
    public function checkName($id,$name){
        $oneMachine = $this->field('id,machineno')->where(array('machineno'=>$name))->find();
        if($oneMachine){
            return $oneMachine['id'] == $id ? true : false;
        }
        return true;
    }
    /**
     * 根据品牌分组返回挖掘机的机型
     * @return array
     */
    public function getMachineList(){
        $memcache=new \Think\Cache\Driver\Memcache();
        $machineStr=$memcache->get('machineList');
        if($machineStr != ''){
            return json_decode($machineStr,true);
        }
        $cateid=11;
        $brand=D('Brand');
        $cate=D('Category');
        $brandlist=$brand->getBrandInfo($cateid,$cate);
        $machinelist=array();
        foreach($brandlist as $value){
            $list=$this->field('id,machineno')->where(array('brand'=>$value['id']))->select();
            $value['child']=$list;
            $machinelist[]=$value;
        }
        $memcache->set('machineList',json_encode($machinelist));
        return $machinelist;
    }
}