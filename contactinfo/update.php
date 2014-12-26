<?php
//print_r($_POST);

$id = $_GET['id'];
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
                                                  `alternative_email` = '".$alternative_email."',
        WHERE `contactinfo`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');
?>
