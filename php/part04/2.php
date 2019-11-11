<?php
    header('content-type:text/html;charset=utf-8');  
    $a=$_POST['uname'];
    echo '欢迎你',$a;
    $b=$_POST['pwd'];
    echo $b;
?>