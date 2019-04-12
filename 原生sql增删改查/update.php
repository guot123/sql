<?php
header("content-type:text/html;charset=utf-8");

include "mysql.class.php";

$id = $_GET['id'];

$sql = "select * from users where id=$id";

$db = new Db;
$update =$db -> get_one($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="update_do.php" method="post">
            <table>
                <tr>
                <input type="hidden" name="id" value="<?php echo $update['id']?>">
                    <td>用户名</td>
                    <td><input type="text" name="names" value='<?php echo $update['name']?>'></td>
                </tr>
                <tr>
                <input type="hidden" name="id" value="<?php echo $update['id']?>">
                    <td>生日</td>
                    <td><input type="date" name="date" value='<?php echo $update['date']?>'></td>
                </tr>
                <tr>
                <input type="hidden" name="id" value="<?php echo $update['id']?>">
                    <td>邮箱</td>
                    <td>
                    <input type="text" name="email" value='<?php echo $update['email']?>'>
                    </td>
                </tr>
                <tr>
                <input type="hidden" name="id" value="<?php echo $update['id']?>">
                    <td>手机号</td>
                    <td><input type="text" name="tel" value='<?php echo $update['tel']?>'></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value='提交'></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>