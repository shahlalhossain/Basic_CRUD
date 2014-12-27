<?php
//print_r($_POST);


$exp_category = $_POST['exp_category'];
$skill = $_POST['skill'];
$skill_description= $_POST['skill_description'];
$extr_activity = $_POST['extr_activity'];

$link = mysqli_connect("localhost", "root", "lict@2", "crud01");

$query = "INSERT INTO `crud01`.`ictskill`(`exp_category`, `skill`, `skill_description`, `extr_activity`)
                              VALUES ('$exp_category', '$skill', '$skill_description', '$extr_activity')";
mysqli_query($link, $query);


header('location:list.php');
?>