<?php
	session_start();
	include "validateMentorFeedback.php";
	require "connect.php";
	
	$user_id = $_SESSION["userId"];
?>
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
                            
                            <span>Mentor</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            
                            <li>
                                <a href="logout.html"><i class="icon_key_alt"></i> Log Out</a>
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
                  <li class="active">
                      <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="feedback_mentor.php">
                         <span>Feedback</span>
                          
                      </a>
                                         
                  </li>
                  <li>                     
                      <a class="" href="chart-chartjs.html">
                          <span>Pennding Invitations</span>                          
                      </a>   
                    </li>   
                    
                    <li>                     
                      <a class="" href="chart-chartjs.html">
                          <span>Forum</span>                          
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
                        <li><i class="fa fa-laptop"></i>Feedback</li>                          
                    </ol>
                </div>
            </div>
              
            </section>
            </section>
  <!-- container section start -->
  <div align="center" class="container">
  <h2>Form</h2>
  <form method = "post" action="#">
    1. Name of mentee
    <select type="text" name="menteeName" id="name">
		<?php
			$sql = "select firstname , lastname , menteeinfo_id from menteeinfo where menteeinfo_id in ( select mentee_id from pairtable where mentor_id in (select mentorinfo_id from mentor_info where mentor_id = ".$user_id."))";
			$result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<option ";
				echo "value = ".$row["menteeinfo_id"]." >";
				echo $row["firstname"]." ".$row["lastname"];
				echo "</option>";	
			}	
		?>
	</select>
	<br>
    2. Date and time of interaction
    <input type="date" name="date" id="date" placeholder="dd-mm-yyyy"><br>
    <input type="time" name="time" id="time" placeholder="hh:mm"><br><br>
    3.How Do you rate the quality of the interaction?</p>
    <label class="radio-inline">
      <input type="radio" name="quality" value=5>Good
    </label>
    <label class="radio-inline">
      <input type="radio" name="quality" value=2>can be better
    </label>
    <label class="radio-inline">
      <input type="radio" name="quality" value=1>Poor
    </label><br><br>

     4.Were the goals of the interaction met?</p>
    <label class="radio-inline">
      <input type="radio" name="goals" value=5>Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="goals"vale=2> Can't say
    </label>
    <label class="radio-inline">
      <input type="radio" name="goals" value=1>No
    </label><br>

     5.Is there any improvement in the mentee?</p>
    <label class="radio-inline">
      <input type="radio" name="improvement"value=5>Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="improvement" value=2> No
    </label><br>
	 6.Feedback Rate?<p>
    <label class="radio-inline">
      <input type="radio" name="rate"value=5>Good
    </label>
    <label class="radio-inline">
      <input type="radio" name="rate" value=3> Average
    </label>
	<label class="radio-inline">
      <input type="radio" name="rate" value=1> Poor
    </label><br>
	
	<input type="Submit" name="submit" id="submit"><a href="mentor.php"></a>
  </form>
</div>

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>  
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>    
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
      
      /* ---------- Map ---------- */
    $(function(){
      $('#map').vectorMap({
        map: 'world_mill_en',
        series: {
          regions: [{
            values: gdpData,
            scale: ['#000', '#000'],
            normalizeFunction: 'polynomial'
          }]
        },
        backgroundColor: '#eef3f7',
        onLabelShow: function(e, el, code){
          el.html(el.html()+' (GDP - '+gdpData[code]+')');
        }
      });
    });



  </script>

  </body>
</html>
