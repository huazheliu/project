<?php
header("content-type:text/html;charset=utf-8");
$name=$_POST["name"];
$website=$_POST["website"];
$email=$_POST['email'];
echo "hello, $name";
echo "<br>";
echo "你的邮箱为：$email";
echo "<br>";
echo "你的网址为：$website";
echo "<br>";
echo '我已经知道了你全部的秘密了，哈哈哈！！！';
?>
