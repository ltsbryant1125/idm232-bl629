<?php

//database info
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$dbname = 'local_idm232';

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
    die ("Database connection failed: " .
        mysqli_connect_error() . 
        " (" . mysqli_connect_errno() . ")"
    );
}
?>