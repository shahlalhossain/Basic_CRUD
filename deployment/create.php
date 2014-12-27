
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body style="text-align: center; width: 100%; height: 100%;">
<form action="add.php" method="POST">

    <h3>Employment Information</h3>

    <label>Company Name: </label>
    <input type="text" name="company_name" />
    <br>
    <label>Company Business: </label>
    <input type="text" name="company_business" />
    <br>
    <label>Adress: </label>
    <textarea name="address" cols="40" rows="3" ></textarea>
    <br>
    <label>Designation: </label>
    <input type="text" name="designation" />
    <br>
    <label>Department: </label>
    <input type="text" name="department" />
    <br>
    <label>From: </label>
    <input type="date" name="timefrom" />
    <br>
    <label>To: </label>
    <input type="date" name="timeto" />
    <br>
    <label>Employment Duration: </label>
    <input type="text" name="duration" />
    <br>
    <label>Responsibilities: </label>
    <textarea name="responsibilities" cols="40" rows="3" ></textarea>
    <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>
