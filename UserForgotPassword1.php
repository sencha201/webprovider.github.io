<?php

require("dbconfig.php");







if(isset($_POST['send-reset-link']))
{
    $email=trim($_REQUEST['email']);

    $resultxy= forgot($email);
    //echo $resultxy[0];

    if($resultxy[0])
    {
        if($resultxy[1]==1)
        {
            $reset_token=bin2hex(random_bytes(16));
            // date_default_timezone_set('Asia/kolkata');
            // $date=date("y-m-d");
            // $query="UPDATE `user_registration` SET `resettoken`='$reset_token' ,`resettokenexpire`='$date' WHERE 'email'='$_POST[email]'";
            $yoyosenchu=tokenba($email,$reset_token);
            //print_r($yoyosenchu);
            //print_r($reset_token);
            $s1=$_POST['email'];
            $checkop=sendmail($s1,$reset_token);
            //print_r($checkop);

            if($yoyosenchu && $checkop)
            {
                print_r("function chalne lagi");

                echo"
                <script>
                alert('Password Reset link sent to mail');
                window.location.href='UserForgotPassword.php';
                </script>";     

            }
            else
            {
                /*
                echo"
                <script>
                alert('Server Down ! Try again later');
                window.location.href='UserForgotPassword.php';
                </script>";  
                */   

            }

        }
        else
        {/*
            echo"
            <script>
            alert('Email Not found');
            window.location.href='UserForgotPassword.php';
            </script>";   
            */  
        }
       
       //$yoyosenchu=tokenba($email);

       
       
       
   

    }
    else{
        echo"
        <script>
        alert('email id not exist');
        window.location.href='UserForgotPassword.php';
        </script>";
    }








    /*
    $result=mysqli_query($cid,$query);
    if($result)
    {
        echo "run";


    }
    else{
        echo"
        <script>
        alert('cannot run query');
        window.location.href='UserForgotPassword.php';
        </script>";
    }
    */






}


?>