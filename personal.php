<?php

include("connection.php");

session_start();

//get first name
$first_query = $connection->prepare("SELECT first_name FROM users WHERE username=? or email=?");
$first_query->bind_param("ss", $_SESSION["input"], $_SESSION["input"]);
$first_query->execute();

$first_res = $first_query->get_result();
$first_row = $first_res->fetch_assoc();

$first_json = json_encode($first_row);

$first = explode("\"", $first_json);

$final_first = $first[3];


//get last name
$last_query = $connection->prepare("SELECT last_name FROM users WHERE username=? or email=?");
$last_query->bind_param("ss", $_SESSION["input"], $_SESSION["input"]);
$last_query->execute();

$last_res = $last_query->get_result();
$last_row = $last_res->fetch_assoc();

$last_json = json_encode($last_row);

$last = explode("\"", $last_json);

$final_last = $last[3];


//get username
$username_query = $connection->prepare("SELECT username FROM users WHERE username=? or email=?");
$username_query->bind_param("ss", $_SESSION["input"], $_SESSION["input"]);
$username_query->execute();

$username_results = $username_query->get_result();

$username_row = $username_results->fetch_assoc();
$username_json = json_encode($username_row);

$usr = explode("\"", $username_json);

$final_usr = $usr[3];


//get email
$email_query = $connection->prepare("SELECT email FROM users WHERE username=? or email=?");
$email_query->bind_param("ss", $_SESSION["input"], $_SESSION["input"]);
$email_query->execute();

$email_res = $email_query->get_result();
$email_row = $email_res->fetch_assoc();

$email_json = json_encode($email_row);

$email = explode("\"", $email_json);

$final_email = $email[3];


//get phone number
$phone_query = $connection->prepare("SELECT phone_number FROM users WHERE username=? or email=?");
$phone_query->bind_param("ss", $_SESSION["input"], $_SESSION["input"]);
$phone_query->execute();

$phone_res = $phone_query->get_result();
$phone_row = $phone_res->fetch_assoc();

$phone_json = json_encode($phone_row);

$final_phone = (int) filter_var($phone_json, FILTER_SANITIZE_NUMBER_INT);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal information</title>
</head>
<body style="background-color:#ffdf80">
    
    <h1 style="text-align:center" style="margin:3em">Your Personal Information</h1>

    <h4 style="text-align:center">First name: <?php echo $final_first ?></h4>

    <h4 style="text-align:center">Last name: <?php echo $final_last ?></h4>

    <h4 style="text-align:center">Username: <?php echo $final_usr ?></h4>

    <h4 style="text-align:center">Email: <?php echo $final_email ?></h4>

    <h4 style="text-align:center">Phone number: <?php echo $final_phone ?></h4>

    <a href="logout.php" style="text-decoration:none"><button style="display:block;margin:0 auto">Log out</button></a>

</body>
</html>