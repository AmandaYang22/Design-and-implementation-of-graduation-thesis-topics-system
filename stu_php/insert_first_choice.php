<?php 
	$conn=mysqli_connect("localhost","zuo","151002315");
	if(!$conn)
	{
		die("could not connect".mysqli_error());
	}

	$studentid=$_POST['stdid'];
	//echo $studentid;
	$choice1=$_POST['choice1'];
	$choice2=$_POST['choice2'];
	$choice3=$_POST['choice3'];
	
	mysql_select_db($conn,"n152315");
	$result1=mysql_query("insert into s_th values ('$studentid','$choice1')");
	if(!$result1){
	//	printf("Error:%s\n",mysql_error($conn));
		//exit();

	}
	$result2=mysql_query("insert into s_th values ('$studentid','$choice2')");
	if(!$result2){
	//	printf("Error:%s\n",mysql_error($conn));
		//exit();

	}
	$result3=mysql_query($conn,"insert into s_th values ('$studentid','$choice3')");
	if(!$result3){
	//	printf("Error:%s\n",mysql_error($conn));
		//exit();

	}?>
	<script>
		alert("first  choice  submit succeed!");
		window.location.href="../student.php";
	</script>
<?php
?>
