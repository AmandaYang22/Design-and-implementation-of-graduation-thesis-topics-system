<?php
	$con=mysql_connect('localhost','zuo','151002315');
	$db_selected=mysql_select_db('n152315',$con);
	$studentid=$_GET['studentid'];
	//echo $studentid;
	//$SQL="create view end_thesis as select * from thesis where  thesis.major in (select major from student where sid='".$studentid."')";
	$SQL="select * from t_th where sid='".$studentid."'";
	$result=mysql_query($SQL);
	$data=mysql_num_rows($result);
	//echo "data:";
	//echo $data;
	if($data>0){
		$sql1="select * from thesis,teacher where teacher.tid=thesis.tid and thesis.thid=(select thid from t_th where sid='".$studentid."')";
		$result1=mysql_query($sql1); 
		//$sql2="select tname,prof,major from teacher where teacher.tid in (select thesis.tid from thesis where thesis.thid in(select t_th.thid from t_th where sid='".$studentid."' ))";
	//	$result2=mysql_query($sql2);
		echo "<table border='1' class='table table-bordered table-stripped' >
		<tr>
		<td align=center><b>Thesis message</b></td>
		</tr>
		<tr>
		<td align=center> <b>thesis id</b></td>
		<td align=center><b>thesis name</b></td>
		<td align=center><b>thesis type</b></td>
		<td align=center><b>date</b></td>
		<td align=center><b>task</b></td></td>
		<td align=center><b>thesis major</b></td>
		<td align=center><b>teacher name</b></td>
		<td align=center><b>teacher prof</b></td>
		<td align=center><b>teacher major</b></td>";
	
	
		while($data1 = mysql_fetch_array($result1))
		{   
	
		    echo "<tr>";
		    echo "<td align=center>$data1[0]</td>";
		    echo "<td align=center>$data1[1]</td>";
		    echo "<td align=center>$data1[2]</td>";
		    echo "<td align=center>$data1[3]</td>";
		    echo "<td align=center>$data1[5]</td>";
		    echo "<td align=center>$data1[6]</td>";

		    echo "<td align=center>$data1[8]</td>";
		    echo "<td align=center>$data1[9]</td>";
		    echo "<td align=center>$data1[10]</td>";
		    echo "</tr>";
		}
		echo "</table>";
	}else{
	
	}
mysql_close($con);
?>
