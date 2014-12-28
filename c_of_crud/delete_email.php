<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost", "root", "lict@2", "crud01");

$query = "DELETE FROM `crud01`.`cofcrud` WHERE `cofcrud`.`id` = $id";

mysqli_query($link, $query);

header('location:all_email.php');

?>
