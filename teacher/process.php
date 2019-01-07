<?php
include "conn.php";
$sid=$_POST["sid"];
$thid=$_POST["thid"];
mysql_query("create view stu(sid,thid) as select * from s_th where sid not in(select sid from t_th) and thid not in(select thid from t_th)");
$sql="insert into t_th(thid,sid) values('$thid','$sid')";
//$sql="delete from stu where sid='$sid' or thid='$thid'";
$res=mysql_query($sql);
if($res)
{
?>
	<script language="javascript">	
	alert("success");window.location.href="student_thesis.php";
	</script>
<?php
}
else echo "failed";
mysql_query("drop view stu");
mysql_close();
?>
