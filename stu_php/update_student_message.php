<?php
	session_start();
	$studentid=$_SESSION['studentid'];
 	//echo "TEST!!";
	//echo $studentid;
?>
<?php
	session_start();
	$studentid=$_SESSION['user'];

	$conn=mysqli_connect("localhost","zuo","151002315");
	if(!$conn)
	{
		die("could not connect".mysqli_error());
	}
	
	$sname=$_POST['sname'];
	$tel=$_POST['tel'];
	$email=$_POST['email'];
	$major=$_POST['major'];
	$passwd=$_POST['repwd'];
	/*echo "stid";
	echo $studentid;
	echo "name";
	echo $sname;*/
	mysqli_select_db($conn,"n152315");
	$result1=mysqli_query($conn,"update student set sname='".$sname."',tel='".$tel."',email='".$email."',major='".$major."' where sid='".$studentid."'" );
	
	if(!$result1){
		printf("Result1 Error:%s\n",mysqli_error($conn));
		exit();

	}
	
	$result2=mysqli_query($conn,"update student_login set  passwd='".$passwd."' where sid='".$studentid."'");
	if(!$result2){
		printf("Result2 Error:%s\n",mysqli_error($conn));
	}
	
	?>
	<script language="javascript">
		window.location.href="../student.php";
	</script>
<?php
?>
