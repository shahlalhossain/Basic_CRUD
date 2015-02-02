<?php
//print_r($_POST);

$recordID           = $_POST['id'];
$presentPerson      = $_POST['contact_person'];
$gender             = $_POST['gender'];
$profession         = $_POST['profession'];
$designation        = $_POST['designation'];
$primaryMobile      = $_POST['primary_mobile'];
$secondaryMobile    = $_POST['secondary_mobile'];
$primaryEmail       = $_POST['primary_email'];
$secondaryEmail     = $_POST['secondary_email'];
$presentAddress     = $_POST['present_address'];
$presentDistrict    = $_POST['present_district'];
$permanentAddress   = $_POST['permanent_address'];
$permanentDistrict  = $_POST['permanent_district'];


$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "bacrud");


$query = "UPDATE `contactinfo` SET `contact_person` = '".$presentPerson."',
                                   `gender` = '".$gender."',
                                   `profession` = '".$profession."',
                                   `designation` = '".$designation."',
                                   `primary_mobile` = '".$primaryMobile."',
                                   `secondary_mobile` = '".$secondaryMobile."',
                                   `primary_email` = '".$primaryEmail."',
                                   `secondary_email` = '".$secondaryEmail."',
                                   `present_address` = '".$presentAddress."',
                                   `present_district` = '".$presentDistrict."',
                                   `permanent_address` = '".$permanentAddress."',
                                   `permanent_district` = '".$permanentDistrict."'
        WHERE `id` = $recordID;";

mysqli_query($dbConnection, $query);

header('location:list.php');
?>
