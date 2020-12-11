<?php 
include "function.php";
$table="firm";
$conn=connect();
$firm_name = $_POST["firm_name"];
$firm_username = $_POST["firm_username"];
$firm_description = $_POST["firm_description"];
get_data_add($firm_name,$firm_username,$firm_description,$table);
header("Location: index.php");


?>