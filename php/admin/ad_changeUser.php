<?php
require_once('../../models/userService.php');

$username = $_GET['msg'];
$active_status = $_GET['status'];

if($active_status =='0')
{
    $active_status = 'Active';
}
else{
    $active_status = 'Deactive';
}

$user = ['username'=>$username , 'active_status'=>$active_status];

$status = changeActivestatusUser($user);

    if($status)
    {
        $_SESSION['chng_msg_user']= 'Changed';
        header("location: ../../view/admin/admin_user_list.php");
        exit;
    }
    else
    {
        echo 'error';
    }
?>