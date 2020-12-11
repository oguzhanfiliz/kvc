<?php

function connect(){

    $conn= mysqli_connect("localhost","root","","dbtest");
    mysqli_set_charset($conn,"UTF8");
    if (mysqli_connect_errno()){
        echo "Connection error ";
        echo "Error content" . mysqli_connect_error();
        die();
    }else{
        return $conn;
    }

}
function connClose(){
    $connClose=connect();
    return mysqli_close($connClose);
}
function listView($table){
    $conn = connect();
    $data = mysqli_query($conn,"SELECT * FROM $table ");
    return $data;
}
function get_data_add($firm_name="",$firm_username="",$firm_description="",$table){
    $conn = connect();
    $sql =  mysqli_query($conn,"INSERT INTO $table (firm_name,firm_username,firm_description) values('$firm_name','$firm_username','$firm_description')");


    return $sql;
}
function delete ($firm_id,$table){
    $conn=connect();
    $data = mysqli_query($conn,"DELETE FROM $table where firm_id = $firm_id");
    header("Location: index.php");
    return $data;
}
function updatelist($id,$table){
    $conn = connect();
    $data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM $table where firm_id=$id "));
    return $data;
}
function update($firm_id,$firm_name,$firm_username,$firm_description,$table){
    $conn = connect();
    $data = mysqli_fetch_assoc(mysqli_query($conn,"UPDATE $table set firm_name='$firm_name',firm_username='$firm_username',firm_description='$firm_description' where firm_id = '$firm_id'"));
    header("Location: index.php");
    return $data;
}



?>