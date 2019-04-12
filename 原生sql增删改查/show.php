<?php
header("content-type:text/html;charset=utf-8");

include 'mysql.class.php';

$sql = "select * from users";

$db = new Db;

$res=$db -> get_all($sql);
?>
<center>
    <table border=1>
        <tr>
            <td>会员id</td>
            <td>会员姓名</td>
            <td>生日</td>
            <td>邮箱</td>
            <td>手机号</td>
            <td>图片</td>
            <td>编辑</td>
        </tr>
        <tbody id='body'>
        <?php foreach ($res as $key => $val) {?>
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
        </tbody>
    </table>
</center>
<script>
function del(id) {
    var ajax = new XMLHttpRequest();
    ajax.open('get','del.php?id='+id);
    ajax.send();
    ajax.onreadystatechange = function(){
        if (ajax.readyState==4 && ajax.status==200) {
            document.getElementById('body').innerHTML=ajax.responseText;
        }
    }
}

</script>