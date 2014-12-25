<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "479874", "crud01");
$query = "select * from personalinfo WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
    <title></title>
</head>


<body style="text-align: center; width: 100%; height: 100%;">
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <h3>Personal Information</h3>

    <label>Access Code: </label>
    <input type="text" name="code" value="<?php echo $row['code'];?>" />
    <br>
    <label>Preferred Track: </label>
    <select name="track" value="<?php echo $row['track'];?>">
        <option selected>Select Your Track</option>
        <option value="ITS">ITS</option>
        <option value="ITES">ITES</option>
        <option value="ITSS">ITSS</option>
    </select>
    <br>
    <label>Full Name: </label>
    <input type="text" name="fullname" value="<?php echo $row['fullname'];?>" />
    <br>
    <label>Father's Name: </label>
    <input type="text" name="fathername" value="<?php echo $row['fathername'];?>" />
    <br>
    <label>Mother's Name: </label>
    <input type="text" name="mothername" value="<?php echo $row['mothername'];?>" />
    <br>
    <label>Religion: </label>
    <select name="religion" value="<?php echo $row['religion'];?>">
        <option selected>Select Your Religion</option>
        <option value="Muslim">Muslim</option>
        <option value="Hinduism">Hinduism</option>
        <option value="Christian">Christian</option>
        <option value="Buddhism">Buddhism</option>
        <option value="Jesus">Jesus</option>
        <option value="Other">Other</option>
    </select>
    <br>
    <label>Date of Birth: </label>
    <input type="text" name="dob" value="<?php echo $row['dob'];?>" />
    <br>
    <label>Gender: </label>
    <input type="radio" name="gender" value="Male" />Male
    <input type="radio" name="gender" value="Female" />Female
    <br>
    <label>Nationality: </label>
    <input type="text" name="nationality" value="<?php echo $row['nationality'];?>" />
    <br>
    <label>National ID Number: </label>
    <input type="text" name="nationalid" value="<?php echo $row['nationalid'];?>" />
    <br>
    <label>User Email: </label>
    <input type="text" name="useremail" value="<?php echo $row['useremail'];?>" />
    <br>
    <label>Contact Number: </label>
    <input type="text" name="mobile" value="<?php echo $row['mobile'];?>" />
    <br>
    <label>Home Town: </label>
    <input type="text" name="hometown" value="<?php echo $row['hometown'];?>" />
    <br>
    <label>Current City: </label>
    <input type="text" name="currentcity" value="<?php echo $row['currentcity'];?>" />
    <br>

    <h3>Academic Information (S.S.C)</h3>

    <label>S.S.C Exam Roll: </label>
    <input type="text" name="sscroll" value="<?php echo $row['sscroll'];?>" />
    <br>
    <label>S.S.C Board: </label>
    <select name="sscboard">
        <option selected>Select Your Board</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Jessore">Jessore</option>
        <option value="Barisal">Barisal</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Sylhet">Sylhet</option>
        <option value="Comilla">Comilla</option>
        <option value="Dinajpur">Dinajpur</option>
        <option value="Other">Other</option>
    </select>
    <br>
    <label>S.S.C Passing Year: </label>
    <select name="sscyear">
        <option selected>Select Year</option>
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
    </select>
    <br>
    <label>S.S.C Group: </label>
    <select name="sscgroup">
        <option selected>Select Your Group</option>
        <option value="Science">Science</option>
        <option value="Arts">Arts</option>
        <option value="Commerce">Commerce</option>
        <option value="Other">Other</option>
    </select>
    <br>
    <label>S.S.C Result (GPA/Division): </label>
    <input type="text" name="sscresult" value="<?php echo $row['sscresult'];?>" />
    <br>

    <h3>Academic Information (H.S.C)</h3>

    <label>H.S.C Exam Roll: </label>
    <input type="text" name="hscroll" value="<?php echo $row['hscroll'];?>" />
    <br>
    <label>H.S.C Board: </label>
    <select name="hscboard">
        <option selected>Select Your Board</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Jessore">Jessore</option>
        <option value="Barisal">Barisal</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Sylhet">Sylhet</option>
        <option value="Comilla">Comilla</option>
        <option value="Dinajpur">Dinajpur</option>
        <option value="Other">Other</option>
    </select>
    <br>
    <label>H.S.C Passing Year: </label>
    <select name="hscyear">
        <option selected>Select Year</option>
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
    </select>
    <br>
    <label>H.S.C Group: </label>
    <select name="hscgroup">
        <option selected>Select Your Group</option>
        <option value="Science">Science</option>
        <option value="Arts">Arts</option>
        <option value="Commerce">Commerce</option>
        <option value="Other">Other</option>
    </select>
    <br>
    <label>H.S.C Result (GPA/Division): </label>
    <input type="text" name="hscresult" value="<?php echo $row['hscresult'];?>" />
    <br>

    <h3>Academic Information (Honers)</h3>

    <label>Bachelor (Hons) Passing Year: </label>
    <select name="honsyear">
        <option selected>Select Year</option>
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
    </select>
    <br>
    <label>Bachelor Subject: </label>
    <input type="text" name="honssubject"  value="<?php echo $row['honssubject'];?>"/>
    <br>
    <label>Bachelor Result (CGPA/Division): </label>
    <input type="text" name="honsresult" value="<?php echo $row['honsresult'];?>" />
    <br>

    <h3>Other Information</h3>

    <label>Bangla Language Proficiency: </label>
    <select name="bangla">
        <option selected>Select Proficiency Level</option>
        <option value="Low">Low</option>
        <option value="Medium">Medium</option>
        <option value="High">High</option>
    </select>
    <br>
    <label>English Language Proficiency: </label>
    <select name="english">
        <option selected>Select Proficiency Level</option>
        <option value="Low">Low</option>
        <option value="Medium">Medium</option>
        <option value="High">High</option>
    </select>
    <br>

    <button type="submit">Update</button>

</form>

</body>
</html>
