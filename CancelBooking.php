<?php
include"dbconfig.php";


	extract($_REQUEST);
	if(iud("UPDATE booking SET cancel = '1' WHERE book_id = '$bid' ")==1)
	{
        echo'<script>alert("Your Booking has successfully cancelled")</script>';
		header("location:UserViewBooking.php");
		
	}
	else{
		header("location:UserViewBooking.php");
	}
	
?>