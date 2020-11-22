<?php


    if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }


    if(isset($_POST['submit']))
    {
        
        if( !empty($_POST['logun']) && !empty($_POST['logp']))
        {
            $myfile = fopen('user.txt', 'r');

            while($data = fgets($myfile))
            {
                $test = explode(" ",$data);
               
               if($_POST['logun'] == $test[2] && $_POST['logp'] == $test[3] )
               {
                
                    if(isset($_POST['logche']))
                    {
                        setcookie('ulogin', $_POST['logun'], time()+60*60*10,'/');
                    }
                    else
                    {
                        $_SESSION['ulogin'] = 'true';
                    }

                    $_SESSION['uName'] = $test[0];
                    $_SESSION['uEmail'] = $test[1];
                    $_SESSION['uUsername'] = $test[2];
                    $_SESSION['uPas'] = $test[3];
                    $_SESSION['uGen'] = $test[4];
                    $_SESSION['uDate'] = $test[5];
                    $_SESSION['uType'] = $test[6];

                    if($test[6]=='Client')
                    {
                        header("location: ../view/client.php");
                        //header("location: ../view/agent.php");
                        exit;
                    }
                    else
                    {
                        echo 'agent';
                        header("location: ../view/agent.php");
                        exit;
                    }

               
               }
               echo 'No data';
               exit;
            }

        header("location: ../index.html");
        exit;
        }
        else
        {
            header("location: ../index.html");
            exit;
        }
           
        
    }
    else
    {
       header('location: ../view/login.php');
    }

?>