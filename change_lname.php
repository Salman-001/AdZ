<?php

include("connection.php");

session_start();

if($_SESSION["input"] == ""){
    die("You need to log in");
}

if(isset($_POST["lname"]) && $_POST["lname"] != ""){
    $new_lname = $_POST["lname"];
}else{
    die("Error: Input your new last name");
}

//query to change last name
$fname_query = $connection->prepare("UPDATE users SET last_name='$new_lname' WHERE username=? or email=?");
$fname_query->bind_param("ss", $_SESSION["input"], $_SESSION["input"]);
$fname_query->execute();

echo mysqli_error($connection);
header("Location:personal.php")
?>
