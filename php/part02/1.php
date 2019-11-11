<?php
    header('content-type:text/html;charset=utf-8');   
    //PHP文件接收表单
    // $uname=$_POST["uname"];
    // $uname=$_GET["uname"];
    // $uname=$_REQUEST["uname"];  可以获得get和post提交的数据,但性能更慢
    // echo "欢迎你".$uname;
    $uname=$_POST["uname"];
    $pwd=$_POST["pwd"];
    if($uname=="tom"&&$pwd=="123"){
          echo "验证通过";
    }else{
          echo "验证错误";
    }
?>