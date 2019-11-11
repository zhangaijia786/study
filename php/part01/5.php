<?php
    header('content-type:text/html;charset=utf-8'); 
    $a=true;
    (int) $a;   //临时数据类型转换

    echo gettype($a);   //检测数据类型
    
    // settype($a,'int');   //转换数据类型
    echo $a;
?>