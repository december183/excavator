<?php
namespace Admin\Model;
use Think\Model;
class AuthModel extends Model{
    protected $_validate=array(
        array('name','require','菜单名称不能为空'),
        array('name','','菜单名称不能重复',0,'unique',1),
        array('sort','number','排序字段必须为数字',2,'regex'),
    );
    protected $_auto=array(
        array('sort','getAutoIncid',1,'callback'),
    );

    /**
     * 检查名称是否重复
     * @param int $id
     * @param string $name
     * @return bool
     */
    public function checkName($id,$name){
        $oneAuth = $this->field('id,name')->where(array('name'=>$name))->find();
        if($oneAuth){
            return $oneAuth['id'] == $id ? true : false;
        }
        return true;
    }
    /**
     * 获取自增ID;
     * @return int auto_increment;
     */
    public function getAutoIncid(){
        $res=$this->query("SHOW TABLE STATUS LIKE 'gms_auth'");
        return $res[0]['auto_increment'];
    }

    /**
     * 获取排序之后的权限数组
     * @return array
     */
    public function getAuthList(){
        $topItems=$this->query('SELECT id,pid,name FROM gms_auth WHERE isauth=1 AND pid=0 ORDER BY sort ASC');
        $subItems=$this->query('SELECT id,pid,name FROM gms_auth WHERE isauth=1 AND pid<>0');
        return self::resort($topItems,$subItems);
    }

    /**
     * 获取所有的顶级菜单
     * @return array
     */
    public function getTopItemList(){
        return $this->query('SELECT id,name FROM gms_auth WHERE pid=0 ORDER BY sort ASC');
    }

    /**
     * 获取排序之后的菜单列表
     * @return array
     */
    public function getSortItemList(){
        $topItems=$this->query('SELECT * FROM gms_auth WHERE pid=0 ORDER BY sort ASC');
        $subItems=$this->query('SELECT * FROM gms_auth WHERE pid<>0 ORDER BY sort ASC');
        return self::resort($topItems,$subItems);
    }

    /**
     * 获取用户菜单列表
     * @param array $authlist
     * @return array
     */
    public function getUserItemList(Array $authlist){
        $map['isauth']=array('eq',1);
        $map['status']=array('eq',1);
        $map['id']=array('in',$authlist['auth']);
        $items1=$this->query('SELECT id,pid,name,icon,action FROM gms_auth WHERE isauth=0 AND status=1 ORDER BY sort ASC');
        $items2=$this->field('id,pid,name,icon,action')->where($map)->order('sort ASC')->select();
        $items=array_add($items1,$items2);
        $subItems=array();
        foreach($items as $value){
            if($value['pid'] != 0){
                $subItems[]=$value;
                $arr[]=$value['pid'];
            }else{
                $arr[]=$value['id'];
            }
        }
        $ids=implode(',',array_unique($arr));
        $condition['id']=array('in',$ids);
        $topItems=$this->field('id,pid,name,icon,action')->where($condition)->order('sort ASC')->select();
        return self::resort($topItems,$subItems);
    }

    /**
     * 获取所有待删除的ID数组
     * @param mixed $param
     * @return array
     */
    public function getDelIds($param){
        $arr=array();
        if(is_array($param)){
            foreach($param as $value){
                $childArr=self::getChildIds($value);
                $arr=array_add($arr,$childArr);
            }
            $arr=array_add($arr,$param);
            $arr=array_unique($arr);
        }else{
            $arr=self::getChildIds($param);
            array_push($arr,$param);
        }
        return $arr;
    }

    /**
     * 获取所有$pid下的所有子类菜单id
     * @param int $pid
     * @return array
     */
    public function getChildIds($pid){
        $res=array();
        $subItems=$this->field('id')->where(array('pid'=>$pid))->select();
        if($subItems){
            foreach($subItems as $value){
                $res[]=$value['id'];
            }
        }
        return $res;
    }

    /**
     * 对传入的数组进行整理，将第二个数组里的元素按条件插入第一个数组中的child字段
     * @param array $param1
     * @param array $param2
     * @return array
     */
    public function resort(Array $param1,Array $param2){
        $list=array();
        foreach($param1 as $item){
            foreach($param2 as $sub){
                if($sub['pid'] == $item['id']){
                    $item['child'][]=$sub;
                }
            }
            $list[]=$item;
        }
        return $list;
    }
}