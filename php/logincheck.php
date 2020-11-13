<?php

    session_start();
    if(isset($_POST['submit']))
    {

        $logun = $_POST['logun'];
        $logpas = $_POST['logp'];
        if(!empty($logun) && !empty($logpas))
        {
            if($logun == $_SESSION['un'] && $logpas== $_SESSION['password'])
            {
                // $_SESSION['active'] = 'true';
                // header('location: profile_dash.php');
            }
            else
            {
                header('location: ../view/login.php?msg=invalid_user');
            }
        }
        else
        {
            header('location: ../view/login.php?msg=Fill');
        }

    }
    else
    {
       header('location: ../view/login.php');
    }

?>