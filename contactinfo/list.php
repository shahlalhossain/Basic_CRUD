<?php include("index.php") ?>


<?php
$link = mysqli_connect("localhost", "root", "lict@2", "crud01");
$query = "SELECT * FROM contactinfo";
$result = mysqli_query($link, $query);
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
            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |
                <a href="view.php?id=<?php echo $row['id']?>">View</a></td>
        </tr>
    <?php
    }
    ?>
</table>
</body>
</html>