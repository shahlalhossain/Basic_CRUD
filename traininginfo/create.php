
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body style="text-align: center; width: 100%; height: 100%;">
<form action="add.php" method="POST">

    <h3>Training Detail</h3>

    <label>Training Title: </label>
    <input type="text" name="training_title" />    
    <br>
    <label>Training Description: </label>
    <textarea name="description" cols="40" rows="3" ></textarea>
    <br>
    <label>Institute: </label>
    <input type="text" name="institute" />
    <br>
    <label>Address: </label>
    <textarea name="address" cols="40" rows="3" ></textarea>
    <br>
    <label>Training Year: </label>
    <input type="text" name="training_year" />
    <br>
    <label>Duration (in days): </label>
    <input type="text" name="duration" />
    <br>
    
    <h3>Training Detail</h3>
 
    <label>Start Date: </label>
    <input type="text" name="start_date" />
    <br>
    <label>End Date: </label>
    <input type="text" name="end_date" />
    <br>
    <label>Course Title: </label>
    <input type="text" name="course_title" />
    <br>
    <label>Trainer Detail: </label>
    <textarea name="trainer_detail" cols="40" rows="3" ></textarea>
    <br>

    <button type="submit">Submit</button>
</form>
</body>
</html>
