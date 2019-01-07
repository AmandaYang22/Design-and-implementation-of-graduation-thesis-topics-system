<?php
header("Content-type:text/json");
$link=mysql_connect("localhost","zuo","151002315")or die("数据库连接失败".mysql_error());
mysql_select_db("n152315",$link);
mysql_query("set names gb2312");
$sql = "select * from teacher";
$result = mysql_query($sql);
$data = array();
class Pipedata{
	public $id;
	public $username;
	public $prof;
	public $major;
}
//class p{public $code;public $msg;public $count;}
//$p=new p();
//$p->code=0;
//$p->msg="";
//$p->count=10;
while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
	$pipedata = new Pipedata();
	$pipedata->id = $row["tid"];
	$pipedata->username = $row["tname"];
	$pipedata->prof = $row["prof"];
	$pipedata->major = $row["major"];
	$data[] = $pipedata;
//	var_dump($pipedata);
}
$json = json_encode($data); 
//$i='{"code":0,"msg":"","count":10,"data":';
// $y='}';
//$js=$i.$json.$y;
echo $json;
//return $json;
//file_put_contents('data.json',$js);
mysql_close($link);
?>
