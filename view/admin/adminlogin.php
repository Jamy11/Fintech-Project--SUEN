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
        <form method='POST' action="../../php/admin/adminlogin_Check.php">
            <table align="center">
                <tr>
                    <td>User-Name:</td>
                    <td><input type="text" name="adun" id="aduname" ></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="adp" id="adpass"></td>
                </tr>
                

                <tr>
                    <hr>
                    <td colspan="2"> <input type="checkbox" name="adche" id=""> Remember me</td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value='Submit'>
                        <a href="forgetpassword.php">Forget Password</a>

                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if(isset($_COOKIE['uname']) && isset($_COOKIE['pass']))
		{
			$uname=$_COOKIE['uname'];
			$pass=$_COOKIE['pass'];
			echo "<script>
				document.getElementById('aduname').value = '$uname';
				document.getElementById('adpass').value = '$pass'; 
			</script>";
		}
?>

<center>
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
