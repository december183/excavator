<?php
namespace Admin\Model;
use Think\Model;
class CategoryModel extends Model{
    protected $_validate=array(
        array('name','require','分类名称不能为空'),
        array('name','','分类名称不能重复',0,'unique',1),
        array('sort','number','排序字段必须为数字',2,'regex'),
    );
    protected $_auto=array(
        array('sort','getAutoIncId',1,'callback'),
    );
    /**
     * 获取自增ID;
     * @return int auto_increment;
     */
    public function getAutoIncid(){
        $res=$this->query("SHOW TABLE STATUS LIKE 'gms_category'");
        return $res[0]['auto_increment'];
    }

    /**
     * 检查名称是否重复
     * @param int $id
     * @param string $name
     * @return bool
     */
    public function checkName($id,$name){
        $oneCate = $this->field('id,name')->where(array('name'=>$name))->find();
        if($oneCate){
            return $oneCate['id'] == $id ? true : false;
        }
        return true;
    }

    /**
     * 检查上级分类ID选择是否正确
     * @param int $id
     * @param int $pid
     * @return bool
     */
    public function checkPid($id,$pid){
        $arr=self::getDelIds($id);
        return in_array($pid,$arr) ? true : false;
    }

    /**
     * 获取所有激活的商品分类
     */
    public function getActiveCateList(){
        return $this->field('id,pid,name')->where(array('status'=>1))->order('sort ASC')->select();
    }

    /**
     * 获取所有的商品分类
     */
    public function getCateList(){
        return $this->order('sort ASC')->select();
    }

    /**
     * 获取排序整理之后的所有激活商品分类
     * @return array
     */
    public function getSortActiveCateList(){
        $memcache=new \Think\Cache\Driver\Memcache();
        $string=$memcache->get('cateActive');
        if($string != ''){
            return json_decode($string,true);
        }
        $list=self::getActiveCateList();
        $sortlist=self::resort($list);
        $cateActive=self::getDisposedCate($sortlist);
        $memcache->set('cateActive',json_encode($cateActive));
        return $cateActive;
    }

    /**
     * 获取整理之后的所有商品分类
     * @return array
     */
    public function getSortCateList(){
        $memcache=new \Think\Cache\Driver\Memcache();
        $string=$memcache->get('cateList');
        if($string != ''){
            return json_decode($string,true);
        }
        $list=self::getCateList();
        $sortlist=self::resort($list);
        $cateList=self::getDisposedCate($sortlist);
        $memcache->set('cateList',json_encode($cateList));
        return $cateList;
    }

    /**
     * 返回重新整理的商品分类，将所有子类作为相应顶级分类的child属性
     * @param array $param
     * @return array
     */
    public function getDisposedCate($param){
        $keyArr=$sortNav=$res=array();
        //获取顶级栏目
        foreach($param as $key=>$value){
            if($value['level']==0){
                $keyArr[]=$key;
                $sortNav[]=$value;
            }
        }
        //将相应子栏目作为对应顶级栏目的child属性
        $length=count($param);
        $leng=count($sortNav);
        foreach($sortNav as $k=>$v){
            $next=$keyArr[$k+1];
            $prev=$keyArr[$k];
            //截取相应的子类信息
            if($next-$prev > 1){
                $v['child']=array_slice($param,$prev+1,$next-$prev-1);
            }elseif($k == $leng-1 && $prev != $length-1){
                $v['child']=array_slice($param,$prev+1);
            }else{
                $v['child']=null;
            }
            $res[]=$v;
        }
        return $res;
    }

    /**
     * 递归将传入的分类数组信息按层级关系重新排序并返回排序之后的分类数组
     * @param array $data
     * @param int $pid
     * @param int $level
     * @return array
     */
    private function resort($data,$pid=0,$level=0){
        static $res=array();
        foreach($data as $key=>$value){
            if($value['pid'] == $pid){
                $value['level']=$level;
                $res[]=$value;
                $this->resort($data,$value['id'],$level+1);
            }
        }
        return $res;
    }
    /**
     * 获取所有待删除的ID数组
     * @param mixed $param
     * @return array
     */
    public function getDelIds($param){
        $arr=array();
        $catelist=json_decode(self::getCateList(),true);
        if(is_array($param)){
            foreach($param as $value){
                $child=$this->getChildIds($catelist,$value);
                $arr=array_merge($arr,$child);
            }
            $arr=array_add($arr,$param);
            $arr=array_unique($arr);
        }else{
            $arr=$this->getChildIds($catelist,$param);
            array_push($arr,$param);
        }
        return $arr;
    }

    /**
     * 递归获取$id下所有子类id
     * @param array $data
     * @param int $id
     * @return array
     */
    protected function getChildIds($data,$id){
        static $result=array();
        foreach($data as $value){
            if($value['pid']==$id){
                $result[]=$value['id'];
                $this->getChildIds($data,$value['id']);
            }
        }
        return $result;
    }
}