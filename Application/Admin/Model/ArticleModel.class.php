<?php
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model{
    protected $_validate=array(
        array('title','require','文章标题不能为空'),
        array('title','','文章标题不能重复',0,'unique',1),
        array('content','require','文章内容不能为空'),
    );
    protected $_auto=array(
        array('hits','randHits',1,'callback'),
        array('date','time',1,'function'),
    );

    /**
     * 获取初始点击量
     * @return int
     */
    public function randHits(){
        return rand(1,100);
    }
    /**
     * 检查名称是否重复
     * @param int $id
     * @param string $name
     * @return bool
     */
    public function checkName($id,$name){
        $oneArticle = $this->field('id,title')->where(array('title'=>$name))->find();
        if($oneArticle){
            return $oneArticle['id'] == $id ? true : false;
        }
        return true;
    }
}