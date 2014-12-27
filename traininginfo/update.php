<?php
//print_r($_POST);

$id = $_POST['id'];
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

$query = "UPDATE `crud01`.`traininginfo` SET `training_title` = '".$training_title."',
                                            `description` = '".$description."',
                                            `institute` = '".$institute."',
                                            `address` = '".$address."',
                                            `training_year` = '".$training_year."',
                                            `duration` = '".$duration."',
                                            `start_date` = '".$start_date."',
                                            `end_date` = '".$end_date."',
                                            `course_title` = '".$course_title."',
                                            `trainer_detail` = '".$trainer_detail."'
        WHERE `traininginfo`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');
?>
