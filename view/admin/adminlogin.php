

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
        <form method='POST' action="../php/logincheck.php">
            <table align="center">
                <tr>
                    <td>User-Name:</td>
                    <td><input type="text" name="adun" id=""></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="adgp" id=""></td>
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

<center>
<?php
    if(isset($_GET['msg']))
    {
        if($_GET['msg'] == 'invalid_user')
        {
            echo '<h1>Invalid User<h1>';
        } 
        elseif($_GET['msg'] == 'Fill')
        {
            echo '<h1>Fill the form<h1>';
        } 
        elseif($_GET['msg'] == 'wrong_user')
        {
            echo '<h1>Wrong user<h1>';
        }
        else
        {
            echo "Select Type";
        }
    }
?>
</center>
