<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "lict@2", "crud01");
$query = "select * from ictskill WHERE id = $id";
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

    <h3>ICT Skills Information</h3>

    <label> Experience Category: </label>
    <select name="exp_category">
        <option value="Computer Engineering" selected>Computer Engineering</option>
        <option>--------------------</option>
        <option>--------------------</option>
        <option>--------------------</option>
    </select>
    <br>
    <label>Skill: </label>
    <select name="skill">
        <option selected>Choose Your Skilled Field</option>
        <option <?php if ($row['skill'] == "Programming") echo 'selected'; ?> value="Programming">Programming</option>
        <option <?php if ($row['skill'] == "Programming 123") echo 'selected'; ?> value="Programming 123">Programming 123</option>
        <option <?php if ($row['skill'] == "Programming ABC") echo 'selected'; ?> value="Programming ABC">Programming ABC</option>
        <option <?php if ($row['skill'] == "Programming XYZ") echo 'selected'; ?> value="Programming XYZ">Programming XYZ</option>
        <option <?php if ($row['skill'] == "Database") echo 'selected'; ?> value="Database">Database</option>
        <option <?php if ($row['skill'] == "Database 123") echo 'selected'; ?> value="Database">Database 123</option>
        <option <?php if ($row['skill'] == "Database ABC") echo 'selected'; ?> value="Database">Database ABC</option>
        <option <?php if ($row['skill'] == "Database XYZ") echo 'selected'; ?> value="Database">Database XYZ</option>
        <option <?php if ($row['skill'] == "XPath/JQuery/XLink/XPointer") echo 'selected'; ?> value="XPath/JQuery/XLink/XPointer">XPath/JQuery/XLink/XPointer</option>
    </select>
    <br>

    <label>Skill Description: </label>
    <textarea name="skill_description" cols="40" rows="3"><?php echo $row['skill_description'];?></textarea>
    <br>

    <label> Extracurricular Activities: </label>
    <textarea name="extr_activity" cols="40" rows="3"><?php echo $row['extr_activity'];?></textarea>
    <br>

    <button type="submit">Update</button>
</form>
</body>
</html>