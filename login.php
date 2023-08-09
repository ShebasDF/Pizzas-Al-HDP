<?php
$usr=$_POST["username"];
$pass=$_POST["password"];
if(((strcmp($usr,"maria")==0)||(strcmp($usr,"maria@twitter.com"))==0)&&(strcmp($pass,"123456")==0)){?><h1>Bienvenido</h1><?php }
else{
    echo " ERROR----a donde vas----?";

}
?>

