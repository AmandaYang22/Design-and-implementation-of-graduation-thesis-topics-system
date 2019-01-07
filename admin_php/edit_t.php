<?php
$id=$_POST['id'];
$name=$_POST['name'];
$prof=$_POST['prof'];
$major=$_POST['major'];
//echo "$id";
//echo $name;
$link=mysql_connect("localhost","zuo","151002315")or die("数据库连接失败".mysql_error());
mysql_select_db("n152315",$link);
mysql_query("set names gb2312");
$sql="update teacher set tname='$name',prof='$prof',major='$major' where tid=$id;";
//echo $sql;
mysql_query($sql);
//mysql_fetch_array($result);
mysql_close($link);
header("Location:admin1.php");
?>
