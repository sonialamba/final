<?php
	require "connect.php";
	function pairing($mentor_id,$mentee_id)
	{
		global $conn;
		$sql="INSERT into pairtable (mentor_id,mentee_id) 
		values(".$mentor_id.",".$mentee_id.")";
		echo $sql;	 
		$qury=mysqli_query($conn,$sql);
		if(!$qury)
		{	 
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
			
		else
		{
			echo "<script>";
			echo "window.location.href =''";
			echo "</script>";	
		}
	}
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
<style type="text/css">
	tr, td{
		margin: 5px,5px,5px,5px;
		padding: 5px,5px,5px,5px;
	}
</style>

  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <header class="header dark-bg">
            <!--logo start-->
            <a href="admin.php" class="logo">KATALYST</a>
            <!--logo end-->
            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu"> 
                    <li><a href="admin.php">Home</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="">Contact us</a></li>
                    </ul>
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
                                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>

                            </ul>
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
						<li><i class="icon_genius"></i>Pairing</li>						  	
					</ol>
				</div>
			</div>  
            </section>
            <div id="main">
            	
            		<?php 
            		 include "connect.php";
            		 $sql="select firstname from menteeinfo where menee_id not in ( select mentee_id from pairtable where mentee_id in ( select menteeinfo_id from menteeinfo where menee_id in ( select user_id from users where role_id = 3)));";
            		 $sql1="select ment_fname from mentor_info";
            		 $result= mysqli_query($conn, $sql);
            		 $result1= mysqli_query($conn, $sql1);
            		 $arr = "";
            		 if (mysqli_num_rows($result1) > 0) {
    					// output data of each row
    					$y = 0;
    					while($row = mysqli_fetch_assoc($result1)) {
    							$arr[$y]=$row['ment_fname'];
    							$y++;
            			}
            		}
            		
            		 if (mysqli_num_rows($result) > 0) {
    					// output data of each row
    					
    					while($row = mysqli_fetch_assoc($result)) {
    						echo "<form>";
    						echo "<table><tr>";
    						echo "<td>".$row['firstname']."</td><td>";
    						echo "<select name=\"abc\">";
    						 foreach ($arr as $items) {
    						 	echo "<option value=".$items.">".$items."</option>" ;
    						 }	
							 echo "</select></td>";
							 $sql2="select menteeinfo_id from menteeinfo where firstname='".$row['firstname']."'";
							 $result2= mysqli_query($conn, $sql2);
							 $a=0;
							 if (mysqli_num_rows($result2) > 0) {
    							while($row = mysqli_fetch_assoc($result2)) {
    							$a=$row['menteeinfo_id'];
    							
            			}
            		}
            		$mentor=0;
            				if(isset($_GET['abc']))
    						$mentor = $_REQUEST['abc'] ;
  							$sql3="select mentorinfo_id from mentor_info where ment_fname='".$mentor."'";
							 $result3= mysqli_query($conn, $sql3);
							 $b=0;
							 if (mysqli_num_rows($result3) > 0) {
    							while($row = mysqli_fetch_assoc($result3)) {
    							$b=$row['mentorinfo_id'];

            			}
            		}
            		$b++;
							 echo "<td><button name=\"add\" value =\"add$b\">Add</button></td>	</tr>";
							     						echo "<br/></form>";
    					}
    				}
    				if(isset($_REQUEST['add'])){
							 	pairing($a,$b);
							 }

            		?>
            	
            	</table>

            </div>
           </section> <!-- container section start -->

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