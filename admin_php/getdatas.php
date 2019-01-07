<?php
$link=mysql_connect("localhost","zuo","151002315")or die("数据库连接失败".mysql_error());
mysql_select_db("n152315",$link);
mysql_query("set names gb2312");
$sql = "select * from student";
$result = mysql_query($sql);
$data = array();
class Pipedata{
	public $id;
	public $username;
	public $tel;
	public $major;
	public $email;
}
while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
	$pipedata = new Pipedata();
	$pipedata->id = $row["sid"];
	$pipedata->username = $row["sname"];
	$pipedata->email = $row["email"];
	$pipedata->major = $row["major"];
	$pipedata->tel = $row["tel"];
	$data[] = $pipedata;
}

$json = json_encode($data);
echo $json;
mysql_close($link);
?>
