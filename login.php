<?php
include_once("config_login.php");
try{
$PDO = new PDO("mysql:host =".SERVER_NAME.";dbname =".DATABASE_NAME,USER_NAME, PASSWORD);
echo "conexion exitosa";
}
catch(PDOException $e) {
    echo "Connection Interrumpida: " . $e->getMessage();}
?>

