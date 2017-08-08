<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./liuyan/bootstrap.min.css">
</head>
<body>
<div class="container" style="width: 800px;margin: 100px auto;background: #d9edf7; box-shadow:0px 0px 10px 5px rgba(0,0,0,0.3) ; padding: 50px">
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">昵称</label>
            <input type="text" class="form-control" id="exampleInputEmail1"name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">留言内容</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="nei">
        </div>
        <button type="submit" class="btn btn-success">留言</button>
<!--        点击返回按钮时表示返回index.php完成返回首页的操作-->
        <a href="index.php" class="btn btn-info">返回</a>
    </form>

</div>
</body>
</html>