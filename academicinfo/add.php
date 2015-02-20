<?php
//print_r($_POST);

$level_of_education = $_POST['level_of_education'];
$exam_title         = $_POST['exam_title'];
$subject            = $_POST['subject_group'];
$institution        = $_POST['institution'];
$result_type        = $_POST['result_type'];
$result             = $_POST['result'];
$scale              = $_POST['scale'];
$passing_year       = $_POST['passing_year'];
$duration           = $_POST['duration'];
$achievements       = $_POST['achievements'];


$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "basic_crud");

$query = "INSERT INTO `academic_info`(`level_of_education`, `exam_title`, `subject_group`, `institution`, `result_type`, `result`, `scale`, `passing_year`, `duration`, `achievements`)
            VALUES ('$level_of_education', '$exam_title', '$subject', '$institution', '$result_type', '$result', '$scale', '$passing_year', '$duration', '$achievements')";

mysqli_query($dbConnection, $query);


header('location:list.php');
?>