<?php

include("connection.php");

session_start();

session_destroy();

echo "You successfully changed the password. <br>Go to <a href=\"login.html\">Login Page</a> to continue.";


?>