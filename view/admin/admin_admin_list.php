<?php
    if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }

    define('MyAdmin', TRUE);
    
    if(isset($_SESSION['login']) || isset($_COOKIE['login']))
    {
        include_once('admin_header.php');
    }
    else
    {
        header('location: adminlogin.php');
        exit;
    }
    require_once('../../models/userService.php');
    $userlist = getAllUser();
?>

<?php
    include_once('../../php/admin/ad_adminList_Check.php');
?>

<!DOCTYPE html>
<html>
<head>
   
    <title>home</title>
</head>
<body>
    <table align="center" width='60%' border="1"  cellpadding="0" cellspacing="0" >
        <tr>
            <td>
                <h3 align="center">Admin</h3>
                <hr>
                <ul>
                    <li><a href="admin.php">Admin Dashboard</a></li>
                    <li><a href="admin_edit.php">Edit Profile</a></li>
                    <li><a href="admin_chngpass.php">Change Password</a></li>
                    <li><a href="admin_add.php">Add Admin</a></li>
                    <li><a href="admin_user_list.php">User List</a></li>
                    <li><a href="admin_admin_list.php">Admin List</a></li>
                    <li><a href="admin_support_list.php">Support List</a></li>
                    <li><a href="admin_user_request.php">User Request</a></li>
                    <li><a href="admin_change_user_details.php">Change User Details</a></li>
                    <li><a href="admin_deactivate_user.php">Deactivate User</a></li>
                    <li><a href="admin_delete_user.php">Delete User</a></li>
                    <li><a href="admin_add_support.php">Add Support</a></li>
                    <li><a href="admin_check_payment history.php">Check Payment History</a></li>
                    <li><a href="admin_link_bank.php">Link Bank</a></li>
                    <li><a href="admin_chat.php">Chat</a></li>
                    <li><a href="admin_contact_user.php">Contact Users</a></li>
                   <!-- <li><a href="profile_change_pic.php">Change Profile Picture</a></li>-->
                   <!-- <li><a href="profile_change_pas.php">Change Password</a></li>-->
                    <li><a href="../logout.php">Log Out</a></li>
                </ul>             
            </td>
            <td>
                <h1>Admin List</h1>
                <table border="1"> 
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Username</td>
                    <td>Gender</td>
                    <td>Date Of Birth</td>
                    <td>User Type</td>
                    <td>Delete</td>
                    <td>Edit</td>
                </tr>

                <?php for($i=0; $i< count($userlist); $i++){ 
                    $un = $userlist[$i]['username'];
                    ?>

                    <tr>
                        <td><?=$userlist[$i]['name']?></td>
                        <td><?=$userlist[$i]['email']?></td>
                        <td><?=$userlist[$i]['username']?></td>
                        <td><?=$userlist[$i]['gender']?></td>
                        <td><?=$userlist[$i]['dob']?></td>
                        <td><?=$userlist[$i]['user_type']?></td>
                        <td><a href="edit.php?msg=<?php echo urlencode($un)?>">Edit</a></td>
                        <td><a href="../../php/admin/delete.php?msg=<?php echo urlencode($un)?>">Delete</a></td>
                    </tr>
                    
                <?php } ?>

                </table>    
							
							
				</h3>
            </td>
        </tr>
    </table>
</body>
</html>
<?php

    if(isset($_SESSION['dlt_msg']))
    {

        if($_SESSION['dlt_msg'] == 'User Deleted')
        {
            echo '<script language="javascript">alert("User Deleted.")</script>';
        }
    
    
        unset($_SESSION['dlt_msg']);
    }
?>
<?php
    include_once('../footer.php');
?>