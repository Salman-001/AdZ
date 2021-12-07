<?php

include("connection.php");

session_start();

if(isset($_SESSION["input"])){
    header("Location:place_ad.html");
}else{
    header("Location:login2.html");
}


?>