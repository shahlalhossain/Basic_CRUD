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
                    <span>Add New ICT Skill</span>
                </div>
                <div class="col-6" style="text-align: right; padding-top: 10px;">
                    <a href="list.php">Back to List</a>
                </div>
            </div>

            <hr>

            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $record['id'];?>" />
                <div class="row">
                    <div class="col-25"><label for="skill_category">Skill Category:</label></div>
                    <div class="col-75">
                        <select id="skill_category" name="skill_category">
                            <option value="">Select Skill Category</option>
                            <option <?php if($record['skill_category'] == "Basic Computer Skills") echo 'selected'; ?> value="Basic Computer Skills">Basic Computer Skills</option>
                            <option <?php if($record['skill_category'] == "Graphic Design") echo 'selected'; ?> value="Graphic Design">Graphic Design</option>
                            <option <?php if($record['skill_category'] == "Programming Languages") echo 'selected'; ?> value="Programming Languages">Programming Languages</option>
                            <option <?php if($record['skill_category'] == "Web Design & Development") echo 'selected'; ?> value="Web Design & Development">Web Design & Development</option>
                            <option <?php if($record['skill_category'] == "Development Framework") echo 'selected'; ?> value="Development Framework">Development Framework</option>
                            <option <?php if($record['skill_category'] == "Database Management") echo 'selected'; ?> value="Database Management">Database Management</option>
                            <option <?php if($record['skill_category'] == "Mobile App Development") echo 'selected'; ?> value="Mobile App Development">Mobile App Development</option>
                            <option <?php if($record['skill_category'] == "Software Testing") echo 'selected'; ?> value="Software Testing"> Software Testing</option>
                            <option <?php if($record['skill_category'] == "Project Management") echo 'selected'; ?> value="Project Management">Project Management</option>
                            <option <?php if($record['skill_category'] == "Telecommunication") echo 'selected'; ?> value="Telecommunication">Telecommunication</option>
                            <option <?php if($record['skill_category'] == "Networking & Security") echo 'selected'; ?> value="Networking & Security">Networking & Security</option>
                            <option <?php if($record['skill_category'] == "Data Analytics & Visualization") echo 'selected'; ?> value="Data Analytics & Visualization">Data Analytics & Visualization</option>
                            <option <?php if($record['skill_category'] == "Cloud Computing & Virtualization") echo 'selected'; ?> value="Cloud Computing & Virtualization">Cloud Computing & Virtualization</option>
                            <option <?php if($record['skill_category'] == "Artificial Intelligence") echo 'selected'; ?> value="Artificial Intelligence">Artificial Intelligence</option>
                            <option <?php if($record['skill_category'] == " Blockchain Technology") echo 'selected'; ?> value=" Blockchain Technology"> Blockchain Technology</option>
                            <option <?php if($record['skill_category'] == "Technology Tools") echo 'selected'; ?> value="Technology Tools">Technology Tools</option>
                            <option <?php if($record['skill_category'] == "Other Technology") echo 'selected'; ?> value="Other Technology">Other Technology</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25"><label for="skill_subject">Skill Topic/Subject/Name:</label></div>
                    <div class="col-75">
                        <select id="skill_subject" name="skill_subject">
                            <option value="">Select Topic/Subject/Name</option>
                            <option <?php if($record['skill_subject'] == "Agile") echo 'selected'; ?> value="Agile">Agile</option>
                            <option <?php if($record['skill_subject'] == "Ajax") echo 'selected'; ?> value="Ajax">Ajax</option>
                            <option <?php if($record['skill_subject'] == "Analysis Skills") echo 'selected'; ?> value="Analysis Skills">Analysis Skills</option>
                            <option <?php if($record['skill_subject'] == "Apache") echo 'selected'; ?> value="Apache">Apache</option>
                            <option <?php if($record['skill_subject'] == "APIs") echo 'selected'; ?> value="APIs">APIs</option>
                            <option <?php if($record['skill_subject'] == "Application Development") echo 'selected'; ?> value="Application Development">Application Development</option>
                            <option <?php if($record['skill_subject'] == "Authentication") echo 'selected'; ?> value="Authentication">Authentication</option>
                            <option <?php if($record['skill_subject'] == "AWS") echo 'selected'; ?> value="AWS">AWS</option>
                            <option <?php if($record['skill_subject'] == "Backend Development") echo 'selected'; ?> value="Backend Development">Backend Development</option>
                            <option <?php if($record['skill_subject'] == "Bootstrap") echo 'selected'; ?> value="Bootstrap">Bootstrap</option>
                            <option <?php if($record['skill_subject'] == "Business Process Modeling") echo 'selected'; ?> value="Business Process Modeling">Business Process Modeling</option>
                            <option <?php if($record['skill_subject'] == "Business Requirements") echo 'selected'; ?> value="Business Requirements">Business Requirements</option>
                            <option <?php if($record['skill_subject'] == "C++") echo 'selected'; ?> value="C++">C++</option>
                            <option <?php if($record['skill_subject'] == "CentOS") echo 'selected'; ?> value="CentOS">CentOS</option>
                            <option <?php if($record['skill_subject'] == "Cloud Architecture") echo 'selected'; ?> value="Cloud Architecture">Cloud Architecture</option>
                            <option <?php if($record['skill_subject'] == "Computer Science") echo 'selected'; ?> value="Computer Science">Computer Science</option>
                            <option <?php if($record['skill_subject'] == "CSS") echo 'selected'; ?> value="CSS">CSS</option>
                            <option <?php if($record['skill_subject'] == "Data Structures") echo 'selected'; ?> value="Data Structures">Data Structures</option>
                            <option <?php if($record['skill_subject'] == "Database Design") echo 'selected'; ?> value="Database Design">Database Design</option>
                            <option <?php if($record['skill_subject'] == "Database Development") echo 'selected'; ?> value="Database Development">Database Development</option>
                            <option <?php if($record['skill_subject'] == "Database Management") echo 'selected'; ?> value="Database Management">Database Management</option>
                            <option <?php if($record['skill_subject'] == "Databases") echo 'selected'; ?> value="Databases">Databases</option>
                            <option <?php if($record['skill_subject'] == "Design Patterns") echo 'selected'; ?> value="Design Patterns">Design Patterns</option>
                            <option <?php if($record['skill_subject'] == "DevOps") echo 'selected'; ?> value="DevOps">DevOps</option>
                            <option <?php if($record['skill_subject'] == "Distributed Systems") echo 'selected'; ?> value="Distributed Systems">Distributed Systems</option>
                            <option <?php if($record['skill_subject'] == "E-Commerce") echo 'selected'; ?> value="E-Commerce">E-Commerce</option>
                            <option <?php if($record['skill_subject'] == "Ecmascript") echo 'selected'; ?> value="Ecmascript">Ecmascript</option>
                            <option <?php if($record['skill_subject'] == "Full-Stack Development") echo 'selected'; ?> value="Full-Stack Development">Full-Stack Development</option>
                            <option <?php if($record['skill_subject'] == "Git") echo 'selected'; ?> value="Git">Git</option>
                            <option <?php if($record['skill_subject'] == "Github") echo 'selected'; ?> value="Github">Github</option>
                            <option <?php if($record['skill_subject'] == "Gitlab") echo 'selected'; ?> value="Gitlab">Gitlab</option>
                            <option <?php if($record['skill_subject'] == "Google Cloud Platform") echo 'selected'; ?> value="Google Cloud Platform">Google Cloud Platform</option>
                            <option <?php if($record['skill_subject'] == "HTML5") echo 'selected'; ?> value="HTML5">HTML5</option>
                            <option <?php if($record['skill_subject'] == "Identity & Access Management") echo 'selected'; ?> value="Identity & Access Management">Identity & Access Management</option>
                            <option <?php if($record['skill_subject'] == "JIRA") echo 'selected'; ?> value="JIRA">JIRA</option>
                            <option <?php if($record['skill_subject'] == "jQuery") echo 'selected'; ?> value="jQuery">jQuery</option>
                            <option <?php if($record['skill_subject'] == "JSON") echo 'selected'; ?> value="JSON">JSON</option>
                            <option <?php if($record['skill_subject'] == "Lamp Stack") echo 'selected'; ?> value="Lamp Stack">Lamp Stack</option>
                            <option <?php if($record['skill_subject'] == "Laravel") echo 'selected'; ?> value="Laravel">Laravel</option>
                            <option <?php if($record['skill_subject'] == "Leadership") echo 'selected'; ?> value="Leadership">Leadership</option>
                            <option <?php if($record['skill_subject'] == "Linux") echo 'selected'; ?> value="Linux">Linux</option>
                            <option <?php if($record['skill_subject'] == "MVC") echo 'selected'; ?> value="MVC">MVC</option>
                            <option <?php if($record['skill_subject'] == "MySQL") echo 'selected'; ?> value="MySQL">MySQL</option>
                            <option <?php if($record['skill_subject'] == "Nginx") echo 'selected'; ?> value="Nginx">Nginx</option>
                            <option <?php if($record['skill_subject'] == "Node.Js") echo 'selected'; ?> value="Node.Js" selected>Node.Js</option> <!-- Pre-selected -->
                            <option <?php if($record['skill_subject'] == "OOP") echo 'selected'; ?> value="OOP">OOP</option>
                            <option <?php if($record['skill_subject'] == "PHP") echo 'selected'; ?> value="PHP">PHP</option>
                            <option <?php if($record['skill_subject'] == "PostgreSQL") echo 'selected'; ?> value="PostgreSQL">PostgreSQL</option>
                            <option <?php if($record['skill_subject'] == "Presentation Skills") echo 'selected'; ?> value="Presentation Skills">Presentation Skills</option>
                            <option <?php if($record['skill_subject'] == "Product Management") echo 'selected'; ?> value="Product Management">Product Management</option>
                            <option <?php if($record['skill_subject'] == "Project Management") echo 'selected'; ?> value="Project Management">Project Management</option>
                            <option <?php if($record['skill_subject'] == "Project Management Software") echo 'selected'; ?> value="Project Management Software">Project Management Software</option>
                            <option <?php if($record['skill_subject'] == "React") echo 'selected'; ?> value="React">React</option>
                            <option <?php if($record['skill_subject'] == "Redis") echo 'selected'; ?> value="Redis">Redis</option>
                            <option <?php if($record['skill_subject'] == "Relational Databases") echo 'selected'; ?> value="Relational Databases">Relational Databases</option>
                            <option <?php if($record['skill_subject'] == "Requirements Analysis") echo 'selected'; ?> value="Requirements Analysis">Requirements Analysis</option>
                            <option <?php if($record['skill_subject'] == "Requirements Gathering") echo 'selected'; ?> value="Requirements Gathering">Requirements Gathering</option>
                            <option <?php if($record['skill_subject'] == "Responsive Web Design") echo 'selected'; ?> value="Responsive Web Design">Responsive Web Design</option>
                            <option <?php if($record['skill_subject'] == "RESTApi") echo 'selected'; ?> value="RESTApi">RESTApi</option>
                            <option <?php if($record['skill_subject'] == "Scrum") echo 'selected'; ?> value="Scrum">Scrum</option>
                            <option <?php if($record['skill_subject'] == "SDLC") echo 'selected'; ?> value="SDLC">SDLC</option>
                            <option <?php if($record['skill_subject'] == "Server Management") echo 'selected'; ?> value="Server Management">Server Management</option>
                            <option <?php if($record['skill_subject'] == "Software Deployment") echo 'selected'; ?> value="Software Deployment">Software Deployment</option>
                            <option <?php if($record['skill_subject'] == "Software Development") echo 'selected'; ?> value="Software Development">Software Development</option>
                            <option <?php if($record['skill_subject'] == "Software Troubleshooting") echo 'selected'; ?> value="Software Troubleshooting">Software Troubleshooting</option>
                            <option <?php if($record['skill_subject'] == "Solution Architecture") echo 'selected'; ?> value="Solution Architecture">Solution Architecture</option>
                            <option <?php if($record['skill_subject'] == "SQL") echo 'selected'; ?> value="SQL">SQL</option>
                            <option <?php if($record['skill_subject'] == "System Architecture") echo 'selected'; ?> value="System Architecture">System Architecture</option>
                            <option <?php if($record['skill_subject'] == "System Design") echo 'selected'; ?> value="System Design">System Design</option>
                            <option <?php if($record['skill_subject'] == "Systems Engineering") echo 'selected'; ?> value="Systems Engineering">Systems Engineering</option>
                            <option <?php if($record['skill_subject'] == "Ubuntu") echo 'selected'; ?> value="Ubuntu">Ubuntu</option>
                            <option <?php if($record['skill_subject'] == "Web Development") echo 'selected'; ?> value="Web Development">Web Development</option>
                            <option <?php if($record['skill_subject'] == "Web Services") echo 'selected'; ?> value="Web Services">Web Services</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25"><label for="experience_period">Experience Period:</label></div>
                    <div class="col-50"><input type="text" id="experience_period" name="experience_period" value="<?php echo $record['experience']; ?>" placeholder="10/20" required></div>
                    <div class="col-25">
                        <label for="experience_period_unit" style="display: none;">Experience Period Unit</label>
                        <select id="experience_period_unit" name="experience_period_unit">
                            <option <?php if($record['experience_unit'] == "Years") echo 'selected'; ?> value="Years">Years</option>
                            <option <?php if($record['experience_unit'] == "Months") echo 'selected'; ?> value="Months">Months</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25"><label for="description">Description:</label></div>
                    <div class="col-75">
                        <textarea id="description" name="description" placeholder="Description" cols="30" rows="5"><?php echo $record['description']; ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25"><label for="skill_usage">Skill Used In:</label></div>
                    <div class="col-75">
                        <textarea id="skill_usage" name="skill_usage" placeholder="Skill Used In" cols="30" rows="5"><?php echo $record['skill_usage']; ?></textarea>
                    </div>
                </div>

                <input type="submit" id="submit" name="submit" value="Submit">

            </form>
        </div>
    </div>
</div>

</body>
</html>