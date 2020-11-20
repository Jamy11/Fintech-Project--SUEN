<?php

    session_start();
    session_destroy();

    setcookie('active','true',time()-1000,'/');

    header('location: ../index.html');
?>
