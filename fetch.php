<?php

$conn = mysqli_connect("localhost:3307", "root", "", "registration_demo");

if($conn === false){
  die("ERROR: Could not connect. " 
      . mysqli_connect_error());
}
echo "connected";

$query = mysqli_query($conn, "SELECT * FROM registration");
     while ($row = mysqli_fetch_array($query)) {     
		
      	echo "<img src='saved_image/".$row['id_picture']."' >";
     }  