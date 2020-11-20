<?php
    include_once('header.php');
    if(isset($_COOKIE['active']) || isset($_SESSION['active']))
    {
        header('location: ../index.html');
    }
    
?>

<h1>client</h1>