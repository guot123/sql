<?php
header("content-type:text/html;charset=utf-8");

include 'mysql.class.php';
$id = $_GET['id'];
$sql = "delete from users where id in($id)";

$db = new Db;
$res = $db -> delete($sql);
$sql1 = "select * from users";
$res1=$db -> get_all($sql1);
?>
<?php foreach ($res1 as $key => $val) {?>
          <tr>
            <td><?php echo $val['id']?></td>
            <td><?php echo $val['name']?></td>
            <td><?php echo $val['date']?></td>
            <td><?php echo $val['email']?></td>
            <td><?php echo $val['tel']?></td>
            <td><img src="<?php echo $val['img']?>" width=50px hright=50px></td>
            <td>
            <a href="javascript:void(0)" onclick='del(<?php echo $val['id']?>)'>删除</a>
            <a href="update.php?id=<?php echo $val['id']?>">修改</a>
            </td>
        </tr> 
        <?php }?>