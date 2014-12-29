


<?php

//print_r($_POST);

$link = mysqli_connect("localhost", "root", "lict@2", "crud01");
$query = "SELECT * FROM academicinfo";
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
        <td>Level of Education</td>
        <td>Exam Title</td>
        <td>Subject</td>
        <td>Institution</td>
        <td>Result Type</td>
        <td>Result</td>
        <td>Passing Year</td>
        <td>Course Duration</td>
        <td>Achievement</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['level_of_education']?></td>
            <td><?php echo $row['exam_title']?></td>
            <td><?php echo $row['subject']?></td>
            <td><?php echo $row['institution']?></td>
            <td><?php echo $row['result_type']?></td>
            <td><?php echo $row['result']?></td>
            <td><?php echo $row['passing_year']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['achievement']?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |
                <a href="view.php?id=<?php echo $row['id']?>">View</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
</body>
</html>