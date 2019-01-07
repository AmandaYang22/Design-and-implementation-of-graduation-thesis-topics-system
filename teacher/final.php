<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
 <meta http-equiv="Content-Type" content="text/html;charset=gb2312">
<link rel="stylesheet" href="./file/bootstrap.min.css"> 
<script src="./file/jquery.js"></script>
<script src="./file/bootstrap.min.js"></script> 
<style>
.t1{
	width:750px;
	margin-left:50px;
}
</style>
</head>
<body>
<div class="panel panel-default" style="margin-top:100px">
<div class="panel-body">
<table class="table table-bordered table-hover table-striped t1 ">
<?php
include "conn.php";
session_start();     
$tid=$_SESSION['user']; 
$sql1="select * from t_th";
$res=mysql_query($sql1);
print "<tr class='info'>";
print "<th>";
print "学号";
print "</th>";
//print "<th>";
//print "学生姓名";
//print "</th>";
print "<th>";
print "选题号";
print "</th>";
//print "<th>";
//print "选题名称";
//print "</th>";
//print "<th>";
//print "出题教师";
//print "</th>";
print "</tr>";
while($row=mysql_fetch_array($res))
{
	        print"<tr>";
		print "<td>{$row['sid']}</td>";
	//	print "<td>{$row['sname']}</td>";
		 print "<td>{$row['thid']}</td>";
	//	 print "<td>{$row['thname']}</td>";
	//	  print "<td>{$row['tname']}</td>";
		print "</tr>";
}
?>
</table>
</div>
</div>
<br>
<input type="button" class="btn btn-info" value="返回" onclick="window.location.href='home.html'"; style="margin-left:50px;">
<?php
mysql_close();
?>
</html>
</body>
