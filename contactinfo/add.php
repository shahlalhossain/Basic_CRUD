<?php
//print_r($_POST);
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

$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "basic_crud");

$query = "INSERT INTO `contact_info`(`contact_person`, `gender`, `profession`, `designation`, `primary_mobile`, `secondary_mobile`, `primary_email`, `secondary_email`, `present_address`, `present_district`, `permanent_address`, `permanent_district`)
            VALUES ('$presentPerson', '$gender', '$profession', '$designation', '$primaryMobile', '$secondaryMobile', '$primaryEmail', '$secondaryEmail', '$presentAddress', '$presentDistrict', '$permanentAddress', '$permanentDistrict')";
mysqli_query($dbConnection, $query);


header('location:list.php');
?>