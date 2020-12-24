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

?>