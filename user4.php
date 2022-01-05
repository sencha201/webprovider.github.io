<?php
include"dbconfig.php";


		extract($_REQUEST);
		echo $query="UPDATE booking SET status = '2' WHERE name = '$name' and date='$date' ";
		if(iud($query))
			{
			header("location:Allbooking.php");
		}
		else{
			header("location:Allbooking.php");
		}
	
?>