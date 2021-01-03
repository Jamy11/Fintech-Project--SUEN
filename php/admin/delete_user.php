<?php

require_once('../../models/userService.php');
$value = $_GET['msg'];

$status = deleteUser($value);

    if($status)
    {
        $_SESSION['dlt_msg_user']= 'User Deleted';
        header("location: ../../view/admin/admin_user_list.php");
        exit;
    }
    else
    {
        echo 'error';
    }
?>