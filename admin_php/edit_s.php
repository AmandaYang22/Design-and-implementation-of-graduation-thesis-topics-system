<?php
$id=$_POST['id'];
$name=$_POST['name'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$major=$_POST['major'];
$link=mysql_connect("localhost","zuo","151002315")or die("数据库连接失败".mysql_error());
mysql_select_db("n152315",$link);
mysql_query("set names gb2312");
$sql="update student set sname='$name',tel='$tel',email='$email',major='$major' where sid=$id;";
mysql_query($sql);
mysql_close($link);
header("Location:admin2.php")
?>
