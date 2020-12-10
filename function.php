<?php

function connect(){

    $conn= mysqli_connect("localhost","root","","login");
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
function get_data_add($username="",$password="",$email=""){
    $conn = connect();
    $sql =  mysqli_query($conn,"INSERT INTO user (username,pas,email) values('$username','$password','$email')");
  
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
function update($id,$username,$pas,$email){
    $conn = connect();
    $data = mysqli_fetch_assoc(mysqli_query($conn,"UPDATE user set username='$username',pas='$pas',email='$email' where id = '$id'"));
    header("Location: index.php");
    return $data;
}



?>