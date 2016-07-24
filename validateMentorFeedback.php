<?php 
	include "inser_ment_feedback.php";
	if(isset($_REQUEST["submit"])){
		$user_id = $_SESSION["userId"];
		$menteeId = $_REQUEST["menteeName"];
		$date = $_REQUEST["date"];
		$time = $_REQUEST["time"];
		$quality = $_REQUEST["quality"];
		$goals = $_REQUEST["goals"];
		$improvement = $_REQUEST["improvement"];
		$rate = $_REQUEST["rate"];
		$comments = "This is comments section";
		insert_ment($rate,$comments,$date,$time,$quality,$goals,$improvement,$menteeId,$user_id);
	}

?>