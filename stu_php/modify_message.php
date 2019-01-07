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

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    

    <script type="text/javascript">
//	alert("!!!@@@");
    	function checkName(){
	//alert("studentname");	
//	alert("myform.sname.value");
//	alert(myform.sname.value);
	if(myform.sname.value=="")
	{
	    alert("姓名不能为空！");
	    myform.sname.focus();
	    return false;
	}			
	else{	
		var userName=document.getElementById("sname").value;
		//	var Expression=/^(\w){5,10}$/;
		var Expression=/^[a-z]{3,40}$/;
		var objExp=new RegExp(Expression);			   
		if(objExp.test(userName)==false)
		{	
			alert("姓名是3-40个小写字母!");
			myform.sname.focus();	
		}
	    }
	} 

	
	function checkTelephone(){
	//alert("telephone");
	if(myform.tel.value=="")
	{
	    alert("电话不能为空！");
	    myform.tel.focus();
	    return false;
	}
	else{
		var telephone=document.getElementById("tel").value;
		var Expression=/^[1][3,4,5,7,8][0-9]{9}$/;
		var objExp=new RegExp(Expression);			   
		if(objExp.test(telephone)==false)
		{	
			alert("电话号码是11位数字,以1开头，第2位是3,4,5,7,8,中的任意一位!");
			myform.tel.focus();	
		}
	    }
	}

	function checkPasswd(){
	//alert("password");
	if(myform.passwd.value=="")
	{
	    alert("密码不能为空！");
	    myform.passwd.focus();
	    return false;
	}
	else{
		var password=document.getElementById("passwd").value;
		var Expression=/^[a-zA-Z](\w){5,10}$/;
		var objExp=new RegExp(Expression);			   
		if(objExp.test(password)==false)
		{	
			alert("密码以字母开头，长度在6-10之间，只能包含字符、数字和下划线!");
			myform.passwd.focus();	
		}
	    }
	}

	
	function checkRepwd(){
	//alert("repassword");
	var passwd1=document.getElementById("passwd").value;
	var passwd2=document.getElementById("repwd").value;
	if(myform.repwd.value=="")
	{
	    alert("请再次输入密码!");
	    myform.repwd.focus();
	    return false;
	}
	else{
		if(passwd2!=passwd1){
		alert("两次输入不一致!");
		myform.repwd.focus();
	}
	    }
	}

	function checkEmail(){
	//alert("email");
	if(myform.email.value=="")
	{
	    alert("邮箱不能为空!");
	    myform.email.focus();
	    return false;
	}
	else{
		var ema=document.getElementById("email").value;
		var Expression=/^[A-Za-z\d]+([-_.][A-Za-z\d]+)*@([A-Za-z\d]+[-.])+[A-Za-z\d]{2,4}$/;
		var objExp=new RegExp(Expression);			   
		if(objExp.test(ema)==false)
		{	
			alert("请输入正确的邮箱地址!");
			myform.email.focus();	
		}
	    }
	}
	

	function checkMajor(){
	//alert("major");
	if(myform.major.value=="")
	{
	    alert("专业不能为空!");
	    myform.major.focus();
	    return false;
	}
	else{
		var maj=document.getElementById("major").value;
		var Expression=/^[a-z]{3,40}$/;
		var objExp=new RegExp(Expression);			   
		if(objExp.test(maj)==false)
		{	
			alert("专业是3-40个小写字母!");
			myform.major.focus();	
		}
	    }
	}


	//don't jump to another page 
	function check(myform){
	if(myform.sname.value=="")
	{
	    alert("姓名不能为空！");
	    myform.sname.focus();
	    return false;
	    location.href='modify_message.php';
	}
	if(myform.tel.value=="")
	{
	    alert("电话不能为空！");
	    myform.tel.focus();
	    return false;
	    location.href='modify_message.php';
	}
	if(myform.passwd.value=="")
	{
	    alert("密码不能为空！");
	    myform.passwd.focus();
	    return false;
	    location.href='modify_message.php';
	}
	if(myform.repwd.value=="")
	{
	    alert("请再次输入密码!");
	    myform.repwd.focus();
	    return false;
	    location.href='modify_message.php';
	}	
	if(myform.passwd.value!=myform.repwd.value)
	{
	    alert("两次输入不一致!");
	    myform.repwd.focus();
	    return false;
	    location.href='modify_message.php';
	}	
	if(myform.email.value=="")
	{
	    alert("邮箱不能为空!");
	    myform.email.focus();
	    return false;
	    location.href='modify_message.php';
	}
	if(myform.major.value=="")
	{
	    alert("专业不能为空!");
	    myform.major.focus();
	    return false;
	    location.href='modify_message.php';
	}
 }		
     </script>

  </head>

  <body>
  <form class="form-signin"name="myform" method="post" action="update_student_message.php">
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
                      <a class="active" href="../student.php">
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
                          <li><a  href="first_choice.php">初选</a></li>
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
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-9 main-chart">
                   
		   	<div class="form-group">
    			<label for="sname" class="col-lg-2 col-form-label"style="margin-left:200px;margin-right:400px;" >name</label>
			    <div class="col-lg-6">
			      <input type="text" class="form-control" name="sname" id="sname"  style="margin-left:200px;margin-right:400px;" placeholder="姓名是3-40个小写字母!" onChange="checkName()">
			    </div>
		        </div>
			<div class="form-group">
			<label for="tel" class="col-lg-2 col-form-label" style="margin-left:200px;margin-right:400px;margin-top:20px;">telephone</label>
			    <div class="col-lg-6">
			      <input type="text" class="form-control"  name="tel" id="tel"  style="margin-left:200px;margin-right:400px;" placeholder="电话号码是11位数字,以1开头，第2位是3,4,5,7,8,中
的任意一位!" onChange="checkTelephone()">
			    </div>
			</div>
			<div class="form-group">
			<label for="passwd" class="col-lg-2 col-form-label"  style="margin-left:200px;margin-right:400px;margin-top:20px;">password</label>
			    <div class="col-lg-6">
			      <input type="password" class="form-control" name="passwd" id="passwd" style="margin-left:200px;margin-right:400px;"  placeholder="以字母开头，长度在6-10之间，只能包含字符、>数字和下划线!" onChange="checkPasswd()">
			    </div>
			</div>
			<div class="form-group">
			<label for="repwd" class="col-lg-2 col-form-label" style="margin-left:200px;margin-right:400px;margin-top:20px;">repassword</label>
			    <div class="col-lg-6">
			      <input type="password" class="form-control" name="repwd" id="repwd" placeholder="please enter password again"  style="margin-left:200px;margin-right:400px;"onChange="checkRepwd()">
			    </div>
			</div>
			<div class="form-group">
			<label for="email" class="col-lg-2 col-form-label"  style="margin-left:200px;margin-right:400px;margin-top:20px;">email</label>
			    <div class="col-lg-6">
			      <input type="text" class="form-control" name="email" id="email" style="margin-left:200px;margin-right:400px;"  placeholder="请输入正确的邮箱地址!" onChange="checkEmail()">
			    </div>
			</div>
			<div class="form-group">
			<label for="major" class="col-lg-2 col-form-label" style="margin-left:200px;margin-right:400px;margin-top:20px;">major</label>
			    <div class="col-lg-6">
			      <input type="text" class="form-control" name="major" id="major" placeholder="专业是3-40个小写字母!"  style="margin-left:200px;margin-right:400px;"onChange="checkMajor()">
			    </div>
			</div>

               	    	<button class="btn btn-large btn-primary" style="margin-top:440px;margin-right:270px;" value="submit" onClick="return check(myform);">submit</button>
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer" style="margin-top:120px;">
          <div class="text-center">
              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;2017 -选题系统  -</a>
              <a href="../student.php#" class="go-top">
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
  </body>
</html>
