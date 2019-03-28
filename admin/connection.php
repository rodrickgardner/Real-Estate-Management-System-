<?php

//database connection information
//$host="127.0.0.1:3306";
$host="localhost";
$user="root";
$password="";
$dbs="property";
$db=mysqli_connect($host, $user, $password) or die(mysqli_error());
mysqli_select_db($db,$dbs);
?>