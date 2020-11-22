<?php

    if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }

    if(isset($_SESSION['login']))
    {

    ?>
<table width='100%'>
    <tr >
        <td>
            <img src="../asset/logo_1.png" alt="" style="width:150px;height:100px;">
        </td>
        <td align="right">
            Logged in as 
            <a href="profile_dash.php"><?php 
            
            echo $_SESSION['name'];
            ?></a>
            | <a href="logout.php">Log-Out</a>|
        </td>
    </tr>
</table>

<?php

    }
    else
    {
?>
    
    <table width='100%'>
        <tr >
            <td>
                <img src="../asset/logo_1.png" alt="" style="width:150px;height:100px;">
            </td>
            <td align="right">
                <a href="../index.html">Home</a>|
                <a href="login.php">Login</a>|
                <a href="registration.php">Registration</a>|
                <a href="support.php">Support</a>
            </td>
        </tr>
    </table>
    <hr>

<?php

}

?>