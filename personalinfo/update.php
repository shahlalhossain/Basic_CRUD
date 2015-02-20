<?php
//print_r($_POST);

$id         = $_POST['id'];

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

$query = "UPDATE `personal_info` SET `track` = '".$track."',
                                    `name` = '".$name."',
                                    `father_name` = '".$fatherName."',
                                    `mother_name` = '".$motherName."',
                                    `religion` = '".$religion."',
                                    `dob` = '".$dob."',
                                    `gender` = '".$gender."',
                                    `nationality` = '".$nationality."',
                                    `nid` = '".$nid."',
                                    `email` = '".$email."',
                                    `mobile` = '".$mobile."',
                                    `hometown` = '".$hometown."',
                                    `current_city` = '".$currentCity."',
                                    `ssc_roll` = '".$sscRoll."',
                                    `ssc_board` = '".$sscBoard."',
                                    `ssc_year` = '".$sscYear."',
                                    `ssc_group` = '".$sscGroup."',
                                    `ssc_result` = '".$sscResult."',
                                    `hsc_roll` = '".$hscRoll."',
                                    `hsc_board` = '".$hscBoard."',
                                    `hsc_year` = '".$hscYear."',
                                    `hsc_group` = '".$hscGroup."',
                                    `hsc_result` = '".$hscResult."',
                                    `hons_year` = '".$honsYear."',
                                    `hons_subject` = '".$honsSubject."',
                                    `hons_result` = '".$honsResult."'

            WHERE `id` = $id;";


mysqli_query($dbConnection, $query);

header('location:list.php');
?>
