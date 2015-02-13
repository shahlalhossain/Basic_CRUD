<?php

$skillCategory      = $_POST['skill_category'];
$skillSubject       = $_POST['skill_subject'];
$experiencePeriod   = $_POST['experience_period'].' '.$_POST['experience_period_unit'];
$description        = $_POST['description'];
$skillUsage         = $_POST['skill_usage'];

$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "basic_crud");

$query = "INSERT INTO `ict_skills`(`skill_category`, `skill_subject`, `experience`, `description`, `skill_usage`)
                              VALUES ('$skillCategory', '$skillSubject', '$experiencePeriod', '$description', '$skillUsage')";
mysqli_query($dbConnection, $query);
header('location:list.php');
?>