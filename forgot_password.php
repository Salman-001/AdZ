<?php

include ("connection.php");

session_start();

//get the inputted info on verify.html
$forgot_email = $_GET["forgot_email"];
$forgot_number = $_GET["forgot_number"];

$_SESSION["email"] = $forgot_email;

//query to get the verification number for a user from the database
$forgot_query = "SELECT verification_code FROM users WHERE email=?";
$forgot_stmt = $connection->prepare($forgot_query);
$forgot_stmt->bind_param("s", $forgot_email);
$forgot_stmt->execute();
$forgot_res = $forgot_stmt->get_result();

$forgot_row = $forgot_res->fetch_assoc();
$forgot_json = json_encode($forgot_row);

//modified the inputted verification number
$forgot2_number = "{\"verification_code\":$forgot_number}";

//comparing the verification number set by the one in the database
if($forgot_json == $forgot2_number){

    header("Location:forgot_password2.html");

}else{
    echo "Error: verification number is incorrect";
}

$forgot_stmt->close();
$connection->close();



?>