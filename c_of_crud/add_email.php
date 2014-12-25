<?php

$email = $_POST['email'];

$link = mysqli_connect("localhost", "root", "lict@2", "ftfl2nd");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



$query = "INSERT INTO `ftfl2nd`.`emails`(`email`) VALUES ('$email')";

mysqli_query($link, $query);

header('location:all_email.php');
