<?php
//引入函数库，调用常量IS_POST判断是不是提交模式
include 'functions.php';
//创建自动调用类的加载的函数，完成类的实例化
function __autoload($name){
    include "{$name}.php";
}
//实例化类Home完成自动进入显示页
$h=new Home();
//判断$_get参数a有没有，有的话直接调用对应的方法，没有直接默认为调用moren方法
$a=isset($_GET['a'])?$_GET['a']:'moren';
call_user_func_array([$h,$a],[]);