<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "lict@2", "crud01");
$query = "select * from contactinfo WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
    <title></title>
</head>


<body style="text-align: center; width: 100%; height: 100%;">
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <h3>Contact Information</h3>

    <label>Present Adress: </label>
    <input type="text" name="present_address" value="<?php echo $row['present_address'];?>" />
    <br>
    <label>Permanent Address: </label>
    <input type="text" name="permanent_address" value="<?php echo $row['permanent_address'];?>">
    <br>
    <label>District: </label>
    <input type="text" name="district" value="<?php echo $row['district'];?>" />
    <br>
    <label>Home Phone: </label>
    <input type="text" name="home_phone" value="<?php echo $row['home_phone'];?>" />
    <br>
    <label>Mobile: </label>
    <input type="text" name="mobile" value="<?php echo $row['mobile'];?>" />
    <br>
    <label>Emergency Contact: </label>
    <input type="text" name="emergency_contact" value="<?php echo $row['emergency_contact'];?>" />
    <br>
    <label>Email: </label>
    <input type="text" name="email" value="<?php echo $row['email'];?>" />
    <br>
    <label>Alternate Email: </label>
    <input type="text" name="alternative_email" value="<?php echo $row['alternative_email'];?>" />
    <br>
    <button type="submit">Update</button>
</form>
</body>
</html>