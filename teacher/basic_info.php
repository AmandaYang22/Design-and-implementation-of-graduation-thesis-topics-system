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
<table class="table table-bordered table-hover table-striped t1 " >
<thead>
<?php
include "conn.php";
session_start();
$tid=$_SESSION['user'];
$sql="select * from teacher where tid=$tid";
$res=mysql_query($sql);
print "<tr class='info'>";
print "<th>";
print "教师号";
print "</th>";
print "<th>";
print "姓名";
print "</th>";
print "<th>";
print "职称";
print "</th>";
print "<th>";
print "专业";
print "</th>";
print "</tr></thead>";
print "<tbody>";
while($row=mysql_fetch_array($res))
{
	print"<tr>";
	print "<td>{$row['tid']}</td>";
	print "<td>{$row['tname']}</td>";
	print "<td>{$row['prof']}</td>";
	print "<td>{$row['major']}</td>";
	print "</tr>";
}
?>
</tbody>
</table>
</div>
</div>
<input type="button" class="btn btn-info" value="修改信息" onclick="window.location.href='info_modify.html'"; style="margin-left:50px;">
<?php
mysql_close();
?>
</body>
</html>
