<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "479874", "crud01");
$query = "DELETE FROM `crud01`.`personalinfo` WHERE `personalinfo`.`id` = $id";
mysqli_query($link, $query);
header('location:list.php');
?>