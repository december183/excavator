<?php
namespace Admin\Model;
use Think\Model;
class BrandModel extends Model{
    protected $_validate=array(
        array('name','require','品牌名称不能为空'),
        array('name','','品牌名称不能重复',0,'unique',1),
        array('cateids','require','关联分类必须选择',1,'regex'),
        array('sort','number','排序字段必须为数字',2,'regex'),
    );
    protected $_auto=array(
        array('sort','getAutoIncId',1,'callback'),
    );
    /**
     * 检查名称是否重复
     * @param int $id
     * @param string $name
     * @return bool
     */
    public function checkName($id,$name){
        $oneBrand = $this->field('id,name')->where(array('name'=>$name))->find();
        if($oneBrand){
            return $oneBrand['id'] == $id ? true : false;
        }
        return true;
    }
    /**
     * 获取自增ID;
     * @return int auto_increment;
     */
    public function getAutoIncId(){
        $res=$this->query("SHOW TABLE STATUS LIKE 'gms_brand'");
        return $res[0]['auto_increment'];
    }

}