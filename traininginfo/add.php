<?php
//print_r($_POST);


$training_title = $_POST['training_title'];
<<<<<<< HEAD
$present_address = $_POST['present_address'];
$permanent_address = $_POST['permanent_address'];
$district = $_POST['district'];
$home_phone = $_POST['home_phone'];
$mobile = $_POST['mobile'];
$emergency_contact = $_POST['emergency_contact'];
$email = $_POST['email'];
$alternative_email = $_POST['alternative_email'];
$gender = $_POST['gender'];


$link = mysqli_connect("localhost", "root", "479874", "crud01");

$query = "INSERT INTO `crud01`.`traininginfo`(`training_title`, `permanent_address`, `district`, `home_phone`, `mobile`, `emergency_contact`, `email`, `alternative_email`, `gender`)
            VALUES ('$present_address', '$permanent_address', '$district', '$home_phone', '$mobile', '$emergency_contact', '$email', '$alternative_email', '$gender')";
=======
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
>>>>>>> dd1c2428e51392082af555555a0479e7fd0c452a
mysqli_query($link, $query);


header('location:list.php');
?>
