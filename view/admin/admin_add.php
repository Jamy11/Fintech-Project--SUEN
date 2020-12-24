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
            <h1 align='center'>Registration</h1>
            <!-- method="POST" action="../../php/admin/adRegistrationCheck.php" -->
            <!-- onsubmit='return formValidation()' -->
    <center>
        <form id='form'>
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" id="ad_add_name"></td>
                        
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" id='ad_add_email' onkeyup='checkAddEmail()'></td>
                        <td id='emailDiv'>
                        </td>
                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name='user_name' id='ad_add_username'></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" id="ad_add_password"></td>
                    </tr>
                    <tr>
                        <td>Confirm password</td>
                        <td><input type="password" name="con_pas" id="ad_add_con_pas"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>Gender</legend>
                                <input type="radio" name="gen" id="ad_add_gen1" value="Male">Male
                                <input type="radio" name="gen" id="ad_add_gen2" value="Female">Female
                                <input type="radio" name="gen" id="ad_add_gen3" value="Other">Other
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>Date Of Birth</legend>
                                <input type="date" name="dob" id="ad_add_dob">
                            </fieldset>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="button" name="submit" value='Submit' onclick='return formValidation()'>
                            <button type="reset">Reset</button>
                        </td>

                    </tr>
                    
                        <div id='msg'>
                        </div>
                    
                    
                </table>
        </form>
							
							
				</h1>
            </td>
        </tr>
    </table>
    <script type='text/javascript' src="../../js/admin/a_add.js"></script>
</body>
</html>

<!-- <?php

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
    

?> -->

<?php
    include_once('../footer.php');
?>