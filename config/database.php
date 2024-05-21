<?php 

$db_name = "blog";
$server_name = "localhost";
$user_name = "root";
$password = "";

try {
    $myPDO=new PDO("mysql:host=$server_name; dbname=$db_name; charset=utf8;port=3306". $password, $user_name);
    // set the PDO error mode to exception
    $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}catch(PDOException $e) {
    echo "Erreur :". $e->getMessage();

}