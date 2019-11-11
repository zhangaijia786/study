<?php
    header('content-type:text/html;charset=utf-8');  
    $a=$_REQUEST['name'];
    echo '欢迎你',$a;
    $b=$_REQUEST['pass'];
    echo $b;
?>