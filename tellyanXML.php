<?php
	header('Content-Type:text/xml');
	$pattern='1234567890ABCDEFGHIJKLOMNOPQRSTUVWXYZ';
	$key='';
for($i=0;$i<4;$i++)
	{
	$key .= $pattern{mt_rand(0,35)};    //生成php随机数
	}
echo "<yan>".$key."</yan>";
?>
