<?php 
include "function.php";
$conn=connect();
$table="firm";
$firm_name = $_POST["firm_name"];
$firm_username = $_POST["firm_username"];
$firm_description = $_POST["firm_description"];
$firm_id = $_POST["firm_id"];
update($firm_id,$firm_name,$firm_username,$firm_description,$table);


?>