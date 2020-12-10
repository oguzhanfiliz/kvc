<?php 
include "function.php";
$conn=connect();
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
get_data_add($username,$password,$email);
header("Location: index.php");


?>