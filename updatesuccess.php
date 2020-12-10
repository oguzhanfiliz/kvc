<?php 
include "function.php";
$conn=connect();
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$id = $_POST["id"];
update($id,$username,$password,$email);


?>