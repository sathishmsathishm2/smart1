<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "crud";


$con =mysqli_connect($hostname,$username,$password) or die ("please enter valid  details......");
mysqli_select_db($con,$db_name) or die("Database does not exists....");



?>