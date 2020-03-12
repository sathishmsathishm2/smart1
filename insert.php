<?php
require_once("end/db.php");

$id = $_POST['id'];
$name = $_POST['name'];
$password= $_POST['password'];
$city=$_POST['city'];
$status=$_POST['status'];

// $sql = "INSERT INTO employee(`name`, `password`,`city`,`status`) values('$name','$password', '$city','$status')";

// $res = mysqli_query($con,$sql);
// //echo $sql; exit();

// if($res == 1) {
//     echo "inserted";
// } else {
//     echo "Failed...";
// }


//  $sql1 = "UPDATE `employee` SET `name`='santhosi' WHERE `id`= 4";

//  $res1 = mysqli_query($con,$sql1);
// // //echo $sql; exit();

//  if($res1 == 1) {
//     echo "updated";
//  } else
//   {     echo "Failed...";
//  }


$sql2 = "DELETE FROM `employee` WHERE `id`=3";

$res2= mysqli_query($con,$sql2);
//echo $sql; exit();

if($res2 == 1) {
    echo "DELETED";
} else {
    echo "Failed...";
}






?>