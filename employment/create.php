<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Shahlal Hossain">
    <meta name="description" content="PHP CRUD Practices">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, MySQL, CRUD">
    <title>Employment History</title>

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
            padding: 5px 20px 20px;
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
                    <span>Add New Employment Record</span>
                </div>
                <div class="col-6" style="text-align: right; padding-top: 10px;">
                    <a href="list.php">Back to List</a>
                </div>
            </div>

            <hr>

            <form action="add.php" method="POST">

                <div class="row">
                    <div class="col-25"><label for="company_name">Company Name:</label></div>
                    <div class="col-75"><input type="text" id="company_name" name="company_name" placeholder="Company Name" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="company_business">Company Business:</label></div>
                    <div class="col-75"><input type="text" id="company_business" name="company_business" placeholder="Company Business" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="address">Company Address:</label></div>
                    <div class="col-75"><input type="text" id="address" name="address" placeholder="Company Address" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="designation">Your Designation:</label></div>
                    <div class="col-75"><input type="text" id="designation" name="designation" placeholder="Your Designation" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="department">Department Name:</label></div>
                    <div class="col-75"><input type="text" id="department" name="department" placeholder="Department Name" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="responsibilities">Your Responsibilities:</label></div>
                    <div class="col-75">
                        <textarea id="responsibilities" name="responsibilities" placeholder="Your Responsibilities" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="joining_date">Your Joining Date:</label></div>
                    <div class="col-75"><input type="date" id="joining_date" name="joining_date" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="currently_working">Currently Working There:</label></div>
                    <div class="col-75">
                        <input type="radio" id="currently_working" name="currently_working" value=1 checked>Yes
                        <input type="radio" id="currently_working" name="currently_working" value=0>No
                    </div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="end_date">Your Job End Date:</label></div>
                    <div class="col-75"><input type="date" id="end_date" name="end_date" required></div>
                </div>

                <input type="submit" id="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</div>

</body>
</html>