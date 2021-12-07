<?php

include("connection.php");

session_start();

if($_SESSION["input"] == ""){
    die("You need to log in");
}

if(isset($_POST["fname"]) && $_POST["fname"] != ""){
    $new_fname = $_POST["fname"];
}else{
    die("Error: Input your first name");
}

//query to change first name
$fname_query = $connection->prepare("UPDATE users SET first_name='$new_fname' WHERE username=? or email=?");
$fname_query->bind_param("ss", $_SESSION["input"], $_SESSION["input"]);
$fname_query->execute();

echo mysqli_error($connection);
header("Location:personal.php")
?>
