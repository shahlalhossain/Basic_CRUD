


<?php
$link = mysqli_connect("localhost", "root", "lict@2", "crud01");
$query = "SELECT * FROM traininginfo";
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
        <td>Training Title</td>
        <td>Description</td>
        <td>Institute</td>
        <td>Address</td>
        <td>Training Year</td>
        <td>Duration</td>
        <td>Start Date</td>
        <td>End Date</td>
        <td>Course Title</td>
        <td>Trainer Detail</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['training_title']?></td>
            <td><?php echo $row['description']?></td>
            <td><?php echo $row['institute']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['training_year']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['start_date']?></td>
            <td><?php echo $row['end_date']?></td>
            <td><?php echo $row['course_title']?></td>
            <td><?php echo $row['trainer_detail']?></td>
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