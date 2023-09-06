<?php
include_once("config_login.php");
try {
    $pdo = new PDO("mysql:host=" . SERVER_NAME . ";dbname=" . DATABASE_NAME, USER_NAME, PASSWORD);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$usr = $_POST["username"];  
$pass = $_POST["password"];
$hased_pass = hash("sha256",$pass);
$sql = "SELECT * FROM users WHERE ((username=:usr) OR (email=:usr)) AND (PASSWORD=:hashed_pass) AND (active="si")";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":usr,$usr");
$stmt->bindValue(":hashed_pass,$hashed_pass");
$stmt->execute();
//PDO=interfaz que se usa para ingresar a base de dato (distintas base de datos)?>
