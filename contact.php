<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','portfolio');

// get the post records
$message = $_POST['message'];
$name = $_POST['name'];
$email = $_POST['email'];

// database insert SQL code
$sql = "INSERT INTO `contact` (`id`, `message`, `name`, `email`) VALUES ('0', '$message', '$name', '$email')";

// insert in database 
$rs = mysqli_query($con, $sql);
//if($rs)
//{
//	echo "Your contact record has been inserted succesfully!";
//}
?>