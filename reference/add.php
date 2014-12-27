<?php
//print_r($_POST);

$name = $_POST['name'];
$organization = $_POST['organization'];
$address = $_POST['address'];
$relation = $_POST['relation'];
$office_phone = $_POST['office_phone'];
$home_phone = $_POST['home_phone'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

$link = mysqli_connect("localhost", "root", "lict@2", "crud01");

$query = "INSERT INTO `crud01`.`reference`(`name`, `organization`, `address`, `relation`, `office_phone`, `home_phone`, `mobile`, `email`)
                              VALUES ('$name', '$organization', '$address', '$relation', '$office_phone', '$home_phone', '$mobile', '$email')";
mysqli_query($link, $query);


header('location:list.php');
?>