<?php
	session_start();
	$studentid=$_SESSION['user'];

	$con=mysql_connect('localhost','zuo','151002315');
	$db_selected=mysql_select_db('n152315',$con);
	$thid=$_GET['thid'];
	
	$sql1="select * from t_th where thid='".$thid."'";
	$result1=mysql_query($sql1,$con);
	$data1=mysql_num_rows($result1);
	if($data1)
	{?>
	<script language="javascript">
	 alert("this thesis has been choiced,please chocie again");
	// alert("该课题已经被选,即将返回，请重新选择");
	 window.location.href="second_choice.php";
	</script>
<?php
	}
	else
	{
	//echo "###";
	$sql2="insert into t_th values('{$_GET['thid']}','{$_SESSION['user']}')";
	$result2=mysql_query($sql2,$con)or die('failed'.mysql_error());
	//echo "!!!!!";
?>
	<script language="javascript">
	 alert("chooese thesis success!!will return view result page!!");
	 window.location.href="view_result.php";
	</script>
	<?php
	}
	?>

