<?php
    header('content-type:text/html;charset=utf-8');   
    $aa='22';
    //检验数据是否为数字或字符串数字
    if(is_numeric($aa)){
        echo true;
    }else{
        echo false;
    }
?>