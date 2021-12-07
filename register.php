<?php

include('connection.php');


/* $fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass_1 = $_POST['pass_1'];
$pass_2 = $_POST['pass_2'];

$verification_num = rand(100000,999999);
$boolean = 'False';

//hashing password
$password = hash("sha256", $pass_1);

$sql = "INSERT INTO users VALUES ('$fname','$lname','$username','email','phone','password','$verification_num','$boolean')";

if(mysqli_query($connection, $sql)){
    echo "<h3>data stored in a database successfully." 
        . " Please browse your localhost php my admin" 
        . " to view the updated data</h3>"; 

    echo nl2br("\n$first_name\n $last_name\n "
        . "$gender\n $address\n $email");
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($connection);
}

mysqli_close($connection); */




//first name
if(isset($_POST["fname"]) && $_POST["fname"] != ""){
	$fname = mysqli_real_escape_string($connection, $_POST["fname"]);
}else{
	die("Error: \"First name is missing\"");
}

//last name
if(isset($_POST["lname"]) && $_POST["lname"] != ""){
	$lname = mysqli_real_escape_string($connection, $_POST["lname"]);
}else{
	die("Error: \"Last name is missing\"");
}

//email + validation
if(isset($_POST["email"]) && $_POST["email"] != ""){
	$email = mysqli_real_escape_string($connection, $_POST["email"]);
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false){
        die("Error: \"Enter a valid email address\"");
    }
}else{
	die("Error: \"Email is missing\"");
}

//username
if(isset($_POST["username"]) && $_POST["username"] != ""){
	$username = mysqli_real_escape_string($connection, $_POST["username"]);
    if(strlen($username) < 8){
        die("Error: \"Username must have atleast 8 characters\"");
    }
}else{
	die("Error: \"Username is missing\"");
}

//phone number
if(isset($_POST["phone"]) && $_POST["phone"] != ""){
    $phone = mysqli_real_escape_string($connection, $_POST["phone"]);
}else{
    die("Error: \"Phone number is missing\"");
}

//password
if(isset($_POST["pass_1"]) && $_POST["pass_1"] != ""){
	$pass_1 = mysqli_real_escape_string($connection, $_POST["pass_1"]);
}else{
	die("Error: \"Password is missing\"");
}

//confirm password
if(isset($_POST["pass_2"]) && $_POST["pass_2"] != ""){
	$pass_2 = mysqli_real_escape_string($connection, $_POST["pass_2"]);
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

//unique username, email and phone number for each user
$user_check_query = "SELECT * FROM users WHERE email='$email' or username='$username' or phone_number='$phone'";
$res = mysqli_query($connection, $user_check_query);

$user = mysqli_fetch_assoc($res);

if($user){
    
    if($user['username'] == $username && $user['phone_number'] == $phone && $user['email'] == $email){
        die("Error: \"Username, Phone number and email already exist\"");
    }
    
    if($user['username'] == $username && $user['phone_number'] == $phone){
        die("Error: \"Username and Phone number already exist\"");
    }
    
    if($user['username'] == $username && $user['email'] == $email){
        die("Error: \"Username and email already exist\"");
    }
    
    if($user['phone_number'] == $phone && $user['email'] == $email){
        die("Error: \"Phone number and email already exist\"");
    }
    
    if($user['username'] == $username){
        die("Error: \"Username already exist\"");
    }
    
    if($user['email'] == $email){
        die("Error: \"Email already exist\"");
    }
    
    if($user['phone_number'] == $phone){
        die("Error: \"Phone number already exist\"");
    }
}

$verification_num = rand(100000,999999);

$bool = "False";
 
$mysql = $connection->prepare("INSERT INTO users(first_name, last_name, username, email, phone_number, password, verification_code, verified) VALUES (?,?,?,?,?,?,?,?)");
$mysql->bind_param("ssssssis", $fname, $lname, $username, $email, $phone, $password, $verification_num, $bool);
$mysql->execute();

echo mysqli_error($connection);

$mysql->close();
$connection->close();
header("Location:verify.html");


?>
