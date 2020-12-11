<?php 
include "function.php";
$conn=connect();
$table="firm";
$firm_id = $_GET["firm_id"];
delete($firm_id,$table);
echo $firm_id ;
?>