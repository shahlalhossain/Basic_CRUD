<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "lict@2", "crud01");
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
    <select name="track">

        <option <?php if ($row['track'] == "ITS") echo 'selected'; ?> value="ITS">ITS</option>
        <option <?php if ($row['track'] == "ITES") echo 'selected'; ?> value="ITES">ITES</option>
        <option <?php if ($row['track'] == "ITSS") echo 'selected'; ?> value="ITSS">ITSS</option>

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
    <select name="religion">

        <option <?php if ($row['religion'] == "Muslim") echo 'selected'; ?> value="Muslim">Muslim</option>
        <option <?php if ($row['religion'] == "Hinduism") echo 'selected'; ?> value="Hinduism">Hinduism</option>
        <option <?php if ($row['religion'] == "Christian") echo 'selected'; ?> value="Christian">Christian</option>
        <option <?php if ($row['religion'] == "Buddhism") echo 'selected'; ?> value="Buddhism">Buddhism</option>
        <option <?php if ($row['religion'] == "Jesus") echo 'selected'; ?> value="Jesus">Jesus</option>
        <option <?php if ($row['religion'] == "Other") echo 'selected'; ?> value="Other">Other</option>

    </select>
    <br>
    <label>Date of Birth: </label>
    <input type="text" name="dob" value="<?php echo $row['dob'];?>" />
    <br>
    <label>Gender: </label>
    <input type="radio" name="gender" <?php if ($row['gender'] == "Male") echo 'checked'; ?> value="Male" />Male
    <input type="radio" name="gender" <?php if ($row['gender'] == "Female") echo 'checked'; ?> value="Female" />Female
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

        <option <?php if ($row['sscboard'] == "Dhaka") echo 'selected'; ?> value="Dhaka">Dhaka</option>
        <option <?php if ($row['sscboard'] == "Rajshahi") echo 'selected'; ?> value="Rajshahi">Rajshahi</option>
        <option <?php if ($row['sscboard'] == "Jessore") echo 'selected'; ?> value="Jessore">Jessore</option>
        <option <?php if ($row['sscboard'] == "Barisal") echo 'selected'; ?> value="Barisal">Barisal</option>
        <option <?php if ($row['sscboard'] == "Chittagong") echo 'selected'; ?> value="Chittagong">Chittagong</option>
        <option <?php if ($row['sscboard'] == "Sylhet") echo 'selected'; ?> value="Sylhet">Sylhet</option>
        <option <?php if ($row['sscboard'] == "Comilla") echo 'selected'; ?> value="Comilla">Comilla</option>
        <option <?php if ($row['sscboard'] == "Dinajpur") echo 'selected'; ?> value="Dinajpur">Dinajpur</option>

    </select>
    <br>
    <label>S.S.C Passing Year: </label>
    <select name="sscyear">

        <option <?php if ($row['sscyear'] == "2000") echo 'selected'; ?> value="2000">2000</option>
        <option <?php if ($row['sscyear'] == "2001") echo 'selected'; ?> value="2001">2001</option>
        <option <?php if ($row['sscyear'] == "2002") echo 'selected'; ?> value="2002">2002</option>
        <option <?php if ($row['sscyear'] == "2003") echo 'selected'; ?> value="2003">2003</option>
        <option <?php if ($row['sscyear'] == "2004") echo 'selected'; ?> value="2004">2004</option>
        <option <?php if ($row['sscyear'] == "2005") echo 'selected'; ?> value="2005">2005</option>
        <option <?php if ($row['sscyear'] == "2006") echo 'selected'; ?> value="2006">2006</option>
        <option <?php if ($row['sscyear'] == "2007") echo 'selected'; ?> value="2007">2007</option>
        <option <?php if ($row['sscyear'] == "2008") echo 'selected'; ?> value="2008">2008</option>
        <option <?php if ($row['sscyear'] == "2009") echo 'selected'; ?> value="2009">2009</option>
        <option <?php if ($row['sscyear'] == "2010") echo 'selected'; ?> value="2010">2010</option>
        <option <?php if ($row['sscyear'] == "2011") echo 'selected'; ?> value="2011">2011</option>
        <option <?php if ($row['sscyear'] == "2012") echo 'selected'; ?> value="2012">2012</option>
        <option <?php if ($row['sscyear'] == "2013") echo 'selected'; ?> value="2013">2013</option>
        <option <?php if ($row['sscyear'] == "2014") echo 'selected'; ?> value="2014">2014</option>
        <option <?php if ($row['sscyear'] == "2015") echo 'selected'; ?> value="2015">2015</option>

    </select>
    <br>
    <label>S.S.C Group: </label>
    <select name="sscgroup">

        <option <?php if ($row['sscgroup'] == "Science") echo 'selected'; ?> value="Science">Science</option>
        <option <?php if ($row['sscgroup'] == "Arts") echo 'selected'; ?> value="Arts">Arts</option>
        <option <?php if ($row['sscgroup'] == "Commerce") echo 'selected'; ?> value="Commerce">Commerce</option>
        <option <?php if ($row['sscgroup'] == "Other") echo 'selected'; ?> value="Other">Other</option>

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

        <option <?php if ($row['hscboard'] == "Dhaka") echo 'selected'; ?> value="Dhaka">Dhaka</option>
        <option <?php if ($row['hscboard'] == "Rajshahi") echo 'selected'; ?> value="Rajshahi">Rajshahi</option>
        <option <?php if ($row['hscboard'] == "Jessore") echo 'selected'; ?> value="Jessore">Jessore</option>
        <option <?php if ($row['hscboard'] == "Barisal") echo 'selected'; ?> value="Barisal">Barisal</option>
        <option <?php if ($row['hscboard'] == "Chittagong") echo 'selected'; ?> value="Chittagong">Chittagong</option>
        <option <?php if ($row['hscboard'] == "Sylhet") echo 'selected'; ?> value="Sylhet">Sylhet</option>
        <option <?php if ($row['hscboard'] == "Comilla") echo 'selected'; ?> value="Comilla">Comilla</option>
        <option <?php if ($row['hscboard'] == "Dinajpur") echo 'selected'; ?> value="Dinajpur">Dinajpur</option>

    </select>
    <br>
    <label>H.S.C Passing Year: </label>
    <select name="hscyear">

        <option <?php if ($row['hscyear'] == "2000") echo 'selected'; ?> value="2000">2000</option>
        <option <?php if ($row['hscyear'] == "2001") echo 'selected'; ?> value="2001">2001</option>
        <option <?php if ($row['hscyear'] == "2002") echo 'selected'; ?> value="2002">2002</option>
        <option <?php if ($row['hscyear'] == "2003") echo 'selected'; ?> value="2003">2003</option>
        <option <?php if ($row['hscyear'] == "2004") echo 'selected'; ?> value="2004">2004</option>
        <option <?php if ($row['hscyear'] == "2005") echo 'selected'; ?> value="2005">2005</option>
        <option <?php if ($row['hscyear'] == "2006") echo 'selected'; ?> value="2006">2006</option>
        <option <?php if ($row['hscyear'] == "2007") echo 'selected'; ?> value="2007">2007</option>
        <option <?php if ($row['hscyear'] == "2008") echo 'selected'; ?> value="2008">2008</option>
        <option <?php if ($row['hscyear'] == "2009") echo 'selected'; ?> value="2009">2009</option>
        <option <?php if ($row['hscyear'] == "2010") echo 'selected'; ?> value="2010">2010</option>
        <option <?php if ($row['hscyear'] == "2011") echo 'selected'; ?> value="2011">2011</option>
        <option <?php if ($row['hscyear'] == "2012") echo 'selected'; ?> value="2012">2012</option>
        <option <?php if ($row['hscyear'] == "2013") echo 'selected'; ?> value="2013">2013</option>
        <option <?php if ($row['hscyear'] == "2014") echo 'selected'; ?> value="2014">2014</option>
        <option <?php if ($row['hscyear'] == "2015") echo 'selected'; ?> value="2015">2015</option>

    </select>
    <br>
    <label>H.S.C Group: </label>
    <select name="hscgroup">

        <option <?php if ($row['hscgroup'] == "Science") echo 'selected'; ?> value="Science">Science</option>
        <option <?php if ($row['hscgroup'] == "Arts") echo 'selected'; ?> value="Arts">Arts</option>
        <option <?php if ($row['hscgroup'] == "Commerce") echo 'selected'; ?> value="Commerce">Commerce</option>
        <option <?php if ($row['hscgroup'] == "Other") echo 'selected'; ?> value="Other">Other</option>

    </select>
    <br>
    <label>H.S.C Result (GPA/Division): </label>
    <input type="text" name="hscresult" value="<?php echo $row['hscresult'];?>" />
    <br>

    <h3>Academic Information (Honers)</h3>

    <label>Bachelor (Hons) Passing Year: </label>
    <select name="honsyear">

        <option <?php if ($row['honsyear'] == "2000") echo 'selected'; ?> value="2000">2000</option>
        <option <?php if ($row['honsyear'] == "2001") echo 'selected'; ?> value="2001">2001</option>
        <option <?php if ($row['honsyear'] == "2002") echo 'selected'; ?> value="2002">2002</option>
        <option <?php if ($row['honsyear'] == "2003") echo 'selected'; ?> value="2003">2003</option>
        <option <?php if ($row['honsyear'] == "2004") echo 'selected'; ?> value="2004">2004</option>
        <option <?php if ($row['honsyear'] == "2005") echo 'selected'; ?> value="2005">2005</option>
        <option <?php if ($row['honsyear'] == "2006") echo 'selected'; ?> value="2006">2006</option>
        <option <?php if ($row['honsyear'] == "2007") echo 'selected'; ?> value="2007">2007</option>
        <option <?php if ($row['honsyear'] == "2008") echo 'selected'; ?> value="2008">2008</option>
        <option <?php if ($row['honsyear'] == "2009") echo 'selected'; ?> value="2009">2009</option>
        <option <?php if ($row['honsyear'] == "2010") echo 'selected'; ?> value="2010">2010</option>
        <option <?php if ($row['honsyear'] == "2011") echo 'selected'; ?> value="2011">2011</option>
        <option <?php if ($row['honsyear'] == "2012") echo 'selected'; ?> value="2012">2012</option>
        <option <?php if ($row['honsyear'] == "2013") echo 'selected'; ?> value="2013">2013</option>
        <option <?php if ($row['honsyear'] == "2014") echo 'selected'; ?> value="2014">2014</option>
        <option <?php if ($row['honsyear'] == "2015") echo 'selected'; ?> value="2015">2015</option>

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

        <option <?php if ($row['bangla'] == "Low") echo 'selected'; ?> value="Low">Low</option>
        <option <?php if ($row['bangla'] == "Medium") echo 'selected'; ?> value="Medium">Medium</option>
        <option <?php if ($row['bangla'] == "High") echo 'selected'; ?> value="High">High</option>

    </select>
    <br>
    <label>English Language Proficiency: </label>
    <select name="english">

        <option <?php if ($row['bangla'] == "Low") echo 'selected'; ?> value="Low">Low</option>
        <option <?php if ($row['bangla'] == "Medium") echo 'selected'; ?> value="Medium">Medium</option>
        <option <?php if ($row['bangla'] == "High") echo 'selected'; ?> value="High">High</option>

    </select>
    <br>

    <button type="submit">Update</button>

</form>

</body>
</html>
