<?php

$username = $_GET['username'];
$password = $_GET['password'];

// Valid credentials
$validUser = "admin";
$validPass = "12345";

echo "<h2>PHP Response</h2>";

if ($username == $validUser && $password == $validPass)
{
    echo "<h3 style='color:green;'>Login Successful!</h3>";
    echo "Welcome, " . htmlspecialchars($username);
}
else
{
    echo "<h3 style='color:red;'>Login Failed!</h3>";
    echo "Invalid Username or Password.";
}

?>