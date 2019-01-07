<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
 <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <form method="post">
<?php

	$conn=mysqli_connect("localhost","zuo","151002315");
	if(!$conn)
	{
		die("could not connect".mysqli_error());
	}
	$studentid=$_GET['studentid'];	
	//echo $studentid;

	//只从thesis表中选出和学生专业相同的thesis
	mysqli_select_db($conn,"n152315");
	$result1=mysqli_query($conn,"select * from thesis,teacher where  teacher.tid=thesis.tid and thesis.major in (select major from student where sid='".$studentid."')");
	
	if(!$result1){
		printf("Result1 Error:%s\n",mysqli_error($conn));
		exit();

	}
	
	
	//echo $studentid;
	echo "<table border='1' class='table table-bordered table-stripped'>

	<th align='center' text_align='center'>     Thesis Message    </th>

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
	</tr>";
	
	//echo "####";
	
	while(($data1 = mysqli_fetch_row($result1)))
	{   
	  //  echo "!!!!!!!";
	   // echo "test??";
	    echo "<tr>";
	    echo "<td align=center>$data1[0]</td>";
	    echo "<td align=center>$data1[1]</td>";
	    echo "<td align=center>$data1[2]</td>";
	    echo "<td align=center>$data1[3]</td>";
	  //  echo "<td align=center>$data[4]</td>";
	    echo "<td align=center>$data1[5]</td>";
	    echo "<td align=center>$data1[6]</td>";

	    echo "<td align=center>$data1[8]</td>";
	    echo "<td align=center>$data1[9]</td>";
	    echo "<td align=center>$data1[10]</td>";
		
	   // echo "data!!";
	    //echo $data		    
	    // <input type="submit" name="submit" value="download">  下面的button改为submit也没用
	
	    echo "</tr>";
	}
echo "</table>";
?>
</form>
<br><br>
<button class="btn btn-info" onclick="window.location.href='first_choice.php'">choose a title now!</button>
</html>

