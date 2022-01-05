<?php
include"dbconfig.php";


		extract($_REQUEST);
		echo $query= "DELETE FROM user_registration WHERE id = '$id'";
		if(iud($query))
			{
			header("location:RegUsers.php");
		}
		else{
			header("location:RegUsers.php");
		}
	
?>