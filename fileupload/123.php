<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>


<form action="add.php" method="post" enctype="multipart/form-data">
    Choose your file here:
    <input name="file1" type="file" /><br /><br />
    <input type="submit" value="Upload It" />
</form>

</body>
</html>




<form enctype="multipart/form-data" action="add.php" method="POST">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name = "email"><br>
    Phone: <input type="text" name = "phone"><br>
    Photo: <input type="file" name="photo"><br>
    <input type="submit" value="Add">
</form>
