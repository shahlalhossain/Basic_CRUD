<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "lict@2", "crud01");
$query = "select * from academicinfo WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

//var_dump($row ['id']);

?>

<html>
<head>
    <title></title>
</head>


<body style="text-align: center; width: 100%; height: 100%;">
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <h3>Contact Information</h3>

    <label>Level of Education: </label>
    Diploma<input type="radio" name="level_of_education" <?php if($row['level_of_education'] == "Diploma") echo 'checked'; ?> value="Diploma">
    Bachelor<input type="radio" name="level_of_education" <?php if($row['level_of_education'] == "Bachelor") echo 'checked'; ?> value="Bachelor">
    Masters<input type="radio" name="level_of_education" <?php if($row['level_of_education'] == "Masters") echo 'checked'; ?> value="Masters">
    Doctoral<input type="radio" name="level_of_education" <?php if($row['level_of_education'] == "Doctoral") echo 'checked'; ?> value="Doctoral">
    <br>

    <label>Exam Title: </label>
    <input type="text" name="exam_title" value="<?php echo $row['exam_title'];?>" />
    <br>
    <label>Subject/Group: </label>
    <input type="text" name="subject" value="<?php echo $row['subject'];?>" />
    <br>
    <label>Institution: </label>
    <select name="institution">
        <option <?php if ($row['institution'] == "BUET") echo 'selected'; ?> value="BUET">BUET</option>
        <option <?php if ($row['institution'] == "RUET") echo 'selected'; ?> value="RUET">RUET</option>
        <option <?php if ($row['institution'] == "KUET") echo 'selected'; ?> value="KUET">KUET</option>
        <option <?php if ($row['institution'] == "CHUET") echo 'selected'; ?> value="CHUET">CHUET</option>
        <option <?php if ($row['institution'] == "BUET AAA") echo 'selected'; ?> value="BUET AAA">BUET AAA</option>
        <option <?php if ($row['institution'] == "BUET BBB") echo 'selected'; ?> value="BUET BBB">BUET BBB</option>
        <option <?php if ($row['institution'] == "BUET CCC") echo 'selected'; ?> value="BUET CCC">BUET CCC</option>
        <option <?php if ($row['institution'] == "BUET DDD") echo 'selected'; ?> value="BUET DDD">BUET DDD</option>
    </select>
    <br>
    <label>Result Type: </label>
    <select name="result_type">
        <option <?php if ($row['result_type'] == "Grade") echo 'selected'; ?> value="Grade">Grade</option>
        <option <?php if ($row['result_type'] == "Other") echo 'selected'; ?> value="Other">Other</option>
    </select>
    <br>

    <label>Result: </label>
    <input type="text" name="result" value="<?php echo $row['result'];?>" >Scale<input type="text" value="4.00">
    <br>

    <label>Passing Year: </label>
    <input type="text" name="passing_year" value="<?php echo $row['passing_year'];?>" />
    <br>

    <label>Duration (in Year) :</label>
    <input type="text" name="duration" value="<?php echo $row['duration'];?>" />
    <br>

    <label>Achievement :</label>
    <textarea name="achievement"><?php echo $row['achievement'];?>"</textarea>
    <br>

    <button type="submit">Update</button>
</form>
</body>
</html>