<?php
$id=$_POST['did'];
$link=mysql_connect("localhost","zuo","151002315")or die("数据库连接失败".mysql_error());
mysql_select_db("n152315",$link);
mysql_query("set names gb2312");
$sql="delete from teacher where tid=$id;";
$result=mysql_query($sql);
mysql_close($link);
header("location:admin1.php");
?>
