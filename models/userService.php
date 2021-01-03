<?php


require_once('db.php');

if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}



function validateUser($user){

    $conn = getConnection();
    $sql = "select * from admin where username='{$user['username']}' and password='{$user['password']}'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row > 0){
        return true; 
    }else{
        return false;
    }
}

function searchUser($user)
	{
		$users = [];
		$conn = getConnection();
		$sql = "SELECT * from admin where username = '$user' ";
		
		$result = mysqli_query($conn,$sql);

		if($result)
		{
			$row = mysqli_fetch_assoc($result);

			if(count($row)>0)
			{
				return $row;
			}
			else{
				return false;
			}
		}
		else
		{
			return false;
		}

		
		// if($result)
		// {
		// 	while ($row = mysqli_fetch_assoc($result)) {
		// 		array_push($users, $row);
		// 	}
		// 	if(count($user)>0)
		// 	{
		// 		return $user;
		// 	}
		// 	else
		// 	{
		// 		return false;
		// 	}
		// }
		// else
		// {
		// 	return false;
		// }

	}


function checkUniqeEmail($email){

    $conn = getConnection();

    $sql = "SELECT * FROM admin WHERE email = '$email'"; 

    if($result = mysqli_query($conn,$sql)){

        if(mysqli_num_rows($result)>0)
        {
            return true;
        }
    }
    else
    {
        die("Error: ". mysqli_error($conn));
    }

    return false;
}


function checkUniqeUSername($username){

    $conn = getConnection();

    $sql = "SELECT * FROM admin WHERE username = '$username'"; 

    if($result = mysqli_query($conn,$sql)){

        if(mysqli_num_rows($result)>0)
        {
            return true;
        }
    }
    else
    {
        die("Error: ". mysqli_error($conn));
    }

    return false;
}

function insertIntoAdmin($user){

	$conn = getConnection();
	$sql = "INSERT INTO admin
	VALUES ('{$user['a_name']}', '{$user['a_email']}','{$user['a_username']}', 
	'{$user['a_password']}', '{$user['a_gender']}','{$user['a_dob']}', 
	'{$user['a_usertype']}','{$user['a_picture']}' )";

	$status = mysqli_query($conn,$sql);

	if($status)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function updateAdminInfo($user)
{
	$conn = getConnection();
	//$user =['name' => $name, 'email'=>$email, 'username' =>$un,'pun'=>$username];
	$sql = "UPDATE admin SET name='{$user['name']}', email='{$user['email']}',
			username='{$user['username']}' WHERE username='{$user['pun']}'";

	$status = mysqli_query($conn,$sql);

	if($status)
	{
		return true;
	}
	else
    {
        die("Error: ". mysqli_error($conn));
    }

    return false;
}


function updateAdminPass($user)
{
	$conn = getConnection();
	//$user =['name' => $name, 'email'=>$email, 'username' =>$un,'pun'=>$username];
	
	$sql = "UPDATE admin SET password='{$user['password']}' 
			WHERE username='{$user['username']}'";

	$status = mysqli_query($conn,$sql);

	if($status)
	{
		return true;
	}
	else
    {
        die("Error: ". mysqli_error($conn));
    }

    return false;
}

function getAllAdmin(){

	$conn = getConnection();
	$sql = "select * from admin";

	$result = mysqli_query($conn, $sql);
	$users = [];

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	}

	return $users;
}

function deleteAdmin($user)
{
	//$value = $_GET['msg'];
	$conn = getConnection();
	$sql = "DELETE FROM admin WHERE username='$user'";
	$status=mysqli_query($conn, $sql);
	
	if($status){
		return true; 
	}else
    {
        die("Error: ". mysqli_error($conn));
    }

    return false;

}

function editAdmin($user)
{
	$conn = getConnection();
	$sql = "UPDATE admin SET name='{$user['name']}',
	password='{$user['password']}' WHERE username = '{$user['username']}' ";

	$status = mysqli_query($conn, $sql);
	
	if($status){
		return true; 
	}else
    {
        die("Error: ". mysqli_error($conn));
    }

    return false;
}

function getAllUser(){

	$conn = getConnection();
	$sql = "select * from user";

	$result = mysqli_query($conn, $sql);
	$users = [];

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	}

	return $users;
}



function deleteUser($user)
{
	//$value = $_GET['msg'];
	$conn = getConnection();
	$sql = "DELETE FROM user WHERE username='$user'";
	$status=mysqli_query($conn, $sql);
	
	if($status){
		return true; 
	}else
    {
        die("Error: ". mysqli_error($conn));
    }

    return false;

}

function editUser($user)
{
	$conn = getConnection();
	$sql = "UPDATE user SET name='{$user['name']}',
	password='{$user['password']}', email='{$user['email']}' 
	WHERE username = '{$user['username']}' ";

	$status = mysqli_query($conn, $sql);
	
	if($status){
		return true; 
	}else
    {
        die("Error: ". mysqli_error($conn));
    }

    return false;
}

?>