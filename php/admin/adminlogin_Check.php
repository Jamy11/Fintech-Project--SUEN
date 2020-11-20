<?php

    if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }

    if(isset($_POST['submit']))
    {
        
        if( !empty($_POST['adun']) && !empty($_POST['adp']))
        {
            $myfile = fopen('admin.txt', 'r');

            while($data = fgets($myfile))
            {
                $test = explode(" ",$data);
               
               if($_POST['adun'] == $test[2] && $_POST['adp'] == $test[3] )
               {
                
                if(isset($_POST['adche']))
                {
                    setcookie('uname', $_POST['adun'], time()+60*60*10);
                    setcookie('pass', $_POST['adp'], time()+60*60*10);	
                }


                $_SESSION['login'] = 'true';
                $_SESSION['adName'] = $test[0];
                $_SESSION['adEmail'] = $test[1];
                $_SESSION['adUserame'] = $test[2];
                $_SESSION['adPas'] = $test[3];
                $_SESSION['adGen'] = $test[4];
                $_SESSION['adDate'] = $test[5];
                $_SESSION['adType'] = $test[6];

                header("location: ../../view/admin/admin.php");
                exit;
               }
            }

        $_SESSION['login_er'] ="nodata";
        header("location: ../../view/admin/adminlogin.php");
        exit;
        }
        else
        {
            $_SESSION['login_er'] ="fill";
            header("location: ../../view/admin/adminlogin.php");
            exit;
        }
    }
    else
    {
       header("location: ../../view/admin/adminlogin.php");
       exit;

    }

?>