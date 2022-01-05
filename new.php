<?php
include"dbconfig.php";
if(isset($_REQUEST['okay']))
{

	extract($_REQUEST);
    header("location:search.php?city=$city&cat=$category");
}
	########################################
	
if(isset($_REQUEST['booknow']))
{
	extract($_REQUEST);
	$id=$_SESSION['id'];
	$q="INSERT INTO `booking`(`work`, `city`, `name`, `mobile`, `address`, `date`, `days`, `hours`, `reg_id`, `status`,`cancel`,`booked_by`)  VALUES 
	('$cat','$city','$name','$mobile','$address','$date','$days','$hours','$regid','0','0','$id')";
	$n=iud($q);
	if($n==1)
	{
		echo'<script>alert("Booking Success We Will Contact You Very Soon");
		window.location="UserViewBooking.php"</script>';
	}
}	
##################################################################

/*

if(isset($_REQUEST['login']))

{                                                               
		
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
	
	$valid=true;
	$query="select * from registration where email='$email' and password='$password'";
	
	
	if($valid)
	{
	    $login_data=select($query);
	    echo $n=mysqli_num_rows($login_data);
	    if($n==1)
	    {
			
			while($data=mysqli_fetch_array($login_data))
		    {
			    extract($data);
		        $_SESSION['id']=$id;
		        header("location:mybooking.php?id=$id");
		    }
			
		}
	    else
	    {
			echo"<script>alert('Please enter correct credentials');
			window.location = 'login.php';
			</script>";
	    }
	}
		
}
*/


if(isset($_REQUEST['login']))

{                                                               
		
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
	
	$valid=true;
	$query="select * from registration where email='$email' and password='$password'";
	
	
	if($valid)
	{
	    $login_data=select($query);
	    echo $n=mysqli_num_rows($login_data);
	    if($n==1)
	    {

			while($data=mysqli_fetch_array($login_data))
		    {
				//echo $data['status'];
			    extract($data);
		        $_SESSION['id']=$id;
				if($data['status'])
				{
					header("location:mybooking.php?id=$id");
				}
		        //header("location:mybooking.php?id=$id");
				else{
					echo"<script>alert('Your Verification check is pending from the admin.');
					window.location = 'login.php';
					</script>";

				}
		    }
			
		}
	    else
	    {
			echo"<script>alert('Please enter correct credentials');
			window.location = 'login.php';
			</script>";
	    }
	}
		
}
		

###################################################################
if(isset($_REQUEST['login1']))

{
		
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
	
	$valid=true;
	$query="select * from admin_login where email='$email' and password='$password'";
	
	
	if($valid)
	{
	    $login_data=select($query);
	    echo $n=mysqli_num_rows($login_data);
	    if($n==1)
	    {
			while($data=mysqli_fetch_array($login_data))
		    {
			    extract($data);
		        $_SESSION['id']=$id;
		        header("location:Allbooking.php?id=$id");
		    }
			
		}
	    else
	    {
			echo"<script>alert('Please enter correct credentials');
			window.location = 'AdminLogin.php';
			</script>";
	    }
	}
		
}

#########################################################################################3

if(isset($_REQUEST['login2']))

{
		
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
	
	$valid=true;
	$query="select * from user_registration where email='$email' and password='$password'";
	
	
	if($valid)
	{
	    $login_data=select($query);
	    echo $n=mysqli_num_rows($login_data);
	    if($n==1)
	    {
			while($data=mysqli_fetch_array($login_data))
		    {
			    extract($data);
		        $_SESSION['id']=$id;
		        header("location:UserProfile.php?id=$id");
		    }
			
		}
	    else
	    {
			echo"<script>alert('Please enter correct credentials');
			window.location = 'UserLogin.php';
			</script>";
	    }
	}
		
}

#########################################################################

if(isset($_REQUEST['check']))

{                                                               
		
	$book_id=trim($_REQUEST['book']);

	$valid=true;
	// $query="select * from booking where bid='$book_id' ";
	// echo $query;
	// $result = select($book_id);
	// echo $result;

	$resultxy = sencha($book_id);
	echo $resultxy[0];
	echo $resultxy[1];
	// if(!result)
		// echo mysql_error();

	if($resultxy[0]==0 && $resultxy[1]==0 )
	{
		
		echo"<script>alert('Request pending');
		window.location = 'UserStatus.php';
		</script>";


	}
	else if($resultxy[0]==2 && $resultxy[1]==0){
		echo"<script>alert('Booking confirmed');
		window.location = 'UserStatus.php';
		</script>";

	}
	elseif(  $resultxy[0]==0 && $resultxy[1]==1 )
	{
		echo"<script>alert('Booking cancelled');
		window.location = 'UserStatus.php';
		</script>";

	}
	else{
		echo"<script>alert('Please enter correct booking id');
		window.location = 'UserStatus.php';
		</script>";
	}

/*
	if($valid)
	{
    	$login_data=select($query);
    	echo $n=mysqli_num_rows($login_data);
    	if($n==1)
    	{
			while($data=mysqli_fetch_array($login_data))
	    	{
		    	extract($data);
	        	$_SESSION['id']=$id;
	        	header("location:UserProfile.php?id=$id");
	    	}
			
		}
    	else
    	{
			echo"<script>alert('Please enter correct credentials');
			window.location = 'UserLogin.php';
			</script>";
    }
	}
	*/

	






	
}


/*
if(isset($_REQUEST['check']))
{
		
	$book_id=trim($_REQUEST['book']);

	
	if(isset($book_id))
	{
  		$statusQuery="SELECT * from booking WHERE bid='".$book_id."'";
        echo $statusQuery['status'];
  		$status=-1;
  		if($statusQuery['status']==0)
  		$status='pending';
  		elseif($statusQuery['status']==2)
  		$status='confirm';
  		elseif($statusQuery['status']==1)
  		$status='Booking has been Accepted. Please wait for the confirmation';
  		if($status!=-1)
  		echo"<script>alert('".$status."')</script>";
	}

	
	/*
	$valid=true;
	$query="SELECT * from booking";	

		
	if($valid)
	{
    	$login_data=select($query);
    	echo $n=mysqli_num_rows($login_data);
    	
		if($n==1)
    	{
			while($data=mysqli_fetch_array($login_data))
	    	{
			//echo $data['status'];
		    	extract($data);
	        	$_SESSION['id']=$id;
				if($data['status'])
				{
					header("location:mybooking.php?id=$id");
				}
	        		//header("location:mybooking.php?id=$id");
				else
				{
					echo"<script>alert('Your Verification check is pending from the admin.');
					window.location = 'login.php';
					</script>";
				}
	   		}
		
		}
    	else
    	{
			echo"<script>alert('Please enter correct credentials');
			window.location = 'login.php';
			</script>";
    	}
		
	}
	*/
	

	
















	
?>