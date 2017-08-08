<?php
//创建一个提示操作成功的类用来让子类继承
class Tishi{
    protected function xianshi($tishi,$dizhi){
        $str=<<<a
<script>
alert("$tishi");
location.href="$dizhi"
</script>
a;
        echo $str;
        exit;
    }
}