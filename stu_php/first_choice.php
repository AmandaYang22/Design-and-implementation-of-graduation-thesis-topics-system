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

    <title>毕业设计选题系统</title>

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

    <script type="text/javascript">
   // alert("!!!!!!");
    function checkChoice1(){
	//alert("test!!!!");
  	if(myform.choice1.value=="")
	{
	     alert("请输入第一志愿！");
	     myform.choice1.focus();
	     return false;
	}
        else{
	     var c1=document.getElementById("choice1").value;
	     // JavaScript Document
	     var XHR;    //定义一个全局对象
	     function createXHR(){              //首先我们得创建一个XMLHttpRequest对象
	     if(window.ActiveXObject){//IE的低版本系类
			 XHR=new ActiveXObject('Microsoft.XMLHTTP');//之前IE垄断了整个浏览器市场，没遵循W3C标准，所以就有了这句代码但IE6之后开始有所改观
	      }else if(window.XMLHttpRequest){//非IE系列的浏览器，但包括IE7 IE8
      			 XHR=new XMLHttpRequest();
              }
              }
	     function checkname(){
                         var firstchoice=myform.choice1.value;
			 var studentid=myform.stdid.value;
			 var url="check_choice1_thid.php";
		  	 url=url+"?thid1="+firstchoice+"&studentid="+studentid;
			 url=url+"&sid="+Math.random();
			 createXHR();    
//			 alert(username);
                         XHR.open("GET",url,true);//true:表示异步传输，而不等send()方法返回结果，这正是ajax的核心思想
                         XHR.onreadystatechange=byhongfei;//当状态改变时，调用byhongfei这个方法，方法的内容我们另外定义
                         XHR.send(null);
             }
	     function byhongfei(){
			if(XHR.readyState == 4){//关于Ajax引擎对象中的方法和属性
      				if(XHR.status == 200){    
	                                 var textHTML=XHR.responseText;            
	                                 document.getElementById('name_status1').innerHTML=textHTML;
	                                 }
	                 }
	      }
	      createXHR();
	      checkname();
	      byhongfei();
	     }
}
	
	function checkChoice2(){
	//alert("test2!!!!");
  	if(myform.choice2.value=="")
	{
	     alert("请输入第二志愿！");
	     myform.choice2.focus();
	     return false;
	}
	else if((myform.choice1.value==myform.choice2.value)||(myform.choice2.value==myform.choice3.value))
	{
	     alert("该课题已经选过");
	     return false;
	}
        else{
	     var c2=document.getElementById("choice2").value;
	     // JavaScript Document
	     var XHR;    //定义一个全局对象
	     function createXHR(){              //首先我们得创建一个XMLHttpRequest对象
	     if(window.ActiveXObject){//IE的低版本系类
			 XHR=new ActiveXObject('Microsoft.XMLHTTP');//之前IE垄断了整个浏览器市场，没遵循W3C标准，所以就有了这句代码但IE6之后开始有所改观
	      }else if(window.XMLHttpRequest){//非IE系列的浏览器，但包括IE7 IE8
      			 XHR=new XMLHttpRequest();
              }
              }
	     function checkname(){
                         var secondchoice=myform.choice2.value;
			 var studentid=myform.stdid.value;
			 var url="check_choice2_thid.php";
		  	 url=url+"?thid2="+secondchoice+"&studentid="+studentid;
			 url=url+"&sid="+Math.random();
			 createXHR();    
//			 alert(username);
                         XHR.open("GET",url,true);//true:表示异步传输，而不等send()方法返回结果，这正是ajax的核心思想
                         XHR.onreadystatechange=byhongfei;//当状态改变时，调用byhongfei这个方法，方法的内容我们另外定义
                         XHR.send(null);
             }
	     function byhongfei(){
			if(XHR.readyState == 4){//关于Ajax引擎对象中的方法和属性
      				if(XHR.status == 200){    
	                                 var textHTML=XHR.responseText;            
	                                 document.getElementById('name_status2').innerHTML=textHTML;
	                                 }
	                 }
	      }
	      createXHR();
	      checkname();
	      byhongfei();
	     }
}

	function checkChoice3(){
	//alert("test2!!!!");
  	if(myform.choice3.value=="")
	{
	     alert("请输入第三志愿！");
	     myform.choice3.focus();
	     return false;
	}
	else if((myform.choice1.value==myform.choice3.value)||(myform.choice2.value==myform.choice3.value))
	{
	     alert("该课题已经选过");
	     return false;
	}
        else{
	     var c3=document.getElementById("choice3").value;
	     // JavaScript Document
	     var XHR;    //定义一个全局对象
	     function createXHR(){              //首先我们得创建一个XMLHttpRequest对象
	     if(window.ActiveXObject){//IE的低版本系类
			 XHR=new ActiveXObject('Microsoft.XMLHTTP');//之前IE垄断了整个浏览器市场，没遵循W3C标准，所以就有了这句代码但IE6之后开始有所改观
	      }else if(window.XMLHttpRequest){//非IE系列的浏览器，但包括IE7 IE8
      			 XHR=new XMLHttpRequest();
              }
              }
	     function checkname(){
                         var thirdchoice=myform.choice3.value;
			 var studentid=myform.stdid.value;
			 var url="check_choice3_thid.php";
		  	 url=url+"?thid3="+thirdchoice+"&studentid="+studentid;
			 url=url+"&sid="+Math.random();
			 createXHR();    
//			 alert(username);
                         XHR.open("GET",url,true);//true:表示异步传输，而不等send()方法返回结果，这正是ajax的核心思想
                         XHR.onreadystatechange=byhongfei;//当状态改变时，调用byhongfei这个方法，方法的内容我们另外定义
                         XHR.send(null);
             }
	     function byhongfei(){
			if(XHR.readyState == 4){//关于Ajax引擎对象中的方法和属性
      				if(XHR.status == 200){    
	                                 var textHTML=XHR.responseText;            
	                                 document.getElementById('name_status3').innerHTML=textHTML;
	                                 }
	                 }
	      }
	      createXHR();
	      checkname();
	      byhongfei();
	     }
}
		
	/*function checkMyform(){
		if(document.myform.choice1.value=="")
		{
		     alert("请输入第一志愿！");
		     document.myform.choice1.focus();
		     return false;
		}
		else if(document.myform.choice2.value=="")
		{
		     alert("请输入第二志愿！");
		     document.myform.choice2.focus();
		     return false;
		}
		else if((document.myform.choice1.value==document.myform.choice2.value)||(document.myform.choice2.value==document.myform.choice3.value))
		{
		     alert("该课题已经选过");
		     document.myform.choice2.focus();
		     return false;
		}
		else ifif(document.myform.choice3.value=="")
		{
		     alert("请输入第三志愿！");
		     document.myform.choice3.focus();
		     return false;
		}
		else if((document.myform.choice1.value==myform.choice3.value)||(document.myform.choice2.value==document.myform.choice3.value))
		{
		     alert("该课题已经选过");
		     document.myform.choice3.focus();
		     return false;
		}
		return true;
	}*/
  </script>
  </head>
  <body>
  <form name="myform" action="insert_first_choice.php" method="post">
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
            <a href=../"student.php" class="logo"><b>毕业设计选题系统</b></a>
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
    			<label for="choice1" class="col-lg-2 col-form-label"style="margin-left:200px;margin-right:400px;" >第一志愿</label>
			    <div class="col-lg-6">
			      <input type="text" class="form-control" name="choice1" id="choice1"  style="margin-left:200px;margin-right:400px;" placeholder="please enter the first choice" onChange="checkChoice1()"><span style="margin-left:200px;" id="name_status1"></span>            
			    </div>
		        </div>
			<div class="form-group">
			<label for="choice2" class="col-lg-2 col-form-label" style="margin-left:200px;margin-right:400px;margin-top:20px;">第二志愿</label>
			    <div class="col-lg-6">
			      <input type="text" class="form-control"  name="choice2" id="choice2"  style="margin-left:200px;margin-right:400px;" placeholder="please enter the second choice" onChange="checkChoice2()"><span style="margin-left:200px;" id="name_status2"></span>
			    </div>
			</div>
				<div class="form-group">
			<label for="choice3" class="col-lg-2 col-form-label"  style="margin-left:200px;margin-right:400px;margin-top:20px;">第三志愿</label>
			    <div class="col-lg-6">
			      <input type="text" class="form-control" name="choice3" id="choice3" style="margin-left:200px;margin-right:400px;"  placeholder="please enter the third choice" onChange="checkChoice3()"><span style="margin-left:200px;" id="name_status3"></span>
			    </div>
			</div>
             
                  	<button class="btn btn-large btn-primary" style="margin-top:250px;margin-left:100px;" value="submit">submit</button>
                      
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
              </div><! --/row -->
          </section>
      </section>
-->
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer" style="margin-top:300px;">
          <div class="text-center">
              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;2017 - 选题系统 -</a>
              <a href="first_choice.html#" class="go-top">
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
   </form>
  </body>
</html>
