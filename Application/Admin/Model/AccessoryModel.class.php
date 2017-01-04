<?php
namespace Admin\Model;
use Think\Model;
class AccessoryModel extends Model{
    protected $_validate=array(
        array('cateid','0','配件分类必须选择',0,'notequal'),
        array('brand','0','配件品牌必须选择',0,'notequal'),
        array('accesno','require','配件型号不能为空'),
        array('accesno','','配件型号不能重复',0,'unique'),
        array('machids','require','关联机型不能为空',1,'regex'),
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
        $oneAcces = $this->field('id,accesno')->where(array('accesno'=>$name))->find();
        if($oneAcces){
            return $oneAcces['id'] == $id ? true : false;
        }
        return true;
    }
}