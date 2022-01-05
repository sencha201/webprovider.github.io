<?php
include"dbconfig.php";


$query = select("SELECT status FROM registration");

while ($row = mysql_fetch_array($query, MYSQL_NUM)) {
    printf("ID: %s  status: %s", $row[0]);  
}

mysql_free_result($query);


?>