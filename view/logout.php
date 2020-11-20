<?php

    session_start();
    session_destroy();

    if(isset($_COOKIE['uname']) && isset($_COOKIE['pass']))
	{
		setcookie('uname', $_COOKIE['uname'], time()-1);
		setcookie('pass', $_COOKIE['pass'], time()-1);	
	}

    header('location: ../index.html');
?>
