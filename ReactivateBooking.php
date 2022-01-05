<?php
include"dbconfig.php";


	extract($_REQUEST);
	if(iud("UPDATE booking SET status = '0' WHERE book_id = '$bid' ")==1)
	{
        echo'<script>alert("User Booking has successfully reactivated")</script>';
		header("location:mybooking.php");
		
	}
	else{
		header("location:mybooking.php");
	}
	
?>