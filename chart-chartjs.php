<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>

    <!-- Bootstrap CSS -->    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
   
    <link rel="stylesheet" type="text/css" href="owl_carousel/owl-carousel/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="owl_carousel/owl-carousel/owl.theme.css">
<link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="owl_carousel/owl-carousel/owl.carousel.js"></script>
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet"> 
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            

            <!--logo start-->
            <a href="index.html" class="logo">KATALYST</a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu"> 
                    <li><a href="www.index.html">Home</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="">Contact us</a></li>
            
                <!--  search form end -->               

            </div>
            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
               <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            

                                <i class="glyphicon glyphicon-user"></i>
                            
                            <span>Admin</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            
                            <li>
                                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                         
                </ul>
            </div>

      </header>      

      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  
                  <li class="sub-menu">
                      <a href="" class="">
                          <i class="icon_document_alt"></i>
                          <span>Requests</span>
                         
                      </a>
              
                  </li>       
                  
                  <li>
                      <a class="" href="pairing.php">
                          <i class="icon_genius"></i>
                          <span>Pairing</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="chart-chartjs.php">
                          <i class="icon_piechart"></i>
                          <span>Reports</span>
                          
                      </a>
                                         
                  </li>
                  <li>                     
                      <a class="" href="payouts.php">
                          <i class="fa fa-usd"></i>
                          <span>Payouts</span>
                          
                      </a>               
                  </li>
                  <li>                     
                      <a class="" href="newsletter.html">
                          <i class="icon_document_alt"></i>
                          <span>Newsletter</span>
                          
                      </a>
                                         
                  </li>
                             
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
              <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="icon_piechart"></i>Reports</li>                          
                    </ol>
                </div>
            </div>  
            </section>
            <div class="">
                <!-- call php code that shows notifications-->
                Filter By: 
                <select>
                    <option>By Location</option>
                    <option>By Mentor</option>
                    <option>By Mentee</option>
                    <option>By All</option>
                </select>
                Name:
                <input type="text" name="name">
            </div>
                                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Bar
                                  </header>
                                  <div class="panel-body text-center">
                                      <img src="img/test.jpg" width="200px" height="200px">
                                  </div>

            
            </section>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- chartjs -->
    <script src="assets/chart-master/Chart.js"></script>
    <!-- custom chart script for this page only-->
    <script src="js/chartjs-custom.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- chartjs -->
    <script src="assets/chart-master/Chart.js"></script>
    <!-- custom chart script for this page only-->
    <script src="js/chartjs-custom.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
  </body>
</html>
