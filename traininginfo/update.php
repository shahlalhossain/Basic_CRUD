<?php
//print_r($_POST);

$recordID = $_POST['id'];

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

$query = "UPDATE `trainings` SET `training_title` = '".$trainingTitle."',
                                            `description` = '".$description."',
                                            `institute` = '".$institute."',
                                            `address` = '".$address."',
                                            `training_year` = '".$trainingYear."',
                                            `start_date` = '".$startDate."',
                                            `end_date` = '".$endDate."',
                                            `duration` = '".$duration."',
                                            `duration_unit` = '".$durationUnit."'
            WHERE `id` = $recordID";

mysqli_query($dbConnection, $query);

header('location:list.php');
?>
