<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="css/bootstrap.min.css">  
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    	<style type="text/css">
    	.t1{
    		width: 850px;
		margin-left:50px;
    	}
    	.ll{
			margin-left: 200px;
			width: 800px;
		}
		.add1{
			width:70px;

		}
    	</style>
</head>
<body onload='gett()'>
	<br>
<button style="margin-left:50px;" class='btn btn-info btn-primary add1' name='add' id='add' value='add' data-toggle='modal' data-target='#myModal2'>添加</button><br><br>
<table class="table table-striped table-bordered t1" id="table1">
	<tr>
		<th>student_id</th>
		<th>student_name</th>
		<th>student_tel</th>
		<th>student_email</th>
		<th>student_major</th>
		<th>operation</th>
	</tr>
	<?php
	 $id=mysql_connect("localhost","zuo","151002315") or die("could not connect:".mysql_error());
	mysql_select_db("n152315",$id);
	mysql_query("set names gb2312");
	$sql="select * from student";
	$res=mysql_query($sql);
	$i=0;
	while($row=mysql_fetch_array($res)){
	$i++;
	echo "<tr>";
	print "<td id='sid$i'>{$row['sid']}</td>";
	echo "<td id='sname$i'>{$row['sname']}</td>";	
	echo "<td id='stel$i'>{$row['tel']}</td>";	
	echo "<td id='semail$i'>{$row['email']}</td>";
	echo "<td id='smajor$i'>{$row['major']}</td>";
	echo "<td>";
	echo "<input type='button'onclick='javascript:gett(),show($i)' class='btn btn-success btn-primary' name='edit$i' id='edit$i' value='edit' data-toggle='modal' data-target='#myModal'>";
	echo "     ";
	echo "<input type='button' onclick='javascript:gett(),showd($i)' class='btn btn-warning btn-primary' name='del$i' id='del$i' value='delete' data-toggle='modal' data-target='#myModal1'>";
	echo "</td>";
	echo "</tr>";
	}
	mysql_close($id);
	?>
</table>
<div class="modal fade ll" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
			</div>
			<div class="modal-body">
			<form name="myform" method="post" action="edit_s.php">
			<table>
					<tr>
						<td>id:</td>
						<td><input type="text" name="id" id="id" readonly="readonly"></td>
					</tr>
					<tr>
						<td>name:</td>
						<td><input type="text" name="name" id="name"></td>
					</tr>
					<tr>
						<td>tel:</td>
						<td><input type="text" name="tel" id="tel"></td>
					</tr>
					<tr>
						<td>email:</td>
						<td><input type="text" name="email" id="email"></td>
					</tr>
					<tr>	
						<td>major:</td>
						<td><input type="text" name="major" id="major"></td>
					</tr>
				</table><br>
				<button type="button" class="btn btn-primary" data-dismiss="modal">取消</button>
				<button type="submit" class="btn btn-success">提交更改</button>
</form>
</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>
<div class="modal fade ll" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
			</div>
			<div class="modal-body">
			<form name="myform2" method="post" action="del_s.php">
				<table>
					<tr>
						<td>id:</td>
						<td><input type="text" name="did" id="did" readonly="readonly"></td>
					</tr>
					<tr>
						<td>name:</td>
						<td><input type="text" name="dname" id="dname" readonly="readonly"></td>
					</tr>
					<tr>
						<td>tel:</td>
						<td><input type="text" name="dtel" id="dtel" readonly="readonly"></td>
					</tr>
					<tr>
						<td>email:</td>
						<td><input type="text" name="demail" id="demail" readonly="readonly"></td>
					</tr>
					<tr>	
						<td>major:</td>
						<td><input type="text" name="dmajor" id="dmajor" readonly="readonly"></td>
					</tr>
				</table>
				<br>
				<button type="button" class="btn btn-primary" data-dismiss="modal">取消</button>
				<button type="submit" class="btn btn-danger">确定删除</button>
			</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>
<div class="modal fade ll" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
			</div>
			<div class="modal-body">
			<form name="myform3" method="post" action="add_s.php">
			<table>
					<tr>
						<td>id:</td>
						<td><input type="text" name="aid" id="aid"></td>
					</tr>
					<tr>
						<td>name:</td>
						<td><input type="text" name="aname" id="aname"></td>
					</tr>
<tr>
<td>tel:</td>
<td><input type="text" name="atel" id="atel"></td>
</tr>
<tr>
<td>email:</td>
<td><input type="text" name="aemail" id="aemail"></td>
</tr>
					<tr>	
						<td>major:</td>
						<td><input type="text" name="amajor" id="amajor"></td>
					</tr>
				</table><br>
				<button type="button" class="btn btn-primary" data-dismiss="modal">取消</button>
				<button type="submit" class="btn btn-success">提交申请</button>
</form>
</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>
</body>
</html>
<script type="text/javascript">
	var json=[];
	var xdata1=[];
	var xdata2=[];
	var xdata3=[];
	var xdata4=[];
	var xdata5=[];
	function gett(){
		var myurl='getdatas.php';
	  	var xmlhttp;
        if (window.XMLHttpRequest)
            xmlhttp = new XMLHttpRequest();
        else
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp.open("GET", myurl, true);
        xmlhttp.send(null);
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var result = xmlhttp.responseText;
                json = eval('(' + result + ')');
            }
        }
        if (json == null) {
            alert("没有符合要求的数据！");
        }
        else {
            var i = 0;
            for (i = 0; i < json.length; i++) {
  				xdata1[i] = json[i].id;
                xdata2[i] = json[i].username;
                xdata3[i] = json[i].tel;
                xdata4[i] = json[i].email;
                xdata5[i] = json[i].major;
            }
        }
	}//get
function show(x){
	document.getElementById("id").value=xdata1[x-1];
	document.getElementById('name').value=xdata2[x-1];
	document.getElementById('tel').value=xdata3[x-1];
	document.getElementById('email').value=xdata4[x-1];	
	document.getElementById("major").value=xdata5[x-1];
}
function showd(x){
	document.getElementById("did").value=xdata1[x-1];
	document.getElementById('dname').value=xdata2[x-1];
	document.getElementById('dtel').value=xdata3[x-1];
	document.getElementById('demail').value=xdata4[x-1];
	document.getElementById("dmajor").value=xdata5[x-1];	
}
   

</script>
