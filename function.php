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
    $data = mysqli_query($conn,"SELECT  * FROM $table left join firm on user.firma_id = firm.firm_id  ");
    return $data;
}
function listFirm($table){
    $conn = connect();
    $data = mysqli_query($conn,"SELECT * FROM $table ");
    return $data;
}
function get_data_add($username="",$password="",$email="",$firma_id){
    $conn = connect();
    $sql =  mysqli_query($conn,"INSERT INTO user (username,pas,email,firma_id) values('$username','$password','$email','$firma_id')");
  
    return $sql;
}
function delete ($id){
    $conn=connect();
    $data = mysqli_query($conn,"DELETE FROM user where id = $id");
    header("Location: index.php");
    return $data; 
}
function updatelist($id){
    $conn = connect();
    $data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM user where id=$id "));
    return $data;
}
function update($id,$username,$pas,$email,$firma_id){
    $conn = connect();
    $data = mysqli_fetch_assoc(mysqli_query($conn,"UPDATE user set username='$username',pas='$pas',email='$email',firma_id='$firma_id' where id = '$id'"));
    header("Location: index.php");
    return $data;
}



?>