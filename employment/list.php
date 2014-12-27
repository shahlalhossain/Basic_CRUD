


<?php
$link = mysqli_connect("localhost", "root", "lict@2", "crud01");
$query = "SELECT * FROM deploment";
$result = mysqli_query($link, $query);
?>
<html>
<head>
    <title></title>
</head>
<body style="text-align: center;">
<ul>
    <li><a href="create.php">Create New Record</a> </li>
</ul>
<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>Company Name</td>
        <td>Company Business</td>
        <td>Designation</td>
        <td>Department</td>
        <td>Time From</td>
        <td>Time To</td>
        <td>Duration</td>
        <td>Responsibility</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['company_name']?></td>
            <td><?php echo $row['company_business']?></td>
            <td><?php echo $row['designation']?></td>
            <td><?php echo $row['department']?></td>
            <td><?php echo $row['timefrom']?></td>
            <td><?php echo $row['timeto']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['responsibilities']?></td>

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