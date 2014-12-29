<?php include("index.php") ?>

<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "lict@2", "crud01");
$query = "select * from contactinfo WHERE id = $id";
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

    <h3>Contact Information</h3>

    <label>Present Adress: </label>
    <textarea name="present_address"><?php echo $row['present_address'];?></textarea>
    <br>
    <label>Permanent Address: </label>
    <textarea name="permanent_address"><?php echo $row['permanent_address'];?></textarea>
    <br>
    <label>District: </label>
    <select name="district">

        <option <?php if ($row['district'] == "Dhaka") echo 'selected'; ?> value="Dhaka">Dhaka</option>
        <option <?php if ($row['district'] == "Rajshahi") echo 'selected'; ?>  value="Rajshahi">Rajshahi</option>
        <option <?php if ($row['district'] == "Jessore") echo 'selected'; ?>  value="Jessore">Jessore</option>
        <option <?php if ($row['district'] == "Barisal") echo 'selected'; ?>  value="Barisal">Barisal</option>
        <option <?php if ($row['district'] == "Chittagong") echo 'selected'; ?>  value="Chittagong">Chittagong</option>
        <option <?php if ($row['district'] == "Sylhet") echo 'selected'; ?>  value="Sylhet">Sylhet</option>
        <option <?php if ($row['district'] == "Comilla") echo 'selected'; ?>  value="Comilla">Comilla</option>
        <option <?php if ($row['district'] == "Dinajpur") echo 'selected'; ?>  value="Dinajpur">Dinajpur</option>
        <option <?php if ($row['district'] == "Rangpur") echo 'selected'; ?>  value="Rangpur">Rangpur</option>
        <option <?php if ($row['district'] == "Other City") echo 'selected'; ?>  value="Other City">Other</option>

    </select>
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

    <label>Gender: </label>
    <input type="radio" name="gender" <?php if ($row['gender'] == "Male") echo 'checked'; ?> value="Male" />Male
    <input type="radio" name="gender" <?php if ($row['gender'] == "Female") echo 'checked'; ?> value="Female" />Female
    <br>

    <button type="submit">Update</button>
</form>
</body>
</html>