<?php
    include_once('../../models/userService.php');

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(isset($_POST['submit']))
    {

        
        $name='';
        if(!empty($_POST['name']))
        {
            $name = $_POST['name'];
        }
        else{
            //header('location: registration.php?msg=null_name');
            $name='';
        }





        $email = $_POST["email"];
        $atSign = strpos($email, "@");
        $lastDot = strripos($email, ".");
        if(!empty($_POST["email"]))
        {
            if($atSign > 0 && $email[$atSign+1] != "." && $lastDot > $atSign+1 && !strpos($email, " ") && !strpos($email, "..") && strlen($email) > ($lastDot+1))
            {
                $email = $_POST['email'];
            }
            else
            {
               // echo "Invalid email!";
               //header('location: registration.php?msg=invalid_name');
               $email='';
            }
    
        }
        else
        {
            //echo "Email field is empty! Please enter your email!";
            //header('location: registration.php?msg=null_email');
            $email='';
        }
        
       
        

        $n = $_POST['user_name'];
        $un ='';
        $count=1;
        if(!empty($n))
        {
            if(strlen($n)>1)
            {
                if($n[0]>='A' && $n[0]<='z')
                {
                    $count = strlen($n);
                    $k = str_split($n);
                    foreach ($k as $ks)
                    {
                        if(($ks>='A' && $ks<='z') || $ks =='.' || $ks == '-')
                        {
                            $un = $un.$ks;
                        }
                        else
                        {
                            //echo '<br>'.'Cant be any number or special Char';
                            $un = '';
                            //header('location: registration.php?msg=style_error');
                            break;
                        }

                    }
                }
                else
                {

                    //echo "Please use 1st letter betweeen A-z";
                    //header('location: registration.php?msg=style_error');
                    $un = '';
                }

            }
            else
            {
                //echo 'Please use at least 2 words';
                //header('location: registration.php?msg=style_error');
                $un = '';
            }
            

        }
        else
        {
            //echo "Please input your name";
            //header('location: registration.php?msg=null_user_name');
            $un = '';
        }

        
        if($name!="" && $email!='' && strlen($un)==$count )
        {
            $username = $_SESSION['admin_username'];

            $user =['name' => $name, 'email'=>$email, 'username' =>$un,'pun'=>$username];
            
            $status = updateAdminInfo($user);

            if($status)
            {
                $_SESSION['admin_username'] = $un;
                header('location: ../../view/admin/admin.php');
            }
            else
            {
                
                $_SESSION['edi_msg']='SQL error';
                header('location: ../../view/admin/admin_edit.php');
            }

        }


        else
        {
            echo 'fill';
            $_SESSION['edi_msg']='Fill Up the Form';
            //header("location: ../../view/admin/admin_edit.php");
            exit();
        }

    }

    else
    {
      
        header("location: ../../index.html");
        exit;
    }



?>