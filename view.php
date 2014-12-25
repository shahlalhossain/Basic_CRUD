<?php

$code = $_GET['code'];

$link = mysqli_connect("localhost", "root", "lict@2", "ftfl2nd");

$query = "SELECT * FROM trainee WHERE code = $code";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//print_r($row);
?>

<html>
<head>
    <title></title>
</head>

<body style="text-align: center;">

<ul>
    <li><a href="add.html">Create New Record</a> </li>
    <li><a href="all.php">View All Participant</a> </li>
    <li><a href="search.php">Search By ID</a> </li>
</ul>


<table border="1">
    <tr>
        <td>Code</td>
        <td>Track</td>
        <td>Name</td>
        <td>F. Name</td>
        <td>M. Name</td>
        <td>Religion</td>
        <td>DOB</td>
        <td>Gender</td>
        <td>Nationality</td>
        <td>National ID</td>
        <td>Email</td>
        <td>Mobile</td>
        <td>Home Town</td>
        <td>Current City</td>
        <td>S.S.C Roll</td>
        <td>S.S.C Board</td>
        <td>S.S.C Passing Year</td>
        <td>S.S.C Group</td>
        <td>S.S.C Result</td>
        <td>H.S.C Roll</td>
        <td>H.S.C Board</td>
        <td>H.S.C Passing Year</td>
        <td>H.S.C Group</td>
        <td>H.S.C Result</td>
        <td>Honers Subject</td>
        <td>Honers Result</td>
        <td>Bangla Proficiency</td>
        <td>English Proficiency</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['code']?></td>
            <td><?php echo $row['track']?></td>
            <td><?php echo $row['fullname']?></td>
            <td><?php echo $row['fathername']?></td>
            <td><?php echo $row['mothername']?></td>
            <td><?php echo $row['religion']?></td>
            <td><?php echo $row['dob']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['nationality']?></td>
            <td><?php echo $row['nationalid']?></td>
            <td><?php echo $row['useremail']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['hometown']?></td>
            <td><?php echo $row['currentcity']?></td>
            <td><?php echo $row['sscroll']?></td>
            <td><?php echo $row['sscboard']?></td>
            <td><?php echo $row['sscyear']?></td>
            <td><?php echo $row['sscgroup']?></td>
            <td><?php echo $row['sscresult']?></td>
            <td><?php echo $row['hscroll']?></td>
            <td><?php echo $row['hscboard']?></td>
            <td><?php echo $row['hscyear']?></td>
            <td><?php echo $row['hscgroup']?></td>
            <td><?php echo $row['hscresult']?></td>
            <td><?php echo $row['honssubject']?></td>
            <td><?php echo $row['honsresult']?></td>
            <td><?php echo $row['bangla']?></td>
            <td><?php echo $row['english']?></td>

            <td> <a href="#">Edit</a> | <a href="delete.php?code=<?php echo $row['code']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>

</table>

</body>
</html>
