<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>html中的表单</title>
</head>
<body>
    <form action="./1.php" method="POST">
        <input type="text" name="uname" placeholder="请输入用户名"><br>
        <input type="password" name="pwd" placeholder="请输入密码"><br>
        <input type="submit">
    </form>
    <div>
       <?php
           error_reporting(0);            //屏蔽错误
           error_reporting("E_NOTICE");   //屏蔽错误
           $a=$_GET["uname"];
           echo $a;
       ?>
    </div>
</body>
</html>