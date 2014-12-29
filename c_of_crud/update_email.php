<?php


print_r($_POST);

$id = $_GET['id'];

$email = $_POST['email'];


$link = mysqli_connect("localhost", "root", "lict@2", "crud01");


$query = "UPDATE `crud01`.`cofcrud` SET `email` = '".$email."'
                                    WHERE `cofcrud`.`id` = $id;";

mysqli_query($link, $query);

//header('location:all_email.php');
?>
