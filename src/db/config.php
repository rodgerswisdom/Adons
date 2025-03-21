<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'adons_db';


$connection = new mysqli($hostname, $username, $password, $database);

if($connection->connect_error){
    die("Error Connectig Database");
}

$connection.close();

?>
