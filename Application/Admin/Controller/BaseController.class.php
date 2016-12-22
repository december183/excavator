<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller{
    protected $manage=null;
    protected $group=null;
    protected $auth=null;
    public function _initialize(){
        if(!session('user')){
            $this->redirect('Login/index');
        }
        $this->manage=D('Manage');
        $this->group=D('Group');
        $this->auth=D('Auth');
        self::checkAuth();
        $userItem=self::getUserItem();
        $curAction=self::getCurAction();
        $this->assign('userItem',$userItem);
        $this->assign('curAction',$curAction);
    }

    /**
     * 退出登录
     */
    public function logout(){
        session('user',null);
        session('userAuth',null);
        session('userItem',null);
        session_destroy();
        $this->redirect('Login/index');
    }

    /**
     * 获取当前操作
     * @return array
     */
    public function getCurAction(){
        $action=CONTROLLER_NAME.'/'.ACTION_NAME;
        return $this->auth->field('id,pid')->where(array('action'=>$action))->find();
    }
    /**
     * 检查用户权限
     */
    public function checkAuth(){
        $userAuth=self::getUserAuth();
        if($userAuth['groupid'] == 1){
            return;
        }
        $action=CONTROLLER_NAME.'/'.ACTION_NAME;
        $oneAuth=$this->auth->field('id')->where(array('isauth'=>1,'action'=>$action))->find();
        if($oneAuth){
            if(strpos($userAuth['auth'],$oneAuth['id']) !== false){
                return;
            }else{
                $this->error('暂无此操作权限');
            }
        }
        return;
    }

    /**
     * 获取用户权限
     * @return mixed
     */
    public function getUserAuth(){
        if(session('userAuth')){
            return session('userAuth');
        }
        $userAuth=$this->manage->alias('a')->join('gms_group AS b ON a.groupid=b.id')->field('a.groupid,b.auth')->where(array('a.id'=>session('user.id')))->find();
        if($userAuth){
            session('userAuth',$userAuth);
            return $userAuth;
        }else{
            $this->redirect('Login/index');
        }
    }

    /**
     * 获取用户菜单列表
     */
    public function getUserItem(){
        if(session('userItem')){
            return session('userItem');
        }
        $userAuth=self::getUserAuth();
        $userItem=$this->auth->getUserItemList($userAuth);
        session('userItem',$userItem);
        return $userItem;
    }

    /**
     * 返回Memcache连接对象
     */
    public function getMemcache(){
        return new \Think\Cache\Driver\Memcache();
    }

    /**
     * 返回上传对象
     * @return \Think\Upload
     */
    public function getUpObj(){
        $config=array(
            'maxSize'=>'3145728',
            'rootPath'=>'./Uploads/images/',
            'exts'=>array('jpg','gif','png','jpeg'),
            'autoSub'=>true,
            'subName'=>array('date','Ymd')
        );
        $upload = new \Think\Upload($config);
        return $upload;
    }

    /**
     * 上传多图
     * @return array|bool
     */
    public function upAll(){
        $upload = self::getUpObj();
        $info = $upload->upload();
        if(!$info){
            $this->apiReturn(401,$upload->getError());
        }else{
            return $info;
        }
    }

    /**
     * 上传单图
     * @return array
     */
    public function upOne(){
        $upload = self::getUpObj();
        $info = $upload->uploadOne($_FILES['pic']);
        if(!$info){
            $this->apiReturn(401,$upload->getError());
        }else{
            return $info;
        }
    }

    /**
     * 图片裁剪，居中裁剪
     * @param $path
     * @param int $width
     * @param int $height
     * @return string
     */
    public function thumb($path,$width=600,$height=600){
        $image=new \Think\Image();
        $image->open($path);
        $_start=substr($path,0,-strlen(strrchr($path,'.')));
        $_end=strrchr($path,'.');
        $thumb_path=$_start.$width.'x'.$height.'_thumb'.$_end;
        $image->thumb($width,$height,\Think\Image::IMAGE_THUMB_CENTER)->save($thumb_path);
        $thumb_path=str_replace('\\', '/', $thumb_path);
        return strstr($thumb_path,__ROOT__.'/Uploads/images/');
    }
}