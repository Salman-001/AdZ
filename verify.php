<?php

include ("connection.php");

//get the inputted info on verify.html
$ver_email = $_GET["verify_email"];
$ver_number = $_GET["verify_number"];

//query to get the verification number for a user from the database
$ver_query = "SELECT verification_code FROM users WHERE email=?";
$ver_stmt = $connection->prepare($ver_query);
$ver_stmt->bind_param("s", $ver_email);
$ver_stmt->execute();
$ver_res = $ver_stmt->get_result();

$ver_row = $ver_res->fetch_assoc();
$ver_json = json_encode($ver_row);

//modified the inputted verification number
$ver2_number = "{\"verification_code\":$ver_number}";

//comparing the verification number set by the one in the database
if($ver_json == $ver2_number){

    //query to change the verified section in the database to "True" if the if statement is correct
    $change_verified = "UPDATE users SET verified='True' WHERE email=?";
    $change_stmt = $connection->prepare($change_verified);
    $change_stmt->bind_param("s", $ver_email);
    $change_stmt->execute();
    echo "Your email is successfully verified"; //to be deleted when homepage is done

    $html_direct = "<p>Go to <a href=\"login.html\">login</a> page</p>"; //same

    print $html_direct; //same
    
    $change_stmt->close();

    header("Location:index.php"); //homepage

}else{
    echo "Error: verification number is incorrect";
}

$ver_stmt->close();
$connection->close();



?>