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
$resignDate         = $_POST['end_date'];
$duration           = NULL;

if ($joiningDate && $resignDate) {
    $startDate = date_create_from_format('Y-m-d', $joiningDate);
    $endDate = date_create_from_format('Y-m-d', $resignDate);

    $startDate = $startDate->format('d F Y');
    $endDate = $endDate->format('d F Y');
    $dateDifference = date_diff(date_create($startDate), date_create($endDate));
    $duration = "{$dateDifference->y} Years, {$dateDifference->m} Months";
}


$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "basic_crud");

$query = "UPDATE `employment_history` SET `company_name` = '".$company_name."',
                                          `company_business` = '".$company_business."',
                                          `address` = '".$address."',
                                          `designation` = '".$designation."',
                                          `department` = '".$department."',
                                          `responsibilities` = '".$responsibilities."',
                                          `joining_date` = '".$joiningDate."',
                                          `currently_working` = '".$currentlyWorking."',
                                          `end_date` = '".$resignDate."',
                                          `duration` = '".$duration."'
        WHERE `id` = $recordID;";

mysqli_query($dbConnection, $query);

header('location:list.php');
?>
