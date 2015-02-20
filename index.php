<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Shahlal Hossain">
    <meta name="description" content="PHP CRUD Practices">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, MySQL, CRUD">
    <title>Home</title>

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
    </style>
</head>
<body>

<div class="topNav">
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
                <a style="text-decoration: none;" href="http://localhost/practices/crud01"><li class="leftSideMenuItem">Home</li></a>
                <a style="text-decoration: none;" href="http://localhost/practices/crud01/personalinfo/"><li class="leftSideMenuItem">Personal Details</li></a>
                <a style="text-decoration: none;" href="http://localhost/practices/crud01/contactinfo/"><li class="leftSideMenuItem">Contact Information</li></a>
                <a style="text-decoration: none;" href="http://localhost/practices/crud01/employment/"><li class="leftSideMenuItem">Employment History</li></a>
                <a style="text-decoration: none;" href="http://localhost/practices/crud01/academicinfo/"><li class="leftSideMenuItem">Academic Information</li></a>
                <a style="text-decoration: none;" href="http://localhost/practices/crud01/ictskill/"><li class="leftSideMenuItem">ICT Skills</li></a>
                <a style="text-decoration: none;" href="http://localhost/practices/crud01/traininginfo/"><li class="leftSideMenuItem">Trainings</li></a>
            </ul>
        </div>
    </div>
    <div class="rightColumn">
        <div class="card">
            <h3>CRUD Operations in PHP</h3>
            <p>CRUD operations stand for <strong>Create, Read, Update, and Delete,</strong> which are the four basic functions of persistent storage. In PHP, CRUD operations are typically implemented using a relational database like MySQL. Here’s a breakdown of each operation:</p>

            <ol type="1">
                <li>
                    <strong>Create (Insert)</strong>-- This operation is used to add new records into the database. In PHP, the <span style="background-color: #cccccc;"><b><i>INSERT INTO</i></b></span> SQL query is used for this purpose.
                </li>
                <li>
                    <strong>Read (Retrieve)</strong> -- This operation fetches data from the database. The <span style="background-color: #cccccc;"><b><i>SELECT</i></b></span> SQL statement is used in PHP to retrieve records.
                </li>
                <li>
                    <strong>Update</strong> -- This operation modifies existing data in the database. The <span style="background-color: #cccccc;"><b><i>UPDATE</i></b></span> SQL statement is used for this purpose.
                </li>
                <li>
                    <strong>Delete</strong> -- This operation removes records from the database. The <span style="background-color: #cccccc;"><b><i>DELETE FROM</i></b></span> SQL statement is used to delete records.
                </li>
            </ol>

            <br>
            <h4>Key Points:</h4>
            <ul>
                <li>
                    <strong>Database Connection:</strong> A connection to the database is required for each operation using the mysqli or PDO extension in PHP.
                </li>
                <li>
                    <strong>SQL Statements:</strong> Each CRUD operation corresponds to a specific SQL command (INSERT, SELECT, UPDATE, DELETE).
                </li>
                <li>
                    <strong>Error Handling:</strong> Always check for errors after performing database operations to handle potential issues gracefully.
                </li>
                <li>
                    <strong>Security Considerations:</strong> When working with user inputs, it's essential to use prepared statements or parameterized queries to prevent SQL injection attacks.
                </li>
            </ul>

            <p>By implementing these basic CRUD operations in PHP, you can create fully functional applications that interact with databases for dynamic content management.</p>
        </div>
    </div>
</div>

</body>
</html>