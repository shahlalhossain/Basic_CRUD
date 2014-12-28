
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body style="text-align: center; width: 100%; height: 100%;">
<form action="add.php" method="POST">

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
        <option value="Programming">Programming</option>
        <option value="Programming 123">Programming 123</option>
        <option value="Programming ABC">Programming ABC</option>
        <option value="Programming XYZ">Programming XYZ</option>
        <option value="Database">Database</option>
        <option value="Database 123">Database 123</option>
        <option value="Database ABC">Database ABC</option>
        <option value="Database XYZ">Database XYZ</option>
        <option value="XPath/JQuery/XLink/XPointer">XPath/JQuery/XLink/XPointer</option>
    </select>
    <br>

    <label>Skill Description: </label>
    <textarea name="skill_description" cols="40" rows="3" ></textarea>
    <br>

    <label> Extracurricular Activities: </label>
    <textarea name="extr_activity" cols="40" rows="3" ></textarea>
    <br>

    <button type="submit">Submit</button>
</form>
</body>
</html>