<?php

    session_start();
    if(isset($_POST['submit']))
    {

        $logun = logincheck($_POST['logun']);
        $logpas = $_POST['logp'];
        $user = $_POST['user'];
        echo 'jamy'.$logun.'j';
        // if(!empty($logun) && !empty($logpas))
        // {
        //     if($logun == $_SESSION['un'] && $logpas== $_SESSION['password'])
        //     {

        //         // $_SESSION['active'] = 'true';
        //         // header('location: profile_dash.php');
        //     }
        //     else
        //     {
        //         header('location: ../view/login.php?msg=invalid_user');
        //     }
        // }
        // else
        // {
        //     header('location: ../view/login.php?msg=Fill');
        // }

    }
    else
    {
       header('location: ../view/login.php');
    }

?>

<?php

 function logincheck($logcheckun)
 {
     if(!empty($_POST['logun']))
     {
        $logcheckun = $_POST['logun'];
     }
     else
     {
        $logcheckun ='';
     }
     return $logcheckun;
 }


?>
