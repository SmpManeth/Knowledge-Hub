<?php 
$hostname = "localhost";
$username = "admin_blog";
$password = "Sterling@12";
$db_name = "blog";

$conn = new mysqli($hostname, $username, $password, $db_name);

if ($conn->connect_error) {
    die('Database connection error:' .$conn->connect_error);
}
// else echo('Database connected successfully');