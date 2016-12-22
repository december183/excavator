<?php
namespace Admin\Model;
use Think\Model;
class AdverModel extends Model{
    protected $_validate=array(
        array('title','require','广告标题不能为空'),
        array('title','','广告标题不能重复',0,'unique',1),
        array('linkurl','require','广告链接不能为空'),
    );
    protected $_auto=array(
        array('sort','getAutoIncid',1,'callback'),
        array('date','time',1,'function'),
    );
    /**
     * 检查名称是否重复
     * @param int $id
     * @param string $name
     * @return bool
     */
    public function checkName($id,$name){
        $oneAdver = $this->field('id,name')->where(array('name'=>$name))->find();
        if($oneAdver){
            return $oneAdver['id'] == $id ? true : false;
        }
        return true;
    }
    /**
     * 获取自增ID;
     * @return int auto_increment;
     */
    public function getAutoIncid(){
        $res=$this->query("SHOW TABLE STATUS LIKE 'gms_adver'");
        return $res[0]['auto_increment'];
    }
}