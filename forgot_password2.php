<?php

include("connection.php");

session_start();

//password
if(isset($_POST["pass"]) && $_POST["pass"] != ""){
	$pass_1 = mysqli_real_escape_string($connection, $_POST["pass"]);
}else{
	die("Error: \"Password is missing\"");
}

//confirm password
if(isset($_POST["forgot_pass"]) && $_POST["forgot_pass"] != ""){
	$pass_2 = mysqli_real_escape_string($connection, $_POST["forgot_pass"]);
}else{
    die("Error: \"Confirm password is missing\"");
}


//similar passwords + atleast 8 characters
if($pass_1 != $pass_2){
    die("Error: \"Passwords doesn't match\"");
}elseif($pass_1 == $pass_2 && strlen($pass_1) < 8){
    die("Error: \"Password must have atleast 8 characters\"");
}

//hashing password
$password = hash("sha256", $pass_1);

$pass_query = $connection->prepare("UPDATE users SET password='$password' WHERE email=?");
$pass_query->bind_param("s", $_SESSION["email"]);
$pass_query->execute();

header("Location:destroy.php");

?>