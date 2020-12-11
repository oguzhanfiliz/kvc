<?php 
include "function.php";
$conn=connect();
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$firm_id = $_POST["firm_id"];
get_data_add($username,$password,$email,$firm_id);
header("Location: index.php");


?>