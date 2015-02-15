<?php
$recordID = $_GET['id'];
$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "basic_crud");
if ($dbConnection) {
    $query  = "SELECT * FROM ict_skills WHERE id = $recordID";
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
    <title>ICT Skills</title>

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

        .table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        .table td, .table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .table tr:nth-child(even){background-color: #f2f2f2;}

        .table tr:hover {background-color: #ddd;}

        .table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
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
                    <span>ICT Skill Details</span>
                </div>
                <div class="col-6" style="text-align: right; padding-top: 10px;">
                    <a style="text-decoration: none;" href="create.php">Add New</a> |
                    <a style="text-decoration: none;" href="list.php">Back to List</a> |
                    <a style="text-decoration: none;" href="edit.php?id=<?php echo $record['id']?>">Edit & Update</a> |
                    <a style="text-decoration: none;" href="delete.php?id=<?php echo $record['id']?>">Delete</a>
                </div>
            </div>

            <hr>

            <table class="table">
                <tbody>
                <tr>
                    <td style="text-align: right;"><strong>Skill Category</strong></td>
                    <td><?php echo $record['skill_category']; ?></td>
                </tr>
                <tr>
                    <td style="text-align: right;"><strong>Skill Name/Topic/Title</strong></td>
                    <td><?php echo $record['skill_subject']; ?></td>
                </tr>
                <tr>
                    <td style="text-align: right;"><strong>Experience</strong></td>
                    <td><?php echo $record['experience'] . ' ' . $record['experience_unit']; ?></td>
                </tr>
                <tr>
                    <td style="text-align: right;"><strong>Description</strong></td>
                    <td><?php echo $record['description']; ?></td>
                </tr>
                <tr>
                    <td style="text-align: right;"><strong>Skill Usage In</strong></td>
                    <td><?php echo $record['skill_usage']; ?></td>
                </tr>
                <tr>
                    <td style="text-align: right;"><strong>Created At</strong></td>
                    <td><?php echo $record['created_at']; ?></td>
                </tr>
                <tr>
                    <td style="text-align: right;"><strong>Updated At</strong></td>
                    <td><?php echo $record['updated_at']; ?></td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

</body>
</html>