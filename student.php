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

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">     <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  </head>

  <body	onload="show_message()">
  <form class="form-signin" name="myform" method="post" action="./stu_php/modify_message.php">
  <section id="container" >
<header class="header black-bg">        
      <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="student.php" class="logo"><b>毕业设计选题系统</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="student.php#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="student.php#">
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
                                <a href="student.php#">
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
                                <a href="student.php#">
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
                                <a href="student.php#">
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
                        <a data-toggle="dropdown" class="dropdown-toggle" href="student.php#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">1</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 1 new messages</p>
                            </li>
                            <li>
                                <a href="student.php#">
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
                    <li><a class="logout" href="login.html">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></p>
<input type="text" style="background-color:#5B5B5B;color:rgb(255,255,255);border:0px;width:100px;height:20px;text-align:center;display:block;margin-left:61px;" readonly value="<?php echo $studentid;?>" name=stdid id=stdid> 
                                    
<li class="mt">
                      <a>
                          <i class="fa fa-dashboard"></i>
                          <span>个人信息</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="./stu_php/view_thesis.php" >
                          <i class="fa fa-desktop"></i>
                          <span>选题</span>
                      </a>
                      <ul class="sub">
			  <li><a  href="./stu_php/view_thesis.php">查看题目</a></li>
                          <li><a  href="./stu_php/first_choice.php">初选</a></li>
                          <li><a  href="./stu_php/view_result.php">结果查看</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>其他页面</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="./stu_php/calendar.php">日历</a></li>
                          <li><a  href="./stu_php/lock_screen.html">锁屏</a></li>
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
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-9 main-chart">
                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display dataTable" width="100%" id="tableHint" aria-describedby="DataTables_Table_0_info" style="width: 100%;" >
                    </table>
                  	
               	    <button class="btn btn-large btn-primary" style="margin-top:20px;margin-left:330px;" value="modify">modify</button>
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer" style="margin-top:440px;">
          <div class="text-center">
              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;2017 - 选题系统 -</a>
              <a href="student.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
 </form>
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
	function show_message(){
		var studentid=document.getElementById("stdid").value;
		//alert(studentid);
		
		xmlHttp=GetXmlHttpObject()
		xmlHttp=GetXmlHttpObject()
    		if (xmlHttp==null)
		{
		   alert ("Browser does not support HTTP Request")
		   return
		}
    		var url="./stu_php/show_student_message.php"
    		url=url+"?studentid="+studentid;
    		//alert("url");
    		//alert(url);
		//alert(studentid);
    		url=url+"&sid="+Math.random()
    		xmlHttp.onreadystatechange=stateChanged 
    		xmlHttp.open("GET",url,true)
    		xmlHttp.send(null)
    	}

    

	function stateChanged() 
	{ 
	       if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	       { 
	     	document.getElementById("tableHint").innerHTML=xmlHttp.responseText 
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
	 }
	</script>
  </body>
</html>
