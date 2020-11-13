<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
</head>
<body>
    <h1 align='center'>Log-In</h1>
    <center>
        <form method='POST' action="logincheck.php">
            <table align="center">
                <tr>
                    <td>User-Name:</td>
                    <td><input type="text" name="logun" id=""></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="logp" id=""></td>
                </tr>
                
                <tr>
                    <hr>
                    <td colspan="2"> <input type="checkbox" name="logche" id=""> Remember me</td>
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