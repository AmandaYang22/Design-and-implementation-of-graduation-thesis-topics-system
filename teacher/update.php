<?php
include "conn.php";
session_start();
$tid=$_SESSION['user'];
$tname=$_POST['teachername'];
$prof=$_POST['prof'];
$major=$_POST['major'];
$sql="UPDATE teacher SET tname='$tname', prof='$prof',major='$major' WHERE tid='$tid'";
$res=mysql_query($sql);
if($res)
{
?>
	<script language ="javascript">
                alert("ÐÞ¸Ä³É¹¦!");window.location.href="basic_info.php";
		</script>
<?php
}
else
	echo "failed";
?>

