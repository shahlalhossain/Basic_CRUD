<?php

$code = $_GET['code'];

$link = mysqli_connect("localhost", "root", "lict@2", "ftfl2nd");

$query = "DELETE FROM `ftfl2nd`.`trainee` WHERE `trainee`.`code` = $code";

mysqli_query($link, $query);

header('location:all.php');

?>
