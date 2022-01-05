<?php
include"dbconfig.php";


	extract($_REQUEST);
	if(iud("UPDATE booking SET status = '1' WHERE book_id = '$bid' ")==1)
	{
		header("location:mybooking.php");
		
	}
	else{
		header("location:mybooking.php");
	}
	
?>