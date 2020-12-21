<?php


require_once('db.php');

if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}



function validateUser($user){

    $conn = getConnection();
    $sql = "select * from admin where username='{$user['username']}' and password='{$user['password']}'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row > 0){
        return true; 
    }else{
        return false;
    }
}

?>