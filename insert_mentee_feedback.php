	<?php
	require "connect.php";
	$mentee_id = $_SESSION['userId'];
	function insert_mentee($feedback_date,$feedback_time,$comment,$quality,$goals,$improvement,$rate,$mentor_id,$mentee_id)
	{
		global $conn;
		$sql= "INSERT INTO `mentee_feedback` ( `feedback_rate`, `Comments`, `feedback_date`, `feedback_time`, `qinter`, `ginter`, `improvement`, `mentor_id`, `mentee_id`) VALUES ('".$rate."','".$comment."', '".$feedback_date."', '".$feedback_time."', '".$quality."', '".$goals."', '".$improvement."', '".$mentor_id."', '".$mentee_id."');";
		echo $sql;	 
		$qury=mysqli_query($conn,$sql);
		if(!$qury)
		{	 
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
			
		else
		{
			echo "<script>";
			echo "window.location.href ='mentee.php'";
			echo "</script>";
		}
	}
?>	