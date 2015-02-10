<?php
//print_r($_POST);

$level_of_education = $_POST['level_of_education'];
$exam_title         = $_POST['exam_title'];
$subject            = $_POST['subject_group'];
$institution        = $_POST['institution'];
$result_type        = $_POST['result_type'];
$result             = $_POST['result'];
$passing_year       = $_POST['passing_year'];
$duration           = $_POST['duration'];
$achievement        = $_POST['achievement'];


$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "basic_crud");

$query = "INSERT INTO `academicinfo`(`level_of_education`, `exam_title`, `subject`, `institution`, `result_type`, `result`, `passing_year`, `duration`, `achievement`)
            VALUES ('$level_of_education', '$exam_title', '$subject', '$institution', '$result_type', '$result', '$passing_year', '$duration', '$achievement')";

mysqli_query($dbConnection, $query);


header('location:list.php');
?>