<?php
include"dbconfig.php";


		extract($_REQUEST);
		echo $query= "DELETE FROM registration WHERE id = '$id'";
		if(iud($query))
			{
			header("location:RegProviders.php");
		}
		else{
			header("location:RegProviders.php");
		}
	
?>