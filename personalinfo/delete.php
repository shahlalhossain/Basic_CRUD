<?php
$code = $_GET['code'];
$link = mysqli_connect("localhost", "root", "479874", "crud01");
$query = "DELETE FROM `crud01`.`personalinfo` WHERE `personalinfo`.`code` = $code";
mysqli_query($link, $query);
header('location:list.php');
?>