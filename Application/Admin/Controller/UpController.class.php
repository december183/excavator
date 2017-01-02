<?php
namespace Admin\Controller;
class UpController extends BaseController{
    public function index(){
        if(IS_POST){
            $upload=self::getUpObj();
            $info = $upload->upload();
            if(!$info){
                $this->apiReturn(401,$upload->getError());
            }else {
                foreach ($info as $file){
                    $path = APP_ROOT . '/Uploads/images/' . $file['savepath'] . $file['savename'];
                    $imgArr=getimagesize($path);
                    if($imgArr[0] <600 && $imgArr[1] <600){
                        $data['mainpic'][] = __ROOT__.'/Uploads/images/'.$file['savepath'].$file['savename'];
                        $data['thumbpic'][] = self::thumb($path,150,150);
                    }else{
                        $data['mainpic'][] = self::thumb($path);
                        $data['thumbpic'][] = self::thumb($path,150,150);
                    }
                }
                $mainpic=implode(';',$data['mainpic']);
                $thumbpic=implode(';',$data['thumbpic']);
                $this->apiReturn(200,'上传图片成功',array('main'=>$mainpic,'thumb'=>$thumbpic));
            }
        }else{
            $this->display();
        }
    }
    public function mark(){
        if(IS_POST){
            if(isset($_FILES['pic']['tmp_name'])) {
                $info = self::upOne();
                $path = APP_ROOT . '/Uploads/images/' . $info['savepath'] . $info['savename'];
                $markInfo = self::getMarkInfo();
                $markpath = $this->thumb($path, $markInfo['WEB_PICMARK_WIDTH'], $markInfo['WEB_PICMARK_HEIGHT']);
                $this->apiReturn(200, '上传水印图片成功', array('path' => $markpath));
            }else{
                $this->apiReturn(404,'请选择水印图片');
            }
        }else{
            $this->display();
        }
    }
}