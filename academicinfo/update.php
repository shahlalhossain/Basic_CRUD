<?php
$recordID           = $_POST['id'];

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

$query = "UPDATE `academicinfo` SET `level_of_education` = '".$level_of_education."',
                                    `exam_title` = '".$exam_title."',
                                    `subject_group` = '".$subject."',
                                    `institution` = '".$institution."',
                                    `result_type` = '".$result_type."',
                                    `result` = '".number_format($result, 2)."',
                                    `scale` = '".number_format($scale, 2)."',
                                    `passing_year` = '".$passing_year."',
                                    `duration` = '".$duration."',
                                    `achievements` = '".$achievements."'
        WHERE `id` = $recordID;";

mysqli_query($dbConnection, $query);

header('location:list.php');
?>