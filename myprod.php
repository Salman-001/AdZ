<?php

include("connection.php");

session_start();

if(isset($_SESSION["input"])){
    header("Location:myproducts.php");
}else{
    header("Location:login2.html");
}


?>