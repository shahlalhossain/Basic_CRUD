<?php
$id = $_GET['id'];
<<<<<<< HEAD
$link = mysqli_connect("localhost", "root", "479874", "crud01");
=======
$link = mysqli_connect("localhost", "root", "lict@2", "crud01");
>>>>>>> dd1c2428e51392082af555555a0479e7fd0c452a
$query = "DELETE FROM `crud01`.`traininginfo` WHERE `traininginfo`.`id` = $id";
mysqli_query($link, $query);
header('location:list.php');
?>
