<?php

$recordID = $_POST['id'];

$skillCategory          = $_POST['skill_category'];
$skillSubject           = $_POST['skill_subject'];
$experiencePeriod       = $_POST['experience_period'];
$experiencePeriodUnit   = $_POST['experience_period_unit'];
$description            = $_POST['description'];
$skillUsage             = $_POST['skill_usage'];

$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "basic_crud");

$query = "UPDATE `ict_skills` SET `skill_category` = '".$skillCategory."',
                                         `skill_subject` = '".$skillSubject."',
                                         `experience` = '".$experiencePeriod."',
                                         `experience_unit` = '".$experiencePeriodUnit."',
                                         `description` = '".$description."',
                                         `skill_usage` = '".$skillUsage."'
        WHERE `id` = $recordID;";

mysqli_query($dbConnection, $query);

header('location:list.php');
?>
