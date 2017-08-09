<?php

class Home extends Tishi{
//    创建一个用来接收数据内容的变量
    public $arr;
//    每次调用这个类就先自动将数据库内容调用数来赋值给当前的对象属性$arr
    public function __construct()
    {
        $this->arr= include './liuyan/ku.php';
    }
//    创建默认显示的方法，打开index文件默认执行这个方法，引入显示页面文件
    public function moren(){
        $a=1;
        include './liuyan/moren.php';
    }
//    创建一个添加方法，让每次添加留言时执行这个方法
    public function tianjia(){
//        判断是不是点了提交，如果点了提交就获得的内容添加到获得的数据库内容中，完事将新的数据传回数据库文件，弹出提示框，返回默认页面
        if(IS_POST){
            $this->arr[]=$_POST;
            $this->shangchuan();
            $this->xianshi('留言成功','index.php');
        }
        include './liuyan/tianjia.php';

    }
//    创建一个删除方法，每次点击删除按钮时执行这个方法
    public function shanchu(){
//        点击删除按钮是删除对应下标的内容，完事将新的内容传回数据库，弹出提示信息
        unset($this->arr[$_GET['b']]);
        $this->shangchuan();
        $this->xianshi('删除成功','index.php');
    }
//    创建一个修改方法，每次点击编辑按钮时执行这个方法
    public function xiugai(){
//        判断是不是点了提交，如果点了提交就将获得的内容替换掉对应的数据内容，完事将新的数据传回数据库文件，弹出提示框，返回默认页面
        if(IS_POST){
            $this->arr[$_GET['b']]=$_POST;
            $this->shangchuan();
            $this->xianshi('修改成功','index.php');
        }
        include './liuyan/xiugai.php';
    }
//    创建一个上传文件的方法用来每次完成添加，删除，编辑时数据内容的上传
    public function shangchuan(){
        file_put_contents('./liuyan/ku.php',"<?php return ".var_export($this->arr,true).';');
    }
}