<?php

include('connection.php');

$input = '';
$pass_1 = '';
$password = '';


//Username or email input
if(isset($_GET["inputt"]) || $_GET["inputt"] != ""){
	$input = mysqli_real_escape_string($connection, $_GET["inputt"]);
}else{
	die("Error:Input your email or username");
}


//Password
if(isset($_GET["pass"]) && $_GET["pass"] != ""){
	$pass_1 = mysqli_real_escape_string($connection, $_GET["pass"]);
}else{
	die("Error:Input your password");
}

//hashing password
$password = hash("sha256", $pass_1);


//query to login using email or username with the correct password
$query = "SELECT password FROM users WHERE username= ? or email=?";
$stmt = $connection->prepare($query);
$stmt->bind_param("ss", $input, $input);
$stmt->execute();
$results = $stmt->get_result();



$row = $results->fetch_assoc();


//comparing the input password with the one in the database
$json = json_encode($row);

$password_check = "{\"password\":\"$password\"}";

if($json == $password_check){
    echo "You are logged in";
}else {
    echo "Failed to log in";
}

?>