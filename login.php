<?php
$usr=$_POST["username"];
$pass=$_POST["password"];
if(((strcmp($usr,"maria")==0)||(strcmp($usr,"maria@twitter.com"))==0)&&(strcmp($pass,"123456")==0)){echo "Hola Bienvenido";}
else{
    echo " ERROR----a donde vas----?";

}
?>

