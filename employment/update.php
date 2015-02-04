<?php
//print_r($_POST);

$recordID           = $_POST['id'];
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

$query = "UPDATE `employment_hisotry` SET `company_name` = '".$company_name."',
                                          `company_business` = '".$company_business."',
                                          `address` = '".$address."',
                                          `designation` = '".$designation."',
                                          `department` = '".$department."',
                                          `responsibilities` = '".$responsibilities."',
                                          `joining_date` = '".$joiningDate."',
                                          `currently_working` = '".$currentlyWorking."',
                                          `end_date` = '".$endDate."',
                                          `duration` = '".$duration."'
        WHERE `id` = $recordID;";

mysqli_query($dbConnection, $query);

header('location:list.php');
?>
