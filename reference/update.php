<?php
//print_r($_POST);

$id = $_POST['id'];
$name = $_POST['name'];
$organization = $_POST['organization'];
$address = $_POST['address'];
$relation = $_POST['relation'];
$office_phone = $_POST['office_phone'];
$home_phone = $_POST['home_phone'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

$link = mysqli_connect("localhost", "root", "lict@2", "crud01");


$query = "UPDATE `crud01`.`reference` SET `name` = '".$name."',
                                            `organization` = '".$organization."',
                                            `address` = '".$address."',
                                            `relation` = '".$relation."',
                                            `office_phone` = '".$office_phone."',
                                            `home_phone` = '".$home_phone."',
                                            `mobile` = '".$mobile."',
                                            `email` = '".$email."'
    WHERE `reference`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');
?>
