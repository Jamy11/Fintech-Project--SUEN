<?php

    session_start();
    if(isset($_POST['submit']))
    {
        if(isset($_POST['logche']))
        {
            if(!empty($_POST['logun']) && !empty($_POST['logp']))
            {
                // agent
                if($_POST['user'] == 'Agent')
                {
                    $myfile = fopen('agent.txt', 'r');
                    while($data = fgets($myfile))
                    {
                        $test = explode(" ",$data);
                       
                       if($_POST['logun'] == $test[2] && $_POST['logp'] == $test[3] )
                       {
                        setcookie('active','true',time()+3600,'/');
                        $_SESSION['name'] = $test[0];
                        $_SESSION['email'] = $test[1];
                        $_SESSION['username'] = $test[2];
                        $_SESSION['password'] = $test[3];
                        $_SESSION['gender'] = $test[4];
                        $_SESSION['dob'] = $test[5];
                        $_SESSION['accType'] = $test[6];

                        header('location: ../view/agent.php');
                        exit();
                        }
                    }
                    header('location: ../view/login.php?msg=wrong_user');
                }


                // client
                elseif($_POST['user'] == 'Client')
                {
                    $myfile = fopen('client.txt', 'r');
                    while($data = fgets($myfile))
                    {
                        $test = explode(" ",$data);
                       
                       if($_POST['logun'] == $test[2] && $_POST['logp'] == $test[3] )
                       {
                        setcookie('active','true',time()+3600,'/');
                        $_SESSION['name'] = $test[0];
                        $_SESSION['email'] = $test[1];
                        $_SESSION['username'] = $test[2];
                        $_SESSION['password'] = $test[3];
                        $_SESSION['gender'] = $test[4];
                        $_SESSION['dob'] = $test[5];
                        $_SESSION['accType'] = $test[6];

                        header('location: ../view/client.php');
                        exit();
                        }
                    }
                    header('location: ../view/login.php?msg=wrong_user');
                }

                else
                {
                    header('location: ../view/login.php?msg=type');
                }

            }


            else
            {
                header('location: ../view/login.php?msg=Fill');
            }
        }
        
        
        // Session login
        else
        {
            if(!empty($_POST['logun']) && !empty($_POST['logp']))
            {
                // agent
                if($_POST['user'] == 'Agent')
                {
                    $myfile = fopen('agent.txt', 'r');
                    while($data = fgets($myfile))
                    {
                        $test = explode(" ",$data);
                       
                       if($_POST['logun'] == $test[2] && $_POST['logp'] == $test[3] )
                       {
                        $_SESSION['active']= 'true';
                        $_SESSION['name'] = $test[0];
                        $_SESSION['email'] = $test[1];
                        $_SESSION['username'] = $test[2];
                        $_SESSION['password'] = $test[3];
                        $_SESSION['gender'] = $test[4];
                        $_SESSION['dob'] = $test[5];
                        $_SESSION['accType'] = $test[6];

                        header('location: ../view/agent.php');
                        exit();
                        }
                    }
                    header('location: ../view/login.php?msg=wrong_user');
                }


                // client
                elseif($_POST['user'] == 'Client')
                {
                    $myfile = fopen('client.txt', 'r');
                    while($data = fgets($myfile))
                    {
                        $test = explode(" ",$data);
                       
                       if($_POST['logun'] == $test[2] && $_POST['logp'] == $test[3] )
                       {
                        $_SESSION['active']= 'true';
                        $_SESSION['name'] = $test[0];
                        $_SESSION['email'] = $test[1];
                        $_SESSION['username'] = $test[2];
                        $_SESSION['password'] = $test[3];
                        $_SESSION['gender'] = $test[4];
                        $_SESSION['dob'] = $test[5];
                        $_SESSION['accType'] = $test[6];

                        header('location: ../view/client.php');
                        exit();
                        }
                    }
                    header('location: ../view/login.php?msg=wrong_user');
                }
                else
                {
                    header('location: ../view/login.php?msg=type');
                }

            }


            else
            {
                header('location: ../view/login.php?msg=Fill');
            }
        }
        
    }
    else
    {
       header('location: ../view/login.php');
    }

?>