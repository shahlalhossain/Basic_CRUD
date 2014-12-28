<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "lict@2", "crud01");
$query = "select * from reference WHERE id = $id";
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

    <h3>Reference Information</h3>

    <label>Name: </label>
    <input type="text" name="name" value="<?php echo $row['name'];?>">
    <br>
    <label>Organization: </label>
    <input type="text" name="organization" value="<?php echo $row['organization'];?>">
    <br>

    <label>Permanent Address: </label>
    <textarea name="address" cols="40" rows="3"><?php echo $row['address'];?></textarea>
    <br>
    <label>Relation: </label>
    <input type="text" name="relation" value="<?php echo $row['relation'];?>" />
    <br>
    <label>Phone (Office): </label>
    <input type="text" name="office_phone" value="<?php echo $row['office_phone'];?>" />
    <br>
    <label>Phone (Home): </label>
    <input type="text" name="home_phone" value="<?php echo $row['home_phone'];?>" />
    <br>
    <label>Mobile: </label>
    <input type="text" name="mobile" value="<?php echo $row['mobile'];?>" />
    <br>
    <label>Email: </label>
    <input type="email" name="email" value="<?php echo $row['email'];?>" />
    <br>

    <button type="submit">Update</button>
</form>
</body>
</html>