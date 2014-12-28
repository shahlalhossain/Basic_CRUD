<?php
//print_r($_POST);

$id = $_POST['id'];

$exp_category = $_POST['exp_category'];
$skill = $_POST['skill'];
$skill_description= $_POST['skill_description'];
$extr_activity = $_POST['extr_activity'];


$link = mysqli_connect("localhost", "root", "lict@2", "crud01");


$query = "UPDATE `crud01`.`ictskill` SET `exp_category` = '".$exp_category."',
                                            `skill` = '".$skill."',
                                            `skill_description` = '".$skill_description."',
                                            `extr_activity` = '".$extr_activity."'
    WHERE `ictskill`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');
?>
