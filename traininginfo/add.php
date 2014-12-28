<?php
//print_r($_POST);


$training_title = $_POST['training_title'];
$description = $_POST['description'];
$institute = $_POST['institute'];
$address = $_POST['address'];
$training_year = $_POST['training_year'];
$duration = $_POST['duration'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$course_title = $_POST['course_title'];
$trainer_detail = $_POST['trainer_detail'];


$link = mysqli_connect("localhost", "root", "lict@2", "crud01");

$query = "INSERT INTO `crud01`.`traininginfo`(`training_title`, `description`, `institute`, `address`, `training_year`, `duration`, `start_date`, `end_date`, `course_title`, `trainer_detail`)
                                      VALUES ('$training_title', '$description', '$institute', '$address', '$training_year', '$duration', '$start_date', '$end_date', '$course_title', '$trainer_detail')";

mysqli_query($link, $query);


header('location:list.php');
?>
