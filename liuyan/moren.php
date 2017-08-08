<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./liuyan/bootstrap.min.css">
</head>
<body>
<h2 style="color: #5bc0de;text-align: center;text-shadow:4px 4px 10px black;; ">留言板</h2>
        <div class="container" style="width: 800px;margin: 20px auto;background: darkseagreen; box-shadow:0px 0px 10px 5px rgba(0,0,0,0.3) ; padding: 50px;">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>编号</th>
            <th>昵称</th>
            <th>内容</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($this->arr as $k=>$v):?>
            <tr>
<!--                $a++表示对应的留言的序号-->
                <td><?php echo $a++?></td>
<!--                $v['name']表示上传的昵称-->
                <td><?php echo $v['name']?></td>
<!--                $v['nei']表示上传的内容-->
                <td><?php echo $v['nei']?></td>
                <td>
<!--                    点击删除按钮时将调用对应的shanchu方法，传回$get参数b也就是数据库内容数组对应的下标，将对应的内容删除，完成删除对应内容的操作-->
                    <a href="?a=shanchu&&b=<?php echo $k?>" class="btn btn-warning btn-sm">删除</a>
<!--                    点击编辑按钮时将调用对应的xiugai方法，传回$get参数b也就是数据库内容数组对应的下标进行修改，完事替换掉原来的内容，完成修改对应内容的操作-->
                    <a href="?a=xiugai&&b=<?php echo $k?>" class="btn btn-danger btn btn-sm">编辑</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<!--            当点击添加留言时get参数传回tianjia,会调用tianjia方法，跳到添加页面-->
    <a href="?a=tianjia" class="btn btn-success">添加留言</a>
</div>
</body>
</html>