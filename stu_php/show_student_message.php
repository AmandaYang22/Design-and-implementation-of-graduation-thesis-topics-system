<?php

	$conn=mysqli_connect("localhost","zuo","151002315");
	if(!$conn)
	{
		die("could not connect".mysqli_error());
	}
	$studentid=$_GET['studentid'];	
	
	
	mysqli_select_db($conn,"n152315");
	$result=mysqli_query($conn,"select * from student where sid='".$studentid."'");
	if(!$result){
		printf("Error:%s\n",mysqli_error($conn));
		exit();

	}
	echo "<table border='1' class='table table-bordered table-stripped'>
	<tr>
	<td align=center> <b></b></td>
	<td align=center><b></b></td>
	<td align=center><b>Message</b></td>
	<td align=center> <b></b></td>
	<td align=center><b></b></td>
	</tr>
	<tr>
	<td align=center> <b>studentid</b></td>
	<td align=center><b>name</b></td>
	<td align=center><b>telephone</b></td>
	<td align=center><b>email</b></td></td>
	<td align=center><b>major</b></td>
	</tr>";
	
	//echo "####";
	
	while($data = mysqli_fetch_row($result))
	{   
	   // echo "!!!!!!!";
	   // echo "test??";
	    echo "<tr>";
	    echo "<td align=center>$data[0]</td>";
	    echo "<td align=center>$data[1]</td>";
	    echo "<td align=center>$data[2]</td>";
	    echo "<td align=center>$data[3]</td>";
	    echo "<td align=center>$data[4]</td>";
	    echo "</tr>";
	}
echo "</table>";
?>
