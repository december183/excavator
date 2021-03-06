<?php
namespace Admin\Model;
use Think\Model;
class ArticleTypeModel extends Model{
    protected $_validate=array(
        array('name','require','文章类型名称不能为空'),
        array('name','','文章类型名称不能重复',0,'unique',1),
    );
    protected $_auto=array(
        array(),
    );
    /**
     * 检查名称是否重复
     * @param int $id
     * @param string $name
     * @return bool
     */
    public function checkName($id,$name){
        $oneType = $this->field('id,title')->where(array('title'=>$name))->find();
        if($oneType){
            return $oneType['id'] == $id ? true : false;
        }
        return true;
    }
}