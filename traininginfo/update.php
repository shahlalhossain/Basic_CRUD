<?php
//print_r($_POST);

$id = $_POST['id'];
<<<<<<< HEAD
$present_address = $_POST['present_address'];
$permanent_address = $_POST['permanent_address'];
$district = $_POST['district'];
$home_phone = $_POST['home_phone'];
$mobile = $_POST['mobile'];
$emergency_contact = $_POST['emergency_contact'];
$email = $_POST['email'];
$alternative_email = $_POST['alternative_email'];


$link = mysqli_connect("localhost", "root", "lict@2", "crud01");


$query = "UPDATE `crud01`.`contactinfo` SET `present_address` = '".$present_address."',
                                            `permanent_address` = '".$permanent_address."',
                                            `district` = '".$district."',
                                            `home_phone` = '".$home_phone."',
                                            `mobile` = '".$mobile."',
                                            `emergency_contact` = '".$emergency_contact."',
                                            `email` = '".$email."',
                                            `alternative_email` = '".$alternative_email."'
        WHERE `contactinfo`.`id` = $id;";
=======
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
>>>>>>> dd1c2428e51392082af555555a0479e7fd0c452a

mysqli_query($link, $query);

header('location:list.php');
?>
