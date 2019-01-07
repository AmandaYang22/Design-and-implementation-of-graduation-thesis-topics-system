<?php
$id=$_POST['aid'];
$name=$_POST['aname'];
$tel=$_POST['atel'];
$email=$_POST['aemail'];
$major=$_POST['amajor'];
$link=mysql_connect("localhost","zuo","151002315")or die("数据库连接失败".mysql_error());
mysql_select_db("n152315",$link);
mysql_query("set names gb2312");
$sql="insert into student values($id,'$name','$tel','$email','$major');";
mysql_query($sql);
mysql_close($link);
header("location:admin2.php");
?>