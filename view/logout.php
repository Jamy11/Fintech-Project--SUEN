<?php

    session_start();
    session_destroy();

    if(isset($_COOKIE['login']))
	{
		setcookie('login', 'false', time()-1,'/');
	}

    header('location: ../index.html');
?>
