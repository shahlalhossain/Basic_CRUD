<?php
//print_r($_POST);


//$present_address = $_POST['present_address'];
$present_address = $_POST['present_address'];
$permanent_address = $_POST['permanent_address'];
$district = $_POST['district'];
$home_phone = $_POST['home_phone'];
$mobile = $_POST['mobile'];
$emergency_contact = $_POST['emergency_contact'];
$email = $_POST['email'];
$alternative_email = $_POST['alternative_email'];
$gender = $_POST['gender'];


$link = mysqli_connect("localhost", "root", "lict@2", "crud01");

$query = "INSERT INTO `crud01`.`contactinfo`(`present_address`, `permanent_address`, `district`, `home_phone`, `mobile`, `emergency_contact`, `email`, `alternative_email`, `gender`)
            VALUES ('$present_address', '$permanent_address', '$district', '$home_phone', '$mobile', '$emergency_contact', '$email', '$alternative_email', '$gender')";
mysqli_query($link, $query);


header('location:list.php');
?>