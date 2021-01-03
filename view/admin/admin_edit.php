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
                    <li><a href="admin_add_support.php">Add Support</a></li>
                    <li><a href="admin_check_payment history.php">Check Payment History</a></li>
                    <li><a href="admin_link_bank.php">Link Bank</a></li>
                    <li><a href="admin_chat.php">Chat</a></li>
                   <!-- <li><a href="profile_change_pic.php">Change Profile Picture</a></li>-->
                   <!-- <li><a href="profile_change_pas.php">Change Password</a></li>-->
                    <li><a href="../logout.php">Log Out</a></li>
                </ul>             
            </td>
            <td>
            <h1 align='center'>Edit Profile</h1>
            
    <center>
        <form method="POST" action="../../php/admin/ad_editprofile_Check.php" onsubmit='return updateUser()'>
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" id="a_u_name"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" id='a_u_email' onkeyup="checkEmailUniqe()"></td>
                        <td width="100px" style="color: red;">
                            <div id="emailDiv">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name='user_name' id='a_u_username' onkeyup="checkUsenameUniqe()"></td>
                        <td width="100px" style="color: red;">
                            <div id='usernameDiv'>

                            </div>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" id="a_u_pass"></td>
                    </tr>
                    <tr>
                        <td>Confirm password</td>
                        <td><input type="password" name="con_pas" id="a_u_conpass"></td>
                    </tr> -->
                    
                    <tr>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Update User">
                            <button type="reset">Reset</button>
                        </td>

                    </tr>
                    
                </table>
        </form>
							
							
				</h1>
							
							
				</h1>
            </td>
        </tr>
    </table>
    <script type='text/javascript' src="../../js/admin/a_update.js"></script>
</body>
</html>

<?php

    if(isset($_SESSION['edi_msg']))
    {

        if($_SESSION['edi_msg'] == 'Registraion Complete')
        {
            echo '<script language="javascript">alert("User information chnged.")</script>';
        }

        elseif($_SESSION['edi_msg'] == 'Fill Up the Form')
        {
            echo '<script language="javascript">alert("Fill Up the Form.")</script>';
        }

        elseif($_SESSION['edi_msg'] == 'SQL error')
        {
            echo '<script language="javascript">alert("SQL error.")</script>';
        }
        


    
        unset($_SESSION['edi_msg']);
    }
    

?>
<?php
    include_once('../footer.php');
?>