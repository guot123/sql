<?php
header("content-type:text/html;charset=utf-8");
/*
    数据库封装  版本一
    CURD增删查改
*/
class Db
{
    // 连  选  设
    public function __construct()
    {
        mysql_connect('127.0.0.1','root','root') or die('连库失败');
        mysql_select_db('3yve') or die('选库失败');
        mysql_query('set names utf8');
    }

    //添加方法
    public function insert($sql)
    {
        //执行sql语句
        $res = mysql_query($sql);
        return $res;//返回执行后的结果  --布尔类型
    }
    //删除方法
    public function delete($sql)
    {
        //执行sql语句
        $res = mysql_query($sql);
        return $res;//返回执行后的结果  --布尔类型
    }
    //修改方法
    public function update($sql)
    {
        //执行sql语句
        $res = mysql_query($sql);
        return $res;//返回执行后的结果  --布尔类型
    }
    //查询一条数据方法
    public function get_one($sql)
    {
        $res = mysql_query($sql);//资源
        $data = mysql_fetch_assoc($res);//资源转化为数组
        return $data;//返回执行后的结果  --一位数组
    }
    public function get_all($sql)
    {
        $res = mysql_query($sql);//资源
        $data = '';//定义空数组
        //循环吧数组放入$data数组
        while ($arr = mysql_fetch_assoc($res)) {
            $data[] = $arr;
        }
        return $data;
    }
}
//实例化
$db = new Db;
//添加
// $sql = "insert into users values(null,'郭涛','1999-09-03','1195474414@qq.com','15010098642')";
// $a = $db -> insert($sql);
// //删除的sql语句
// $sql = "delete from users where id in(14,15)";
// $aa = $db -> delete($sql);
//修改的sql语句
// $sql = "update users set name='郭涛',date='1999-09-03',email='1195474414@qq.com',tel='15010098642' where id=9";
// $aaa = $db -> update($sql);
//查询一条数据的sql语句
// $sql = "select * from users where id=10";
// $aaaa =$db -> get_one($sql);
// print_r($aaaa);
//查询所有数据的sql语句
// $sql = "select * from users";
// $aaaaa =$db -> get_all($sql);
// print_r($aaaaa);
?>