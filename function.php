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

?>