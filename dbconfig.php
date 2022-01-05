<?php

session_start();


define("server","localhost:3307");
define("user","root");
define("password","");
define("database","test");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function iud($query)
{
	$cid=mysqli_connect(server,user,password,database) or die("connection error");
	$result=mysqli_query($cid,$query);
	$n=mysqli_affected_rows($cid);
	mysqli_close($cid);
	return $n;
}
		
function select($query)
{
	$cid=mysqli_connect(server,user,password,database) or die("connection error");
	$result=mysqli_query($cid,$query);
	mysqli_close($cid);
	return $result;
}

function sencha($iidd)

{
	$cid=mysqli_connect(server,user,password,database) or die("connection error");
	// echo $iidd;
	$query="select * from booking where book_id='$iidd' ";
	$result = mysqli_query($cid,$query);
	// echo $result;
	$array = mysqli_fetch_assoc($result);
	// print_r($array['status']);
	

	// echo "$\jjnt";
	$senchaop=$array['status'];
	$senchaop1=$array['cancel'];
	return array($senchaop,$senchaop1);

}

function forgot($idd)
{
	$cid=mysqli_connect(server,user,password,database) or die("connection error");
	$query="select * from user_registration where email='$idd' ";
	$result = mysqli_query($cid,$query);
	$array = mysqli_fetch_assoc($result);
	// print_r($array);
	$senchaop=$array['email'];
$pompu=0;
	if(mysqli_num_rows($result)==1)
	{
		$pompu=1;
	}

	
	return array($senchaop,$pompu);


}

function tokenba($emaill,$reset_token)
{
	$reset_token=bin2hex(random_bytes(16));
	date_default_timezone_set('Asia/kolkata');
	$date=date("Y-m-d");
	$cid=mysqli_connect(server,user,password,database) or die("connection error");
	$query="UPDATE `user_registration` SET `resettoken`='$reset_token' ,`resettokenexpire`='$date' WHERE 'email'='$emaill'";
	$result = mysqli_query($cid,$query);
	// print_r($result);
	return $result;
}

function tokenmeow($emaill,$rt)
{
	//print_r($rt);
	date_default_timezone_set('Asia/kolkata');
	$date=date("Y-m-d");
	$query="SELECT * from user_registration WHERE email='$emaill' AND resettoken='$rt' ";


	// $reset_token=bin2hex(random_bytes(16));
	// date_default_timezone_set('Asia/kolkata');
	// $date=date("Y-m-d");
	$cid=mysqli_connect(server,user,password,database) or die("connection error");
	// $query="UPDATE `user_registration` SET `resettoken`='$reset_token' ,`resettokenexpire`='$date' WHERE 'email'='$emaill'";
	$result = mysqli_query($cid,$query);
	$pompu=0;
	if(mysqli_num_rows($result)==1)
	{
		$pompu=1;
	}
	// print_r($result);
	return array($result,$pompu);
}



function sendmail($email, $reset_token)
{

	//print_r("uuiuiuiuiu");
	//print_r($reset_token);

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $mail = new PHPMailer(true);
	// print_r($mail);

    try 
    {
        //Server settings
		//$mail->SMTPDebug = 2;
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'utilityserviceprovider@gmail.com';                     //SMTP username
        $mail->Password   = '1234Abcd';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENC
    

		// print_r($email);
        //Recipients
        $mail->setFrom('utilityserviceprovider@gmail.com', 'UTILITY SERVICE PROVIDER');
        $mail->addAddress($email);     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
		//print_r($mail);
        $mail->Subject = 'Password reset link from UTILITY SERVICE PROVIDER';
        $mail->Body    = "we got a reset requset from you to reset your password <br>
          Click the link below : <br>
          <a href='http://localhost/DATABASE_INSERTION_DEMO/UserUpdatePassword.php?email=$email&reset_token=$reset_token'>
            Reset Password Link
          </a>";

		  //print_r("smtp bolne lagi");

    
        $mail->send(); 
        return true;
    } 
    catch (Exception $e) 
    {
        return false;
    }


}




?>
	