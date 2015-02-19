<?php
$recordID = $_GET['id'];
$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "basic_crud");
if ($dbConnection) {
    $query  = "SELECT * FROM trainings WHERE id = $recordID";
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
    <title>Trainings</title>

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
                    <span>Update Training Information</span>
                </div>
                <div class="col-6" style="text-align: right; padding-top: 10px;">
                    <a href="list.php">Back to List</a>
                </div>
            </div>

            <hr>

            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $record['id'];?>" />
                <div class="row">
                    <div class="col-25"><label for="training_title">Training Title:</label></div>
                    <div class="col-50"><input type="text" id="training_title" name="training_title" value="<?php echo $record['training_title']; ?>" placeholder="Training Title" required></div>
                    <div class="col-25 input-group">
                        <label for="training_year" style="display: none;">Training Year</label>
                        <span class="input-group-addon">Training Year</span>
                        <input type="text" id="training_year" name="training_year" value="<?php echo $record['training_year']; ?>" placeholder="Training Completion Year" required style="width: auto;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25"><label for="description">Description:</label></div>
                    <div class="col-75"><textarea id="description" name="description" cols="30" rows="5"><?php echo $record['description']; ?></textarea></div>
                </div>
                <div class="row">
                    <div class="col-25"><label for="institute">Training Institute:</label></div>
                    <div class="col-75"><input type="text" id="institute" name="institute" value="<?php echo $record['institute']; ?>" placeholder="Training Institute" required></div>
                </div>
                <div class="row">
                    <div class="col-25"><label for="address">Institute Address:</label></div>
                    <div class="col-75"><input type="text" id="address" name="address" value="<?php echo $record['address']; ?>" placeholder="Institute Address"></div>
                </div>

                <div class="row">
                    <div class="col-25"><label>Training Period:</label></div>
                    <div class="col-50 input-group">
                        <label for="start_date" style="display: none;">Start Date</label>
                        <span class="input-group-addon">Start Date</span>
                        <input type="date" id="start_date" name="start_date" value="<?php echo $record['start_date']; ?>" placeholder="" style="width: auto;" required>
                        <label for="end_date" style="display: none;">End Date</label>
                        <span class="input-group-addon">End Date</span>
                        <input type="date" id="end_date" name="end_date" value="<?php echo $record['end_date']; ?>" placeholder="" style="width: auto;" required>
                    </div>
                    <div class="col-25 input-group">
                        <label for="duration" style="display: none;">Duration</label>
                        <span class="input-group-addon">Duration</span>
                        <input type="text" id="duration" name="duration" value="<?php echo $record['duration']; ?>" placeholder="" style="width: auto;" required>
                        <label for="duration_unit" style="display: none;">Duration Unit</label>
                        <select id="duration_unit" name="duration_unit" required>
                            <option <?php if($record['duration_unit'] == 'Years') echo 'selected'; ?> value="Years">Years</option>
                            <option <?php if($record['duration_unit'] == 'Months') echo 'selected'; ?> value="Months">Months</option>
                            <option <?php if($record['duration_unit'] == 'Days') echo 'selected'; ?> value="Days">Days</option>
                            <option <?php if($record['duration_unit'] == 'Hours') echo 'selected'; ?> value="Hours">Hours</option>
                        </select>

                    </div>
                </div>

                <input type="submit" id="submit" name="submit" value="Update">

            </form>
        </div>
    </div>
</div>

</body>
</html>
