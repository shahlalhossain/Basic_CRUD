<?php

$email = $_POST['email'];

$link = mysqli_connect("localhost", "root", "lict@2", "crud01");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



$query = "INSERT INTO `crud01`.`cofcrud`(`email`) VALUES ('$email')";

mysqli_query($link, $query);

header('location:all_email.php');
