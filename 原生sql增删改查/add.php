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
        <form action="add_do.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>用户名</td>
                    <td><input type="text" name="names"></td>
                </tr>
                <tr>
                    <td>生日</td>
                    <td><input type="date" name="date"></td>
                </tr>
                <tr>
                    <td>邮箱</td>
                    <td>
                    <input type="text" name="email">
                    </td>
                </tr>
                <tr>
                    <td>手机号</td>
                    <td><input type="text" name="tel"></td>
                </tr>
                <tr>
                    <td>图片</td>
                    <td><input type="file" name="img"></td>
                <tr>
                    <td></td>
                    <td><input type="submit" value='提交'></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>