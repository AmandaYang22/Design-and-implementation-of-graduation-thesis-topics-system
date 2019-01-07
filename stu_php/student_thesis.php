<!DOCTYPE html>
<html>
<head>
	 <meta http-equiv="Content-Type" content="text/html;charset=gb2312">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./file/bootstrap.min.css">  
	<title>学生</title>
	<script src="./file/jquery.js"></script>
<script src="./file/bootstrap.min.js"></script>
<style>
div {
	top:20px;
	left:50px;
}
</style>
</head>
<body>
<?php
include "conn.php";
session_start();
$tid=$_SESSION['user'];
$thid="select thid from stu where thid in (select thid from thesis where tid='$tid') group by thid";
//$sql="delete from s_th where sid='$sid'";
$res=mysql_query($thid);
print "<div  class='panel panel-default' style='margin-top:100px'>";
print "<div class='panel-heading'>";
print "选择一个课题号和一个学号";
print "</div>";
print "<div class='panel-body'>";
?>
<form name="form1" action="process.php" method="POST">
<?php
while($row=mysql_fetch_array($res))
{
//	print "thesis-".$row['thid']."</br>";
	$x=$row["thid"];
	print "<input type='radio' name='thid' value='$x'>"."课题--".$x."</br>";
	$tmp=$row['thid'];
	$sid="select sid from stu  where thid ='$tmp'";
	$res1=mysql_query($sid);
//	print "<form action='process.php' method='post'> ";
	while($r=mysql_fetch_array($res1))
	{
		$n=$r["sid"];
		print $r['sid']."<input id='sid' name='sid' type='radio' value='$n'><td>&nbsp;&nbsp;&nbsp;</td>";
	}
	print "<td>&nbsp;&nbsp;</td>";
?>
<!--<input type="button" onclick="window.location.href='process.php'" value="sure">-->
<input type="submit" value="确定">
<?php
	print "</br></br>";

}
mysql_close();
?>
</form>
</div>
</div>
</body>
</html>






