<?php
session_start();
$dbname = "php_db";
$dbusername= "root";
$password="";
$host = "localhost";
$conn = mysqli_connect($host,$dbusername,$password,$dbname);
?>