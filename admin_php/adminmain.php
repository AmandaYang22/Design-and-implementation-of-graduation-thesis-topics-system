<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>毕业设计选题系统</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css"> 
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
<script type="text/javasript">
alert('a');
alert($SESSION['user']);
document.getElementById("user").innerHTML=$_SESSION['user'];
</script>

</head>
<body>
<section id="container" style="background-color: #0380d8">
<header class="header black-bg">
<div class="sidebar-toggle-box">
	  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <a href="index.html" class="logo"><b>毕业设计选题系统</b></a>
    <div class="top-menu">
	<ul class="nav pull-right top-menu">
	    <li><a class="logout btn btn-danger" href="login.html">Logout</a></li>
	</ul>
    </div>
</header>

<aside>
  <div id="sidebar"  class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu" id="nav-accordion">
      
	  <p class="centered"><a href="#"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
	  <h5 class="centered"><span id="user"><?php session_start();echo $_SESSION['user'];?></span></h5>
		
	  <li class="mt">
	      <a class="active" href="admin1.php" target="rightarea">
		  <i class="fa fa-dashboard"></i>
		  <span>教师用户管理</span>
	      </a>
	  </li>
	  <li class="mt">
	      <a class="" href="admin2.php" target="rightarea" >
		  <i class="fa fa-cogs"></i>
		  <span>学生用户管理</span>
	      </a>
	  </li>
	  <li class="mt">
	      <a class="" href="admin3.php" target="rightarea">
		  <i class="fa fa-tasks"></i>
		  <span>选题结果查看</span>
	      </a>
	  </li>
      <!-- sidebar menu end-->
  </div>
</aside>

<section id="main-content" name="main-content" class="span9">
<iframe src="admin1.php" id="rightarea" name="rightarea" scrolling="no"  frameborder="0" width=100% height=680px style="margin-top: 60px;"></iframe>
    </section>

    <footer class="site-footer">
        <div class="text-center">
            <p>copyright@李若楠、杨荣、张鏝妮</p>
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
    </footer>
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
</body>
</html>
<script type="text/javascript">
document.getElementById("user").value=document.getElementById("user").innerHTML;
alert("Welcom "+document.getElementById("user").value+" !");

</script>
