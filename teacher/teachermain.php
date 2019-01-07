<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=gb2312">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>teacher page</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css"> 
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
</head>
<body>
  <header class="header black-bg">
    <div class="sidebar-toggle-box">
      <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <a href="index.html" class="logo"><b>毕业设计选题系统</b></a>
    <div class="top-menu">
      <ul class="nav pull-right top-menu">
          <li><a class="logout btn btn-danger" href="../login.html">Logout</a></li>
      </ul>
    </div> 
  </header>
    
    <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><SPAN id="user"><?php session_start();echo $_SESSION['user'];?></SPAN></h5>
                  <li class="mt">
                      <a class="active" href="home.html" target="rightarea">
                          <i class="fa fa-dashboard"></i>
                          <span>HOME PAGE</span>
                      </a>
                  </li>

                  <li class="mt">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>教师信息</span>
                      </a>
                      <ul class="sub-menu">
                          <li><a  href="basic_info.php" target="rightarea">基本信息</a></li>
                          <li><a  href="info_modify.html" target="rightarea">信息修改</a></li>
                       
                      </ul>
                  </li>

                  <li class="mt">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                  			  <span>毕业选题</span>
                      </a>
                      <ul class="sub-menu">
                          <li><a  href="exist_thesis.php" target="rightarea">现有选题</a></li>
                          <li><a  href="teacher_thesis.html" target="rightarea">新建选题</a></li>
                      </ul>
                  </li>

	
                  <li class="mt">
                    <a  href="student_thesis.php" target="rightarea"><i class="fa fa-tasks"></i><span>选题分配</span></a>   
                  </li>

                  <li class="mt">
                          <a  href="final.php" target="rightarea"><i class="fa fa-bars"></i><span>选题结果</span></a>
                    
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
    </aside>
    
    <div id="main-content">
      <iframe name="rightarea"  src="home.html" scrolling="yes" frameborder="0" height="680px" width="100%" style=" margin-top:60px auto">
      </iframe>
    </div>

  <footer class="site-footer">
        <div class="text-center">
            <p>copyright@LRN,YR,ZMN</p>
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
    </footer>
</div>
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
    </body>
</html>
