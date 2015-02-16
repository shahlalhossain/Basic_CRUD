<?php
//print_r($_POST);

$trainingTitle  = $_POST['training_title'];
$description    = $_POST['description'];
$institute      = $_POST['institute'];
$address        = $_POST['address'];
$trainingYear   = $_POST['training_year'];
$startDate      = $_POST['start_date'];
$endDate        = $_POST['end_date'];
$duration       = $_POST['duration'];
$durationUnit   = $_POST['duration_unit'];

$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "basic_crud");

$query = "INSERT INTO `trainings`(`training_title`, `description`, `institute`, `address`, `training_year`, `start_date`, `end_date`, `duration`, `duration_unit`)
          VALUES ('$trainingTitle', '$description', '$institute', '$address', '$trainingYear', '$startDate', '$endDate', '$duration', '$durationUnit')";

mysqli_query($dbConnection, $query);

header('location:list.php');
?>
