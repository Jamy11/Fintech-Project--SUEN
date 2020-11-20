<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
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
                    <li><a href="admin_add.php">Add Admin</a></li>
                    <li><a href="admin_user_list.php">User List</a></li>
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
            <h1 align='center'>Registration</h1>
    <center>
        <form method="POST" action="../../php/admin/adRegistrationCheck.php">
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" id=""></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name='user_name'></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" id=""></td>
                    </tr>
                    <tr>
                        <td>Confirm password</td>
                        <td><input type="password" name="con_pas" id=""></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>Gender</legend>
                                <input type="radio" name="gen" id="" value="Male">Male
                                <input type="radio" name="gen" id="" value="Female">Female
                                <input type="radio" name="gen" id="" value="Other">Other
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>Date Of Birth</legend>
                                <input type="date" name="dob" id="">
                            </fieldset>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" id="">
                            <button type="reset">Reset</button>
                        </td>

                    </tr>
                    
                </table>
        </form>
							
							
				</h1>
            </td>
        </tr>
    </table>
</body>
</html>

<?php

    if(isset($_SESSION['reg_msg']))
    {
        if( $_SESSION['reg_msg'] == 'User Name exists.')
        {
            echo '<script language="javascript">alert("User Name exists.")</script>';
        }

        elseif($_SESSION['reg_msg'] == 'Registraion Complete')
        {
            echo '<script language="javascript">alert("Registraion Complete.")</script>';
        }

        elseif($_SESSION['reg_msg'] == 'Fill Up the Form')
        {
            echo '<script language="javascript">alert("Fill Up the Form.")</script>';
        }

        elseif($_SESSION['reg_msg'] == 'Use Provided Link.')
        {
            echo '<script language="javascript">alert("Use Provided Link.")</script>';
        }
    
        unset($_SESSION['reg_msg']);
    }
    

?>

