<?php

$location 	= 'localhost';
$dbuser		= 'root';
$dbpass		= '';
$database	= 'suen'; 

function getConnection()
{
    
    global $location;
    global $dbuser;
    global $dbpass;
    global $database;

    $conn = mysqli_connect($location, $dbuser, $dbpass, $database);
    
    if($conn)
    {
        return $conn;
    }
    else
    {
        die("Connection error:". mysqli_connect_error());
    }
}