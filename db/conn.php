<?php 
/*$host = '127.0.0.1:33065';
$dbname = 'attendace_db';
$userdb = 'root';
$pass = '';
$charset = 'utf8mb4';*/

$host = 'remotemysql.com';
$dbname = 'ZYQg96vBFV';
$userdb = 'ZYQg96vBFV';
$pass = 'q0bfwXO4SC';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

try{
    $pdo = new PDO($dsn, $userdb, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    throw new PDOException($e->getMessage());
}

require_once 'crud.php';
require_once 'user.php';

$crud = new crud($pdo);
$user = new user($pdo);

//$user->insertUser("aaron","aaron");

?> 