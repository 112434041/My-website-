<?php

$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];

if(isset($_POST['agree']))
{
    $agree = "Accepted";
}
else
{
    $agree = "Not Accepted";
}

echo "<h2>Registration Details</h2>";
echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Course: " . $course . "<br>";
echo "Terms: " . $agree;
?>