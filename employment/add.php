<?php
//print_r($_POST);

$company_name       = $_POST['company_name'];
$company_business   = $_POST['company_business'];
$address            = $_POST['address'];
$designation        = $_POST['designation'];
$department         = $_POST['department'];
$responsibilities   = $_POST['responsibilities'];
$joiningDate        = $_POST['joining_date'];
$currentlyWorking   = $_POST['currently_working'];
$endDate            = $_POST['end_date'];
$duration           = $_POST['duration'];

$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "basic_crud");

$query = "INSERT INTO `employment_history`(`company_name`, `company_business`, `address`, `designation`, `department`, `responsibilities`, `joining_date`, `currently_working`, `end_date`,`duration`)
          VALUES ('$company_name', '$company_business', '$address', '$designation', '$department', '$responsibilities', '$joiningDate', '$currentlyWorking', '$endDate', '$duration')";

mysqli_query($dbConnection, $query);

header('location:list.php');
?>