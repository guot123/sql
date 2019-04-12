<?php
header("content-type:text/html;charset=utf-8");

class Uploads
{
    public $type = array('image/jpeg','image/jpg','image/gif','image/png');
    public $size = 3;
    public $path = "./images";
    public function up($img)
    {
        if($img['name'] == '')
        {
            echo '文件未上传';
            return false;
        }
        if (!in_array($img['type'],$this->type)) {
            echo '您上传的图片类型不合法';
            return false;
        }
        if ($img['size']>$this->size*1024*1024) {
            echo '图片超过规定大小';
            return false;
        }
        if (file_exists($this->path) == false) {
            mkdir($this->path,'777',true);
        }
        $path_name = './images/'.$img['name'];
       $res= move_uploaded_file($img['tmp_name'],$path_name);
        if ($res) {
            return $path_name;
        }else {
            echo '文件上传失败';
            return false;
        }
    }
}
$obj = new Uploads;

?>