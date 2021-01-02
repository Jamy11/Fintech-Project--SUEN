<?php
    include_once('../../models/userService.php');
    if(isset($_POST['submit']))
    {
        $oldpass = $_POST['old_pass'];
        $newpass = $_POST['new_pass'];
        $connpass = $_POST['con_pass'];

        if($oldpass && $newpass && $connpass)
        {
            if($oldpass == $_SESSION['oldpass'])
            {
                if($newpass == $connpass)
                {   
                    $username = $_SESSION['admin_username'];
                    $userlist = ['password'=>$newpass,'username' => $username];
                    $status = updateAdminPass($userlist);
                    
                    if($status)
                    {
                        $_SESSION['pass_error'] ='Complete';
                        header('location: ../../view/admin/admin.php');
                        exit;
                    }
                    else
                    {
                        $_SESSION['pass_error'] ='Sql Error.';
                        header('location: ../../view/admin/admin_chngpass.php');
                        exit;
                    }

                }
                else
                {
                    $_SESSION['pass_error'] ='Dont Match';
                    header('location: ../../view/admin/admin_chngpass.php');
                    exit;
                }
            }
            else
            {
                $_SESSION['pass_error'] ='Old Pass dont match';
                header('location: ../../view/admin/admin_chngpass.php');
                exit;
            }
        }
        else
        {
            $_SESSION['pass_error'] ='Fill the form.';
            header('location: ../../view/admin/admin_chngpass.php');
            exit;
        }
    }
    else
    {
        echo "Use provided link";
    }

?>