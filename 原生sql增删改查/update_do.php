<?php
header("content-type:text/html;charset=utf-8");

include "mysql.class.php";
$name = isset($_POST['names']) ?$_POST['names']:'';
$date = isset($_POST['date']) ?$_POST['date']:'';
$email = isset($_POST['email']) ?$_POST['email']:'';
$tel = isset($_POST['tel']) ?$_POST['tel']:'';
$id = isset($_POST['id']) ?$_POST['id']:'';
$sql = "update users set name='$name',date='$date',email='$email',tel='$tel' where id=$id";
$db = new Db;
$res = $db -> update($sql);
if ($res) {
    echo "<script>alert('修改成功');location.href='show.php';</script>";
}else {
    echo "<script>alert('修改失败');location.href='show.php';</script>";
}
?>