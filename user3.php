<?php
include"dbconfig.php";


	extract($_REQUEST);
	if(iud("UPDATE registration SET status = '1' WHERE id = '$id' ")==1)
	{
		header("location:ProviderRequest.php");
		
	}
	else{
		header("location:ProviderRequest.php");
	}
	
?>