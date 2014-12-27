<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "lict@2", "crud01");
$query = "select * from traininginfo WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

//var_dump($row ['present_address']);

?>

<html>
<head>
    <title></title>
</head>


<body style="text-align: center; width: 100%; height: 100%;">
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <h3>Training Detail</h3>

    <label>Training Title: </label>
    <input type="text" name="training_title" value="<?php echo $row['training_title'];?>" />
    <br>
    <label>Training Description: </label>
    <textarea name="description" cols="40" rows="3"><?php echo $row['description'];?></textarea>
    <br>
    <label>Institute: </label>
    <input type="text" name="institute" value="<?php echo $row['institute'];?>" />
    <br>
    <label>Address: </label>
    <textarea name="address" cols="40" rows="3"><?php echo $row['address'];?></textarea>
    <br>
    <label>Training Year: </label>
    <input type="text" name="training_year" value="<?php echo $row['training_year'];?>" />
    <br>
    <label>Duration (in days): </label>
    <input type="text" name="duration" value="<?php echo $row['duration'];?>" />
    <br>

    <h3>Training Detail</h3>

    <label>Start Date: </label>
    <input type="text" name="start_date" value="<?php echo $row['start_date'];?>" />
    <br>
    <label>End Date: </label>
    <input type="text" name="end_date" value="<?php echo $row['end_date'];?>" />
    <br>
    <label>Course Title: </label>
    <input type="text" name="course_title" value="<?php echo $row['course_title'];?>" />
    <br>
    <label>Trainer Detail: </label>
    <textarea name="trainer_detail" cols="40" rows="3"><?php echo $row['trainer_detail'];?></textarea>
    <br>

    <button type="submit">Update</button>
</form>
</body>
</html>
