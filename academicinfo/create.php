
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body style="text-align: center; width: 100%; height: 100%;">
<form action="add.php" method="POST">

    <h3>Academic Information</h3>

    <label>Level of Education: </label>
    Diploma<input type="radio" name="level_of_education" value="Diploma">
    Bachelor<input type="radio" name="level_of_education" value="Bachelor">
    Masters<input type="radio" name="level_of_education" value="Masters">
    Doctoral<input type="radio" name="level_of_education" value="Doctoral">
    <br>

    <label>Exam Title: </label>
    <input type="text" name="exam_title" />
    <br>
    <label>Subject/Group: </label>
    <input type="text" name="subject" />
    <br>
    <label>Institution: </label>
    <select name="institution">
        <option value="BUET">BUET</option>
        <option value="RUET">RUET</option>
        <option value="KUET">KUET</option>
        <option value="CHUET">CHUET</option>
        <option value="BUET AAA">BUET AAA</option>
        <option value="BUET BBB">BUET BBB</option>
        <option value="BUET CCC">BUET CCC</option>
        <option value="BUET DDD">BUET DDD</option>
        <option value="BUET EEE">BUET EEE</option>
        <option value="BUET FFF">BUET FFF</option>
        <option value="BUET GGG">BUET GGG</option>
        <option value="BUET HHH">BUET HHH</option>
        <option value="BUET KKK">BUET KKK</option>
        <option value="BUET PPP">BUET PPP</option>
        <option value="BUET MMM">BUET MMM</option>
        <option value="BUET YYY">BUET YYY</option>
        <option value="BUET ZZZ">BUET ZZZ</option>
    </select>
    <br>
    <label>Result Type: </label>
    <select name="result_type">
        <option value="Grade" selected>Grade</option>
        <option value="Other">Other</option>
    </select>
    <br>

    <label>Result: </label>
    <input type="text" name="result" >Scale<input type="text" value="4.00">
    <br>

    <label>Passing Year: </label>
    <input type="text" name="passing_year" />
    <br>

    <label>Duration (in Year) :</label>
    <input type="text" name="duration" />
    <br>

    <label>Achievement :</label>
    <textarea name="achievement" rows="5" cols="15"></textarea>
    <br>

    <button type="submit">Submit</button>
</form>
</body>
</html>