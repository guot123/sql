<?php
header("content-type:text/html;charset=utf-8");
$name = isset($_POST['names']) ?$_POST['names']:'';
$date = isset($_POST['date']) ?$_POST['date']:'';
$email = isset($_POST['email']) ?$_POST['email']:'';
$tel = isset($_POST['tel']) ?$_POST['tel']:'';

$path = $_FILES['img'];
include 'upload.class.php';
$obj = new Uploads;
$path_name = $obj->up($img);
//写添加的SQL
$sql = "insert into users values(null,'$name','$date','$email','$tel','$path_name')";

//引入数据库类文件
include 'mysql.class.php';
//实例化
$db = new Db;
$res = $db -> insert($sql);

if($res) {
    echo "<script>alert('添加成功');location.href='show.php';</script>";
}else {
    echo "<script>alert('添加失败');location.href='add.php';</script>";
}
?>