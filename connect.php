<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$Username = $_POST['Username'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['pass'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `username`, `email`, `phone`, `password`) 

VALUES ('0', '$Username', '$email', '$phone', '$pass')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Registration details recieved";
}

?>