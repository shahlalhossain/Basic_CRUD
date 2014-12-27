<?php
//print_r($_POST);

$id = $_POST['id'];
$company_name = $_POST['company_name'];
$company_business = $_POST['company_business'];
$address = $_POST['address'];
$designation = $_POST['designation'];
$department = $_POST['department'];
$timefrom = $_POST['timefrom'];
$timeto = $_POST['timeto'];
$duration = $_POST['duration'];
$responsibilities = $_POST['responsibilities'];


$link = mysqli_connect("localhost", "root", "lict@2", "crud01");


$query = "UPDATE `crud01`.`deploment` SET `company_name` = '".$company_name."',
                                            `company_business` = '".$company_business."',
                                            `address` = '".$address."',
                                            `designation` = '".$designation."',
                                            `department` = '".$department."',
                                            `timefrom` = '".$timefrom."',
                                            `timeto` = '".$timeto."',
                                            `duration` = '".$duration."',
                                            `responsibilities` = '".$responsibilities."'
        WHERE `deploment`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');
?>
