<?php
namespace Admin\Model;
use Think\Model;
class ActivityModel extends Model{
    protected $_validate=array(
        array('title','require','活动主题不能为空'),
        array('title','','活动主题不能重复',0,'unique',1),
        array('starttime','require','活动开始时间必须填写'),
        array('endtime','require','活动结束时间必须填写'),
    );
    protected $_auto=array(
        array('date','time',1,'function'),
    );
    /**
     * 检查名称是否重复
     * @param int $id
     * @param string $name
     * @return bool
     */
    public function checkName($id,$name){
        $oneAvtive = $this->field('id,title')->where(array('title'=>$name))->find();
        if($oneAvtive){
            return $oneAvtive['id'] == $id ? true : false;
        }
        return true;
    }

    /**
     * 检查时间是否正确
     * @param string $start
     * @param string $end
     * @return bool
     */
    public function checkTime($start,$end){
        return strtotime($start)-strtotime($end) > 0 ? true : false;
    }
}