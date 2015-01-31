<?php
//print_r($_POST);

$code       = $_POST['code'];
$track      = $_POST['track'];
$name       = $_POST['name'];
$mobile     = $_POST['mobile'];
$email      = $_POST['email'];
$gender     = $_POST['gender'];
$dob        = $_POST['dob'];
$religion   = $_POST['religion'];

$fatherName     = $_POST['father_name'];
$motherName     = $_POST['mother_name'];
$nid            = $_POST['nid'];
$nationality    = $_POST['nationality'];
$hometown       = $_POST['hometown'];
$currentCity    = $_POST['current_city'];

$sscRoll    = $_POST['ssc_roll'];
$sscBoard   = $_POST['ssc_board'];
$sscYear    = $_POST['ssc_year'];
$sscGroup   = $_POST['ssc_group'];
$sscResult  = $_POST['ssc_result'];

$hscRoll    = $_POST['hsc_roll'];
$hscBoard   = $_POST['hsc_board'];
$hscYear    = $_POST['hsc_year'];
$hscGroup   = $_POST['hsc_group'];
$hscResult  = $_POST['hsc_result'];

$honsYear       = $_POST['hons_year'];
$honsSubject    = $_POST['hons_subject'];
$honsResult     = $_POST['hons_result'];

$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "basic_crud");

$query = "INSERT INTO `personalinfo`(`code`, `track`, `name`, `father_name`, `mother_name`, `religion`, `dob`, `gender`, `nationality`, `nid`, `email`, `mobile`, `hometown`, `current_city`, `ssc_roll`, `ssc_board`, `ssc_year`, `ssc_group`, `ssc_result`, `hsc_roll`, `hsc_board`, `hsc_year`, `hsc_group`, `hsc_result`, `hons_year`, `hons_subject`, `hons_result`)
VALUES ('$code', '$track', '$name', '$fatherName', '$motherName', '$religion', '$dob', '$gender', '$nationality', '$nid', '$email', '$mobile', '$hometown', '$currentCity', '$sscRoll', '$sscBoard', '$sscYear', '$sscGroup', '$sscResult', '$hscRoll', '$hscBoard', '$hscYear', '$hscGroup', '$hscResult', '$honsYear', '$honsSubject', '$honsResult')";
mysqli_query($dbConnection, $query);

header('location:list.php');
?>