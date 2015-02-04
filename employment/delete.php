<?php
$recordID  = $_GET['id'];

$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "basic_crud");
$query = "DELETE FROM `employment_history` WHERE `id` = $recordID ";
mysqli_query($dbConnection, $query);

header('location:list.php');
?>
