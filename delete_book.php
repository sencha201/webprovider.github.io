<?php
include"dbconfig.php";


		extract($_REQUEST);
		echo $query= "DELETE FROM booking WHERE book_id = '$bid'";
		if(iud($query))
			{
			header("location:Allbooking.php");
		}
		else{
			header("location:Allbooking.php");
		}
	
?>