<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="css/bootstrap.min.css">  
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    	<style type="text/css">
    	.t1{
    		width: 750px;
		margin-left:50px;
    	}
    	</style>
</head>
<body>
	<br>
	<table name="table1" class="table table-striped table-bordered t1">
	<tr>
		<th>student_id</th>
		<th>student_name</th>
		<th>thesis_id</th>
		<th>thesis_name</th>
		<th>teacher_name</th>
	</tr>
	<?php
	 $id=mysql_connect("localhost","zuo","151002315") or die("could not connect:".mysql_error());
	mysql_select_db("n152315",$id);
	mysql_query("set names gb2312");
//	$sql="select sid,student.sname,teacher.tname,thid,thesis.thname from t_th,student,thesis,teacher where t_th.sid=student.sid and t_th.thid=thesis.thid and thesis.tid=teacher.tid;";
$sql="select t_th.sid,student.sname,teacher.tname,t_th.thid,thesis.thname from t_th,student,thesis,teacher where t_th.sid=student.sid and t_th.thid=thesis.thid and thesis.tid=teacher.tid;";
	$res=mysql_query($sql);
	$i=0;
	while($row=mysql_fetch_array($res)){
	$i++;
	echo "<tr>";
	print "<td id='tid$i'>{$row['sid']}</td>";
	echo "<td id='tname$i'>{$row['sname']}</td>";	
	echo "<td id='tprof$i'>{$row['thid']}</td>";	
	echo "<td id='tame$i'>{$row['thname']}</td>";
        echo "<td id='tpro$i'>{$row['tname']}</td>";
	echo "</tr>";
	}
	mysql_close($id);
	?>
	</table>
</body>
</html>
