<?php
	$con=mysql_connect('localhost','zuo','151002315');
	$db_selected=mysql_select_db('n152315',$con);
	$studentid=$_GET['studentid'];
	
       	$SQL="select * from thesis,teacher where  thesis.tid=teacher.tid  and thesis.major in (select major from student where sid='".$studentid."') and thesis.thid not in(select thid from t_th)";
	
	$result=mysql_query($SQL,$con);
	echo "<table border='1' class='table table-stripped table-bordered' >
	<tr>
	<td align=center> <b></b></td>
	<td align=center> <b></b></td>
	<td align=center> <b></b></td>
	<td align=center><b></b></td>
	<td align=center><b></b></td>
	<td align=center><b>Thesis</b></td>
	<td align=center><b>Message</b></td>
	<td align=center> <b></b></td>
	<td align=center><b></b></td>
	<td align=center> <b></b></td>
	<td align=center> <b></b></td>
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
	<td align=center><b>teacher major</b></td>
	<td align=center><b>download</b></td>
	<td align=center><b>choose</b></td>";

	while(($data1 = mysql_fetch_row($result)))
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
	?>
	 <td align=center>
	 <input type="text" name="thid" id="thid" value="<?php echo $data1[0];?>">
	 </td>
	 <td align=center>
	 <input type="text" name="thid" id="thid" value="<?php echo $data1[0];?>">
	 <input type="hidden" name="filepath" id="filepath" value="<?php echo $data1[5];?>">
	 <button class="btn btn-large btn-primary" id="add123">download</button>
	 </td>
	 <td align=center>
	 
	 <button class="btn btn-large btn-primary" id="choose" onclick="second_choice_handle.php">choose</button>
	 </td>
	<?php
	echo "</tr>";
	}
	echo "</table>";
?>
