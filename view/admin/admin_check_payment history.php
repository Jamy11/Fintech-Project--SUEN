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
                <h3 align="center">Payment History </h3>


                <center>
                    <form method="POST" action="">
                            <table>
                                <tr>
                                    <td>User Name</td>
                                    <td><input type="text" name="search" id=""></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" name="submit" id="" value='Search User History'>
                                        <button type="reset">Reset</button>
                                    </td>
                                    <?php
                                        if(isset($_POST['submit']))
                                        {
                                            $myfile = fopen('C:\xampp\htdocs\SUEN\php\admin\payment.txt', 'r');

                                            echo '<table border=2px>';
                                            while($data = fgets($myfile))
                                            {  
                                                $checkData = explode(" ",$data);
                                                if($_POST['search'] == $checkData[0] || $_POST['search'] == $checkData[2])
                                                {
                                                    echo '<tr>';
                                                    for($i=0;$i<4;$i++)
                                                    {
                                                        echo '<td>'.$checkData[$i] .'</td>';
                                                        
                                                    }
                                                    echo '</tr>';
                                                }
                                                
                                            }
                                            echo '</table>';
                                        }
                                        else
                                        {
                                        }
                                    ?>
    


                                </tr>
                                
                            </table>
                    </form>
                </center>
							
							
				</h1>
            </td>
        </tr>
    </table>
</body>
</html>