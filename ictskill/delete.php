<?php
$recordID = $_GET['id'];
$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "basic_crud");
if ($dbConnection) {
    $query = "DELETE FROM `ict_skills` WHERE id = $recordID";
    $result = mysqli_query($dbConnection, $query);
    header('location:list.php');
} elseif (mysqli_connect_errno()) {
    echo "Failed to connect to MysQL Database: " . mysqli_connect_error();
} else {
    echo 'Please Check Your Database Connection';
}
?>

