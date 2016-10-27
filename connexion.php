<?php 

$user = "root";
$pass = "";
$db = "czdb";
// on se connecte à MySQL 
//$db = new PDO('mysql:host=localhost;dbname=czdb;charset=utf8', $user, $pass);
$mysqli = mysqli_connect("127.0.0.1", $user, $pass, $db);