<?php

include('connection.php');


session_start();

$inputt = '';
$pass_1 = '';
$password = '';


//Username or email
if(isset($_GET['inputt']) && $_GET['inputt'] != ''){
	$input = $_GET['inputt'];
}else{
	die("Error: Input your Email or Username");
}

$_SESSION["input"] = $input;

//Password
if(isset($_GET["pass"]) && $_GET["pass"] != ""){
	$pass_1 = mysqli_real_escape_string($connection, $_GET["pass"]);
}else{
	die("Error: Input your password");
}

//hashing password
$password = hash("sha256", $pass_1);

//query to know if the user is verified or no
$verification_query = "SELECT verified FROM users WHERE username= ? or email=?";
$ver_stmt = $connection->prepare($verification_query);
$ver_stmt->bind_param("ss", $input, $input);
$ver_stmt->execute();
$ver_results = $ver_stmt->get_result();

$ver_row = $ver_results->fetch_assoc();
$ver_json = json_encode($ver_row);



if($ver_json == "{\"verified\":\"True\"}"){
	
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
		header("Location:index.html");
	}else {
    	echo "Failed to log in";
	}

}elseif($ver_json == "{\"verified\":\"False\"}"){
	echo "You need to verify your email first";
}else {
	print $inputt;
	echo "No user found";
}

?>