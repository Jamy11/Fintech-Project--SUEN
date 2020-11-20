<?php

    session_start();
    session_destroy();

    if(isset($_COOKIE['uname']) && isset($_COOKIE['pass']))
	{
		setcookie('uname', 'false', time()-1,'/');
		setcookie('pass', 'false', time()-1,'/');	
	}

    header('location: ../index.html');
?>
