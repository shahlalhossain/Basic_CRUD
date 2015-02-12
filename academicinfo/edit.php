<?php
$recordID = $_GET['id'];
$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "basic_crud");
if ($dbConnection) {
    $query  = "SELECT * FROM academicinfo WHERE id = $recordID";
    $result = mysqli_query($dbConnection, $query);
    $record = mysqli_fetch_assoc($result);
} elseif (mysqli_connect_errno()) {
    echo "Failed to connect to MysQL Database: " . mysqli_connect_error();
} else {
    echo 'Please Check Your Database Connection';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Shahlal Hossain">
    <meta name="description" content="PHP CRUD Practices">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, MySQL, CRUD">
    <title>Academic Information</title>

    <style>
        * { box-sizing: border-box; }

        body {
            font-family: Arial;
            padding: 10px;
            background: #f1f1f1;
        }

        /* Style the Top Navigation Bar */
        .topNav {
            overflow: hidden;
            background-color: #333;
        }

        .topNav .item { float:right; }

        /* Style the topNav Links */
        .topNav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change topNav Color on Hover */
        .topNav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Create Two Unequal Columns that Floats Next to Each Other */
        /* Left column */
        .leftColumn {
            float: left;
            width: 15%;
            background-color: #f1f1f1;
        }

        .leftSideMenuItem {
            background-color: #dbfde2; border-bottom: 1px darkseagreen solid; padding: 10px; margin-bottom: 2px;
        }

        /* Right column */
        .rightColumn {
            float: left;
            width: 85%;
            padding-left: 20px;
            background-color: #f1f1f1;
        }

        /* Add a Card Effect */
        .card {
            background-color: white;
            padding: 5px 20px 60px;
            margin-top: 20px;
        }

        .col-6 {
            float:left;
            width:50%;
        }

        /* Clear Floats After the Columns */
        .row::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive Layout - When the Screen is Less than 800px wide, Make the Two Columns Stack on Top of Each Other Instead of Next to Each Other */
        @media screen and (max-width: 800px) {
            .leftColumn, .rightColumn {
                width: 100%;
                padding: 0;
            }
        }

        /* Responsive Layout - When the Screen is Less than 400px wide, Make the Navigation Links Stack on Top of Each Other Instead of Next to Each Other */
        @media screen and (max-width: 400px) {
            .topNav a {
                float: none;
                width: 100%;
            }
        }

        input[type=text], input[type=date], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        input[type=radio] {
            margin-top: 14px;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        .container {
            border-radius: 5px;
            background-color: #cdeab8;
            padding: 20px;
        }

        .col-25 {
            float: left;
            text-align: right;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        .col-50 {
            float: left;
            width: 50%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

        .input-group {
            display: flex;
            align-content: stretch;
        }

        .input-group > input {
            flex: 1 0 auto;
        }

        .input-group-addon {
            padding: 10px;
            background: #eee;
            border: 1px solid #ccc;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>
<body>

<div class="topNav">
    <a class="item" href="http://localhost/practices/crud01/fileupload/">Image Upload</a>
    <a class="item" href="http://localhost/practices/crud01/reference/">References</a>
    <a class="item" href="http://localhost/practices/crud01/traininginfo/">Training</a>
    <a class="item" href="http://localhost/practices/crud01/ictskill/">ICT Skill</a>
    <a class="item" href="http://localhost/practices/crud01/academicinfo/">Academic</a>
    <a class="item" href="http://localhost/practices/crud01/employment/">Employment</a>
    <a class="item" href="http://localhost/practices/crud01/contactinfo/">Contact</a>
    <a class="item" href="http://localhost/practices/crud01/personalinfo/">Personal</a>
    <a class="item" href="http://localhost/practices/crud01">Home</a>
</div>

<div class="row">
    <div class="leftColumn">
        <div class="card">
            <ul style="padding-left: 0; list-style-type: none;">
                <a style="text-decoration: none;" href="create.php"><li class="leftSideMenuItem">Create New Record</li></a>
                <a style="text-decoration: none;" href="list.php"><li class="leftSideMenuItem">View Full List</li></a>
            </ul>
        </div>
    </div>
    <div class="rightColumn">
        <div class="card">

            <div class="row">
                <div class="col-6" style="text-align: left; padding-top: 10px;">
                    <span>Add New Academic Record</span>
                </div>
                <div class="col-6" style="text-align: right; padding-top: 10px;">
                    <a href="list.php">Back to List</a>
                </div>
            </div>

            <hr>

            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $record['id'];?>" />
                <div class="row">
                    <div class="col-25"><label for="level_of_education">Level of Education:</label></div>
                    <div class="col-75">
                        <select id="level_of_education" name="level_of_education">
                            <option value="">Select Education Level</option>
                            <option <?php if($record['level_of_education'] == "School") echo 'selected'; ?> value="School">School</option>
                            <option <?php if($record['level_of_education'] == "College") echo 'selected'; ?> value="College">College</option>
                            <option <?php if($record['level_of_education'] == "Diploma") echo 'selected'; ?> value="Diploma">Diploma</option>
                            <option <?php if($record['level_of_education'] == "Bachelor") echo 'selected'; ?> value="Bachelor">Bachelor</option>
                            <option <?php if($record['level_of_education'] == "Masters") echo 'selected'; ?> value="Masters">Masters</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="exam_title">Exam Title/Name:</label></div>
                    <div class="col-75"><input type="text" id="exam_title" name="exam_title" value="<?php echo $record['exam_title'] ?>" placeholder="Exam Title/Name" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="subject_group">Subject/Group:</label></div>
                    <div class="col-75"><input type="text" id="subject_group" name="subject_group" value="<?php echo $record['subject_group'] ?>" placeholder="Subject/Group" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="institution">Institution Name:</label></div>
                    <div class="col-75"><input type="text" id="institution" name="institution" value="<?php echo $record['institution'] ?>" placeholder="Institution Name" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="result_type">Type & Result:</label></div>
                    <div class="col-25">
                        <select id="result_type" name="result_type">
                            <option value="">Select Result Type</option>
                            <option <?php if($record['result_type'] == "GPA") echo 'selected'; ?> value="GPA">Grade - GPA</option>
                            <option <?php if($record['result_type'] == "CGPA") echo 'selected'; ?> value="CGPA">Grade - CGPA</option>
                            <option <?php if($record['result_type'] == "Other") echo 'selected'; ?> value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-25 input-group">
                        <label for="result" style="display: none;">Result</label>
                        <span class="input-group-addon">Result</span>
                        <input type="text" id="result" name="result" value="<?php echo number_format($record['result'], 2) ?>" placeholder="5.00/4.00/Second Division" required style="width: auto;">
                    </div>
                    <div class="col-25 input-group">
                        <label for="scale" style="display: none;">Scale</label>
                        <span class="input-group-addon">Scale</span>
                        <input type="number" id="scale" name="scale" value="<?php echo $record['scale'] ?>" placeholder="5.00" min="3.00" max="5.00">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="passing_year">Passing Year:</label></div>
                    <div class="col-25">
                        <select id="passing_year" name="passing_year">
                            <option value="">Select Passing Year</option>
                            <option <?php if($record['passing_year'] == "1990") echo 'selected'; ?> value="1990">1990</option>
                            <option <?php if($record['passing_year'] == "1991") echo 'selected'; ?> value="1991">1991</option>
                            <option <?php if($record['passing_year'] == "1992") echo 'selected'; ?> value="1992">1992</option>
                            <option <?php if($record['passing_year'] == "1993") echo 'selected'; ?> value="1993">1993</option>
                            <option <?php if($record['passing_year'] == "1994") echo 'selected'; ?> value="1994">1994</option>
                            <option <?php if($record['passing_year'] == "1995") echo 'selected'; ?> value="1995">1995</option>
                            <option <?php if($record['passing_year'] == "1996") echo 'selected'; ?> value="1996">1996</option>
                            <option <?php if($record['passing_year'] == "1997") echo 'selected'; ?> value="1997">1997</option>
                            <option <?php if($record['passing_year'] == "1998") echo 'selected'; ?> value="1998">1998</option>
                            <option <?php if($record['passing_year'] == "1999") echo 'selected'; ?> value="1999">1999</option>
                            <option <?php if($record['passing_year'] == "2000") echo 'selected'; ?> value="2000">2000</option>
                            <option <?php if($record['passing_year'] == "2001") echo 'selected'; ?> value="2001">2001</option>
                            <option <?php if($record['passing_year'] == "2002") echo 'selected'; ?> value="2002">2002</option>
                            <option <?php if($record['passing_year'] == "2003") echo 'selected'; ?> value="2003">2003</option>
                            <option <?php if($record['passing_year'] == "2004") echo 'selected'; ?> value="2004">2004</option>
                            <option <?php if($record['passing_year'] == "2005") echo 'selected'; ?> value="2005">2005</option>
                            <option <?php if($record['passing_year'] == "2006") echo 'selected'; ?> value="2006">2006</option>
                            <option <?php if($record['passing_year'] == "2007") echo 'selected'; ?> value="2007">2007</option>
                            <option <?php if($record['passing_year'] == "2008") echo 'selected'; ?> value="2008">2008</option>
                            <option <?php if($record['passing_year'] == "2009") echo 'selected'; ?> value="2009">2009</option>
                            <option <?php if($record['passing_year'] == "2010") echo 'selected'; ?> value="2010">2010</option>
                            <option <?php if($record['passing_year'] == "2011") echo 'selected'; ?> value="2011">2011</option>
                            <option <?php if($record['passing_year'] == "2012") echo 'selected'; ?> value="2012">2012</option>
                            <option <?php if($record['passing_year'] == "2013") echo 'selected'; ?> value="2013">2013</option>
                            <option <?php if($record['passing_year'] == "2014") echo 'selected'; ?> value="2014">2014</option>
                            <option <?php if($record['passing_year'] == "2015") echo 'selected'; ?> value="2015">2015</option>
                        </select>
                    </div>
                    <div class="col-25 input-group">
                        <label for="duration" style="display: none;">Duration</label>
                        <span class="input-group-addon">Duration</span>
                        <input type="number" id="duration" name="duration" value="<?php echo $record['duration'] ?>" placeholder="5/4/3/1" min="1" max="5" required>
                        <span class="input-group-addon">Years</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="achievements">Achievements:</label></div>
                    <div class="col-75">
                        <textarea id="achievements" name="achievements" placeholder="Achievements" cols="30" rows="10"><?php if ($record['achievements']) echo $record['achievements']; ?></textarea>
                    </div>
                </div>

                <input type="submit" id="submit" name="submit" value="Submit">

            </form>
        </div>
    </div>
</div>