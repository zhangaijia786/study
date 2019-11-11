<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>html中的表单</title>
</head>
<body>
    <form action="./lx.php" method="POST">
        <input type="text" name="uname1">
        <select name="sel">
            <option id="1">+</option>
            <option id="2">-</option>
            <option id="3">*</option> 
            <option id="4">/</option>
        </select>
        <input type="text" name="uname2"><br>
        <input type="submit">
    </form>
    <div>
       <?php
           error_reporting(0);//屏蔽错误
             $uname1=$_POST["uname1"];
             $uname2=$_POST["uname2"];
             $sel=$_POST["sel"];
             settype($uname1,'int');
             settype($uname2,'int');
             if($sel=="+"){
                 echo $uname1+$uname2;
             }else if($sel=="-"){
                 echo $uname1-$uname2; 
             }else if($sel=="*"){
                  echo $uname2*$uname2;
             }else if($sel=="/"){
                  echo $uname1/$uname2;
             }
       ?>
    </div>
</body>
</html>