<?php
$recordID = $_GET['id'];
$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "basic_crud");
if ($dbConnection && $recordID) {
    $query  = "SELECT * FROM contactinfo WHERE id = $recordID";
    $result = mysqli_query($dbConnection, $query);
    $record = mysqli_fetch_assoc($result);
} elseif (mysqli_connect_errno()) {
    echo "Failed to connect to MysQL Database: " . mysqli_connect_error();
} else {
    echo 'Please Check Your Database Connection';
}
?>

<html>
<head>
    <title></title>
</head>
<body style="text-align: center;">

<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>Present Address</td>
        <td>Permanent address</td>
        <td>District</td>
        <td>Home Phone</td>
        <td>Mobile</td>
        <td>Emergency Contact</td>
        <td>Email</td>
        <td>Alternative Email</td>
        <td>Gender</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['present_address']?></td>
            <td><?php echo $row['permanent_address']?></td>
            <td><?php echo $row['district']?></td>
            <td><?php echo $row['home_phone']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['emergency_contact']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['alternative_email']?></td>
            <td><?php echo $row['gender']?></td>
            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |
        </tr>
    <?php
    }
    ?>
</table>
</body>
</html>