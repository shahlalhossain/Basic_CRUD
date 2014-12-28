<?php
$id = $_GET['id'];

$link = mysqli_connect("localhost", "root", "lict@2", "crud01");

$query = "SELECT * FROM cofcrud WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//print_r($row);

?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body style="text-align: center; width: 100%; height: 100%;">

<form action="update_email.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>Email: </label>
    <input type="text" name="email" value="<?php echo $row['email'];?>" />
    <br>

    <button type="submit">Update</button>
</form>

</body>
</html>