<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./liuyan/bootstrap.min.css">
</head>
<body>
<h2 style="color: #EDEC90;text-align: center;text-shadow:4px 4px 10px black;; ">修改留言</h2>
<div class="container" style="width: 800px;margin: 20px auto;background: yellow; box-shadow:0px 0px 10px 5px rgba(0,0,0,0.3) ; padding: 50px;">
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">昵称</label>
            <input type="text" class="form-control" id="exampleInputEmail1"name="name" value="<?php echo $this->arr[$_GET['b']]['name']?>" readonly>
<!--            将原来要修改的昵称显示到修改页面-->
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">留言内容</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="nei" value="<?php echo $this->arr[$_GET['b']]['nei']?>">
<!--            将原来对应的内容显示到修改页面-->
        </div>
        <button type="submit" class="btn btn-default">留言</button>
<!--        点击返回按钮时跳到index.php文件完成返回首页的操作-->
        <a href="index.php" class="btn btn-default">返回</a>
    </form>
</div>
</body>
</html>