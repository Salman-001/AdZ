<?php

include("connection.php");

session_start();

if($_SESSION["input"] == ""){
    die("You need to log in");
}

//get new password
if(isset($_POST["password_1"]) && $_POST["password_1"] != ""){
    $password_1 = $_POST["password_1"];
}else {
    die("Error: Input the new password");
}

//get confirmed new password
if(isset($_POST["password_2"]) && $_POST["password_2"] != ""){
    $password_2 = $_POST["password_2"];
}else {
    die("Error: Input the confirmed new password");
}

//similar passwords and characters > 8
if($password_1 != $password_2){
    die("Error: \"Passwords doesn't match\"");
}elseif($password_1 == $password_2 && strlen($password_1) < 8){
    die("Error: \"Password must have atleast 8 characters\"");
}

//hashing the new password
$new_password = hash("sha256", $password_1);

//query to change password
$password_query = $connection->prepare("UPDATE users SET password='$new_password' WHERE username=? or email=?");
$password_query->bind_param("ss", $_SESSION["input"], $_SESSION["input"]);
$password_query->execute();

mysqli_error($connection);

echo "Password changed successfully<br>";

echo "Go back to <a href=\"index.html\">Homepage</a>";

?>