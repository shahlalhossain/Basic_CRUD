<?php

$level_of_education = $_POST['level_of_education'];
$exam_title = $_POST['exam_title'];
$subject = $_POST['subject'];
$institution = $_POST['institution'];
$result_type = $_POST['result_type'];
$result = $_POST['result'];
$passing_year = $_POST['passing_year'];
$duration = $_POST['duration'];
$achievement = $_POST['achievement'];


$link = mysqli_connect("localhost", "root", "lict@2", "crud01");


$query = "UPDATE `crud01`.`academicinfo` SET `level_of_education` = '".$level_of_education."',
                                            `exam_title` = '".$exam_title."',
                                            `subject` = '".$subject."',
                                            `institution` = '".$institution."',
                                            `result_type` = '".$result_type."',
                                            `result` = '".$result."',
                                            `passing_year` = '".$passing_year."',
                                            `duration` = '".$duration."',
                                            `achievement` = '".$achievement."'
        WHERE `academicinfo`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');
?>
