<?php 
include "function.php";
$conn=connect();
$id = $_GET["id"];
delete($id);
echo $id ;
?>