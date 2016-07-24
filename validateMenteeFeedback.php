<?php 
	include "insert_mentee_feedback.php";
	if(isset($_REQUEST["submit"])){
		$mentee_id = $_SESSION["userId"];
		$feedback_date = $_REQUEST["date"];
		$feedback_time = $_REQUEST["time"];
		$quality = $_REQUEST["quality"];
		$goals = $_REQUEST["goals"];
		$improvement = $_REQUEST["improvement"];
		$rate = $_REQUEST["rate"];
		$mentor_id = $_REQUEST["menteeName"];
		$comment = "This is comments section";
		insert_mentee($feedback_date,$feedback_time,$comment,$quality,$goals,$improvement,$rate,$mentor_id,$mentee_id);
	}
	
?>