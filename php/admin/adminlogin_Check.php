<?php

    require_once('../../models/userService.php');


    if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }


    if(isset($_POST['submit']))
    {

        $uname 	= $_POST['admin_uname'];
		$pass 	= $_POST['admin_pass'];
        
        if( !empty($uname) && !empty($pass))
        {
            
            $user = ['username'=> $uname, 'password'=>$pass];
			$status = validateUser($user);

            if($status)
            {
                $_SESSION['admin_username'] = $uname;

                if(isset($_POST['admin_loginCheck']))
                {
                    setcookie('login', $_POST['admin_uname'], time()+60*60*10,'/');
                }
                else
                {
                    $_SESSION['login'] = 'true';
                }
				
                header('location: ../../view/admin/admin.php');
                exit;
            }
            else
            {
                $_SESSION['login_er'] = 'nodata';
				header('location: ../../view/admin/adminlogin.php');
			}
               
        }
        else
        {
            header();
        }
    }
    else
    {
       header("location: ../../view/admin/adminlogin.php");
       exit;

    }

?>