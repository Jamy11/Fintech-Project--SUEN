<?php
      if (session_status() == PHP_SESSION_NONE) 
      {
          session_start();
      }
      if(isset($_COOKIE['login']))
      {
          header('location: admin.php');
          exit;
      }
      include_once('admin_header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log-in</title>
</head>
<body>
    <h1 align='center'>Admin Log In</h1>
    <center>
        <form method='POST' action="../../php/admin/adminlogin_Check.php" onsubmit='return loginValidation()'>

            <fieldset style="width:300px">
                <legend>Log In</legend>
                
                <table >
                        <tr>
                            <td>User-Name:</td>
                            <td><input type="text" name="admin_uname" id="admin_uname" ></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" name="admin_pass" id="admin_pass"></td>
                        </tr>
                        

                        <tr>
                            <hr>
                            <td colspan="2"> <input type="checkbox" name="admin_loginCheck" id="admin_loginCheck"> Remember me</td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value='Submit'>
                                <a href="forgetpassword.php">Forget Password</a>

                            </td>
                        </tr>
                    </table>
            
            </fieldset>
            
        </form>
    </center>
    <script type='text/javascript' src="../../js/admin/a_script.js"></script>
</body>
</html>


<?php

    if(isset($_SESSION['login_er']))
    {
        if( $_SESSION['login_er'] == 'nodata')
        {
            echo '<script language="javascript">alert("User does not exists.")</script>';
        }

        elseif($_SESSION['login_er'] == 'fill')
        {
            echo '<script language="javascript">alert("Fill the from.")</script>';
        }
    
        unset($_SESSION['login_er']);
    }
    

?>

<?php
    include_once('../footer.php');
?>