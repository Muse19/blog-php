 <?php

//Conexión 
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'blog';

$db = mysqli_connect($server, $username, $password, $database);

session_start();