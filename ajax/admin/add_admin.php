<?php
     if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require_once('../../models/userService.php');

    if(isset($_POST['email']))
    {
        if(checkUniqeEmail($_POST['email']))
        {
            echo 'exist';
        }
    }


    if(isset($_POST['check_username']))
    {
        if(checkUniqeUSername($_POST['check_username']))
        {
            echo 'exist';
        }
    }





    if(isset($_POST['add']))
    {
        $data  = $_POST['add'];
        $obj = json_decode($data);
        
        $name = $obj->name;
        $email = $obj->email;
        $n = $obj->username;
        $password = $obj->password;
        $con_pass = $obj->con_password;
        $gen = $obj->gender;
        $dobb = $obj->dob;

        // echo $name;
        // echo $email;
        // echo $n;
        // echo $password;
        // echo $con_pass;
        // echo $gen;
        // echo $dobb;

        $atSign = strpos($email, "@");
        $lastDot = strripos($email, ".");
        if($email != '')
        {
            if($atSign > 0 && $email[$atSign+1] != "." && $lastDot > $atSign+1 && !strpos($email, " ") && !strpos($email, "..") && strlen($email) > ($lastDot+1))
            {
                //$email = $_POST['email'];
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
        
        


        if($password==$con_pass)
        {
            
        }
        else
        {
            //echo 'wrong password';
            //header('location: registration.php?msg=wrong_pass');
            $password='';
        }







        $user_type ='Admin';
        $pic = 'null';
        if($name!="" && $email!='' && strlen($un)==$count && $password!='' && $gen!='' && $dobb !='' && $user_type !='' && $pic !='')
        {
            $user = ['a_name'=> $name, 'a_email'=>$email,
                    'a_username'=> $un, 'a_password'=>$password,
                    'a_gender'=> $gen, 'a_dob'=>$dobb,
                    'a_usertype'=> $user_type, 'a_picture'=>$pic];

            if(insertIntoAdmin($user))
            {
                echo 'Done';
            }
            else{
                echo 'Admin Adding Failed';
            }
        }
        else
        {
            echo 'Php verification failed';
        }
    }