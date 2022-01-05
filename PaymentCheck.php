<?php
//index.php

include"dbconfig.php";

if(isset($_SESSION['id']))
{

$query1 = "SELECT * FROM user_registration where id=".$_SESSION['id']."";
$query="SELECT * FROM booking ";
$result=select($query);
$result1 = select($query1);

}
else{
  header("location:UserLogin.php");
  
}


while($p=mysqli_fetch_array($result1))
{
    extract($p);
}

while($p1=mysqli_fetch_array($result))
{
    extract($p1);
}

?>






<!doctype html>
<html>
<head>
<title>Payment Gateway Integration </title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div class="container" style="padding-top:100px;">
    <div class="col-xs-6 col-xs-offset-3">
        <div class="panel panel-default">
            <div style="background-color: #000000; color:#fff" class="panel-heading">
                <h3 class="text-center">Utility Service Provider Payment Gateway</h3>
            </div>
            <div class="panel-body">
            <form action="paytm/pgRedirect.php" method="post">
				<input type="hidden" id="CUST_ID" name="CUST_ID" value="CUST001">
					<input type="hidden" id="INDUSTRY_TYPE_ID" name="INDUSTRY_TYPE_ID" value="Retail">
					<input type="hidden"  id="CHANNEL_ID" name="CHANNEL_ID" value="WEB">
                <div class="form-group">
					
					<label>Order ID:</label>
                    <input type="text" class="form-control" id="ORDER_ID" name="ORDER_ID" size="20" maxlength="20" autocomplete="off"

tabindex="1" value="<?php echo  "ORDER" . rand(10000,99999999)?>" readonly="readonly">
                </div>

                <div class="form-group">
	                <label>Customer Name:</label>
                    <input type="text" class="form-control" id="name" name="name" size="20" maxlength="20" autocomplete="off" tabindex="5" 
                    value="<?=ucwords($name)?>" readonly="readonly">
                </div>

                <div class="form-group">
                    <label>Customer Email:</label>
                    <input type="text" class="form-control" id="email" name="email" size="50" maxlength="50" autocomplete="off" tabindex="5" 
                    value="<?=$email?>" readonly="readonly">
                </div>

                
                
                
               




                <div class="form-group">
					<label>Amount to Pay:</label>
                    <input type="text" class="form-control" id="TXN_AMOUNT" name="TXN_AMOUNT" autocomplete="off" tabindex="5" 

value="20">
                </div>
                <div class="form-group">
                   
                   
                    <input type="submit" name="submit" value="CheckOut" class="btn btn-success btn-lg" style="background-
color:#0000FF; margin-left: 39%;" enabled>
                    
                    

                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>