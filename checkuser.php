<?php
$link=mysql_connect("localhost","zuo","151002315")or die("数据库连接失败".mysql_error());
	mysql_select_db("n152315",$link);
	mysql_query("set names gb2312");
	$name=$_POST['txt_user'];
	$pwd=$_POST['txt_pwd'];
	$yan=$_POST['txt_yan'];
	$identi=$_POST['identi'];
	session_start();
	$_SESSION['user']=$name;
	if($identi==1){
//	$tid=mysql_fetch_array(mysql_query("select tid  from teacher where tname='$name'"));
//	$tidd=$tid[0];
	$sql=mysql_query("select * from teacher_login where tid='$name' and passwd='$pwd'");
	$result=mysql_fetch_array($sql);
	if($name!=""&&$pwd!=""&&$yan!=""&&$name==$result['tid']&&$pwd==$result['passwd']){
?>  <script type="text/javascript"> alert("login success!");window.location.href="./teacher/teachermain.php";</script>
<?php 	}
	else{
?>		<script type="text/javascript">alert("请正确登录!");window.location.href="login.html";</script>
<?php	}
}
	else if($identi==2){
		//$sid=mysql_fetch_array(mysql_query("select sid from student where sname='$name'"));
	//	$sidd=$sid[0];
		$sql=mysql_query("select * from student_login where sid='$name' and passwd='$pwd'");
		$result=mysql_fetch_array($sql);
		if($name!=""&&$pwd!=""&&$yan!=""&&$name==$result['sid']&&$pwd==$result['passwd']){
?>  <script type="text/javascript"> alert("login success!");window.location.href="student.php";</script>
<?php 	}
	else{
?>		<script type="text/javascript">alert("请正确登录!");</script>
<?php	}
	}
	else if($identi==3){
		$sql=mysql_query("select * from root_login where rid='$name' and passwd='$pwd'");
		$result=mysql_fetch_array($sql);
		if($name!=""&&$pwd!=""&&$yan!=""&&$name==$result['rid']&&$pwd==$result['passwd']){
?>  <script type="text/javascript"> alert("login success!");window.location.href="./admin_php/adminmain.php";</script>
<?php 	}
	else{
?>		<script type="text/javascript">alert("请正确登录!");window.location.href="login.html";</script>
<?php	}

	}
mysql_close($link);
?>
