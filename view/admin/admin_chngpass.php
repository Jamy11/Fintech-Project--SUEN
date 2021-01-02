<?php
  if (session_status() == PHP_SESSION_NONE) 
  {
      session_start();
  }
    if(isset($_SESSION['login']) || isset($_COOKIE['login']))
    {
        include_once('admin_header.php');
    }
    else
    {
        header('location: adminlogin.php');
        exit;
    }
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
            <!--  -->
            <td>
                <h1 align="center">Change Password<br/></h1>
                <center>
                    <form method="POST" action="../../php/admin/ad_chngpass.php" onsubmit="return passCheck()"> 
                        <table>
                            <tr>
                                <td>Old Password</td>
                                <td><input type="password" name="old_pass" id="old_pass"></td>
                            </tr>
                            <tr>
                                <td>New Password</td>
                                <td><input type="password" name="new_pass" id="new_pass"></td>
                            </tr>
                            <tr>
                                <td>Confirm password</td>
                                <td><input type="password" name="con_pass" id="con_pass"></td>
                            </tr>
                           
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" id="submit">
                                    <button type="reset">Reset</button>
                                </td>

                            </tr>
                            
                        </table>
                    </form>
                </center>
							
				</h1>
            </td>
        </tr>
    </table>
    <script type='text/javascript' src="../../js/admin/a_chngpass.js"></script>
</body>
</html>


<?php

    if(isset($_SESSION['pass_error']))
    {

        if($_SESSION['pass_error'] == 'Dont Match')
        {
            echo '<script language="javascript">alert("Password dont match.")</script>';
        }

        elseif($_SESSION['pass_error'] == 'Old Pass dont match')
        {
            echo '<script language="javascript">alert("Old password dont match.")</script>';
        }

        elseif($_SESSION['pass_error'] == 'Fill the form.')
        {
            echo '<script language="javascript">alert("Fill the form.")</script>';
        }

        elseif($_SESSION['pass_error'] == 'Sql Error.')
        {
            echo '<script language="javascript">alert("Sql Error.")</script>';
        }
        


    
        unset($_SESSION['pass_error']);
    }
    

?>

<?php
    include_once('../footer.php');
?>