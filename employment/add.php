<?php
//print_r($_POST);

$company_name = $_POST['company_name'];
$company_business = $_POST['company_business'];
$address = $_POST['address'];
$designation = $_POST['designation'];
$department = $_POST['department'];
$timefrom = $_POST['timefrom'];
$timeto = $_POST['timeto'];
$duration = $_POST['duration'];
$responsibilities = $_POST['responsibilities'];


$link = mysqli_connect("localhost", "root", "lict@2", "crud01");

$query = "INSERT INTO `crud01`.`employment`(`company_name`, `company_business`, `address`, `designation`, `department`, `timefrom`, `timeto`, `duration`, `responsibilities`)
            VALUES ('$company_name', '$company_business', '$address', '$designation', '$department', '$timefrom', '$timeto', '$duration', '$responsibilities')";

mysqli_query($link, $query);


header('location:list.php');
?>