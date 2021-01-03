<center>
    <h1>Give Your Data Below</h1>
<br>
<br>
<br>
<form method="POST" action="" onsubmit="return checkAll()">
    <fieldset style="width:30%">
        <legend> Edit Your Data</legend>
    
        <table>
            <tr>
                <td>
                    Admin Name :
                </td>
                <td>
                    <input type="text" name="name" id="name">
                </td>
            </tr>           
            


            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="text" name="pass" id="pass">
                </td>
            </tr>


            <tr>
                <td>
                <input type="submit" name='submit' value="Change">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
            
        
        </table>
    </fieldset>
    
</form>
<script type='text/javascript' src="../../js/admin/a_edit.js"></script>
</center>


<?php

$value =$_GET['msg'];


require_once('../../models/userService.php');



// $result = mysqli_query($conn , $sql);
// $data = mysqli_fetch_assoc($result);
$un = $_GET['msg'];



if(isset($_POST['submit']))
{
    //$arr = [$_POST['e_name'],$_POST['com_name'],$_POST['con_no'],$un,$_POST['pass']];

    $user = ['name'=>  $_POST['name'], 
    'username'=> $un, 'password'=>$_POST['pass'] ];


    $status = editAdmin($user);

    print_r($user);
    if($status == TRUE)
    {
        $_SESSION['edit'] = 'Edited';
        header('location: admin_admin_list.php');
    }
    else
    {
        echo 'wrong data type';
    }
}
else
{

}

?>