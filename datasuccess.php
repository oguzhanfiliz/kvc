<?php 
include "function.php";
$conn=connect();
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
header("Location: index.php");
get_data_add($username,$password,$email);
echo $username.$email.$password;

?>