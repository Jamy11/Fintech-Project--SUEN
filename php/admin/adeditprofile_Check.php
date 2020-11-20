<?php
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
     
        


        $password='';
        if($_POST['password']==$_POST['con_pas'])
        {
            $password = $_POST['password'];
        }
        else
        {
            //echo 'wrong password';
            //header('location: registration.php?msg=wrong_pass');
            $password='';
        }




        $user ='Admin';
        
        if($name!="" && $email!='' && strlen($un)==$count && $password!='' && $user !='')
        {

 
            // $_SESSION['reg_msg']='Registraion Complete';
            // $admin = fopen("admin.txt","a");
            // $add = $name.' '.$email.' '.$un.' '.$password.' '.$_SESSION['adGen'].' '.$_SESSION['adDate'].' '.$user;


            $content = file_get_contents('admin.txt');
            $content = str_replace($_SESSION['adUsername'],$add,$content);
            file_put_contents('admin.txt', $content);


            $_SESSION['adName'] = $name;
            $_SESSION['adEmail'] = $email;
            $_SESSION['adUserame'] = $un;
            $_SESSION['adPas'] = $password;

            //fwrite($admin, $add. " \r\n");
        
            // fclose($admin);
            $_SESSION['reg_msg']='Registraion Complete';
            header("location: ../../view/admin/admin_edit.php");
            exit();

           


        }


        else
        {
            $_SESSION['reg_msg']='Fill Up the Form';
            header("location: ../../view/admin/admin_edit.php");
            exit();
        }

    }

    else
    {
        $_SESSION['reg_msg']='Use Provided Link.';
        header("location: ../../index.html");
        exit;
    }



?>