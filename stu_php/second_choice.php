 <?php
	session_start();
	$studentid=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>选题系统</title>

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

    <script src="assets/js/chart-master/Chart.js">//onload="sh_second_possible_choice()"</script>
    
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="../student.php" class="logo"><b>选题系统</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="../student.php#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="../student.php#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="../student.php#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="../student.php#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="../student.php#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="../student.php#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">1</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 1 new messages</p>
                            </li>
                            <li>
                                <a href="../student.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">system message</span>
                                    <span class="time">just now</span>
                                    </span>
                                    <span class="message">
                                       Result of xuanti
                                    </span>
                                </a>
                            </li>                    
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../login.html">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></p>
                  <input type="text" style="background-color:#5B5B5B;color:rgb(255,255,255);border:0px;width:100px;height:20px;text-align:center;display:block;margin-left:61px;" readonly value="<?php echo $studentid;?>" name=stdid id=stdid> 
                    
                  <li class="mt">
                      <a href="../student.php">
                          <i class="fa fa-dashboard"></i>
                          <span>个人信息</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>选题</span>
                      </a>
                      <ul class="sub">
			  <li><a  href="view_thesis.php">查看题目</a></li>
			  <li><a  href="view_result.php">结果查看</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>其他页面</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.php">日历</a></li>
                          <li><a  href="lock_screen.html">锁屏</a></li>
                      </ul>
                  </li>
    
                  
               
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <div class="copyrights">Collect from</div>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->   <form  class="form-signin" name="myform"    method="post">
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-9 main-chart">
                  <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display dataTable" width="100%" id="tableHint" aria-describedby="DataTables_Table_0_info" style="width: 100%;" >
	    	<?php
			session_start();
			$studentid=$_SESSION['user'];

			$con=mysql_connect('localhost','zuo','151002315');
			$db_selected=mysql_select_db('n152315',$con);
	
		       	$SQL="select * from thesis,teacher where  thesis.tid=teacher.tid  and thesis.major=(select major from student where sid='".$studentid."') and thesis.thid not in(select thid from t_th)";
	
			$result=mysql_query($SQL);
			$rows=mysql_num_rows($result);
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
			<td align=center><b>teacher major</b></td>
			<td align=center><b>choose</b></td>";
			//$obj=array(array());
			$i=0;
			while(($data1 = mysql_fetch_row($result)))
			{   
				    $i++;
				    echo "<tr>";
				    echo "<td align=center id='id$i'>$data1[0]</td>";
				    echo "<td align=center>$data1[1]</td>";
				    echo "<td align=center>$data1[2]</td>";
				    echo "<td align=center>$data1[3]</td>";
				    echo "<td align=center>$data1[5]</td>";
				    echo "<td align=center>$data1[6]</td>";

				    echo "<td align=center>$data1[8]</td>";
				    echo "<td align=center>$data1[9]</td>";
				    echo "<td align=center>$data1[10]</td>";  //
				    echo "<td align=center><input class='btn btn-large btn-primary' type='button' id='yes$i'  onclick='javascript:pass($i);' value='get this one'></button> </td>";
			echo "</tr>";
			}
			echo "</table>";
		?>
			<script type="text/javascript">
			function pass(n)
			{
			    var t="id"+n;
			   // alert(t);
			    var thid= document.getElementById(t).innerHTML;
			//	alert(thid);
			    xmlHttp=GetXmlHttpObject();
			    if (xmlHttp==null)
			     {
			     alert ("Browser does not support HTTP Request");
			     return;
			     }
			    var url="second_choice_handle.php";
			    url=url+"?thid="+thid;
			    /*alert("url");
			    alert(url);*/
			    url=url+"&sid="+Math.random();
			  //  xmlHttp.onreadystatechange=stateChanged ;
			   // xmlHttp.open("GET",url,true);
			    //xmlHttp.send(null);
			    window.location.href=url;
			 }
			/*function stateChanged() 
			{ 
			if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete");
			 { 
			 document.getElementById("tableHint").innerHTML=xmlHttp.responseText ;
			 } 
			}*/

			function GetXmlHttpObject()
			{
			var xmlHttp=null;
			try
			 {
			 // Firefox, Opera 8.0+, Safari
			 xmlHttp=new XMLHttpRequest();
			 }
			catch (e)
			 {
			 //Internet Explorer
			 try
			  {
			  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
			  }
			 catch (e)
			  {
			  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			 }
			return xmlHttp;
			}
			 </script>
                    </table>
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                 
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer" style="margin-top:480px;">
          <div class="text-center">
              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;2017 - 选题系统 -</a>
              <a href="end_result.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
    <script src="assets/js/zabuto_calendar.js"></script>  
    <script type="text/javascript">
   /* function sh_second_possible_choice(){
		var studentid=document.getElementById("stdid").value;
		//alert(studentid);
		
		xmlHttp=GetXmlHttpObject()
		xmlHttp=GetXmlHttpObject()
    		if (xmlHttp==null)
		{
		   alert ("Browser does not support HTTP Request")
		   return
		}
    		var url="second_possible_choice.php"
    		url=url+"?studentid="+studentid;
    		//alert("url");
    		alert(url);
		alert(studentid);
    		url=url+"&sid="+Math.random()
    		xmlHttp.onreadystatechange=stateChanged 
    		xmlHttp.open("GET",url,true)
    		xmlHttp.send(null)
    	}

    

	function stateChanged() 
	{ 
	       if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	       { 
			
			alert(xmlHttp.responseText)
			/*if(!xmlHttp.responseText)
			{
			alert("很遗憾你没选中题目,即将去往复选页面...");
			window.location.href="second_choice.php";
			}
			else
			{
	     		document.getElementById("tableHint").innerHTML=xmlHttp.responseText
			//}
		 
	       } 
	}

	function GetXmlHttpObject()
	{
	      var xmlHttp=null;
	      try
	      {
	     	// Firefox, Opera 8.0+, Safari
	     	xmlHttp=new XMLHttpRequest();
	      }
	      catch (e)
	      {
	     	//Internet Explorer
	     	try
	      	{
	      		xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
	      	}
	     	catch (e)
	      	{
	      		xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	      	}
	     }
	     return xmlHttp;
	 }*/
	</script>
  
  
  
   </form>
  </body>
</html>
