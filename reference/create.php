
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body style="text-align: center; width: 100%; height: 100%;">
<form action="add.php" method="POST">

    <h3>Reference Information</h3>

    <label>Name: </label>
    <input type="text" name="name">
    <br>
    <label>Organization: </label>
    <input type="text" name="organization">
    <br>

    <label>Permanent Address: </label>
    <textarea name="address" cols="40" rows="3" ></textarea>
    <br>
    <label>Relation: </label>
    <input type="text" name="relation" />
    <br>
    <label>Phone (Office): </label>
    <input type="text" name="office_phone" />
    <br>
    <label>Phone (Home): </label>
    <input type="text" name="home_phone" />
    <br>
    <label>Mobile: </label>
    <input type="text" name="mobile" />
    <br>
    <label>Email: </label>
    <input type="email" name="email" />
    <br>

    <button type="submit">Submit</button>
</form>
</body>
</html>