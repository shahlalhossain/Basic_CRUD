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

            <form action="add.php" method="POST">

                <div class="row">
                    <div class="col-25"><label for="skill_category">Skill Category:</label></div>
                    <div class="col-75">
                        <select id="skill_category" name="skill_category">
                            <option value="" selected>Select Skill Category</option>
                            <option value="Basic Computer Skills">Basic Computer Skills</option>
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="Programming Languages">Programming Languages</option>
                            <option value="Web Design & Development">Web Design & Development</option>
                            <option value="Development Framework">Development Framework</option>
                            <option value="Database Management">Database Management</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value=" Software Testing"> Software Testing</option>
                            <option value="Project Management">Project Management</option>
                            <option value="Telecommunication">Telecommunication</option>
                            <option value="Networking & Security">Networking & Security</option>
                            <option value="Data Analytics & Visualization">Data Analytics & Visualization</option>
                            <option value="Cloud Computing & Virtualization">Cloud Computing & Virtualization</option>
                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                            <option value=" Blockchain Technology"> Blockchain Technology</option>
                            <option value="Technology Tools">Technology Tools</option>
                            <option value="Other Technology">Other Technology</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25"><label for="skill_subject">Skill Topic/Subject/Name:</label></div>
                    <div class="col-75">
                        <select id="skill_subject" name="skill_subject">
                            <option value="" selected>Select Topic/Subject/Name</option>
                            <option value="Agile">Agile</option>
                            <option value="Ajax">Ajax</option>
                            <option value="Analysis Skills">Analysis Skills</option>
                            <option value="Apache">Apache</option>
                            <option value="APIs">APIs</option>
                            <option value="Application Development">Application Development</option>
                            <option value="Authentication">Authentication</option>
                            <option value="AWS">AWS</option>
                            <option value="Back-End Development">Back-End Development</option>
                            <option value="Bootstrap">Bootstrap</option>
                            <option value="Business Process Modeling">Business Process Modeling</option>
                            <option value="Business Requirements">Business Requirements</option>
                            <option value="C++">C++</option>
                            <option value="Centos">Centos</option>
                            <option value="Cloud Architecture">Cloud Architecture</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="CSS">CSS</option>
                            <option value="Data Structures">Data Structures</option>
                            <option value="Database Design">Database Design</option>
                            <option value="Database Development">Database Development</option>
                            <option value="Database Management">Database Management</option>
                            <option value="Databases">Databases</option>
                            <option value="Design Patterns">Design Patterns</option>
                            <option value="DevOps">DevOps</option>
                            <option value="Distributed Systems">Distributed Systems</option>
                            <option value="E-Commerce">E-Commerce</option>
                            <option value="Ecmascript">Ecmascript</option>
                            <option value="Full-Stack Development">Full-Stack Development</option>
                            <option value="Git">Git</option>
                            <option value="Github">Github</option>
                            <option value="Gitlab">Gitlab</option>
                            <option value="Google Cloud Platform">Google Cloud Platform</option>
                            <option value="HTML5">HTML5</option>
                            <option value="Identity & Access Management">Identity & Access Management</option>
                            <option value="JIRA">JIRA</option>
                            <option value="jQuery">jQuery</option>
                            <option value="JSON">JSON</option>
                            <option value="Lamp Stack">Lamp Stack</option>
                            <option value="Laravel">Laravel</option>
                            <option value="Leadership">Leadership</option>
                            <option value="Linux">Linux</option>
                            <option value="MVC">MVC</option>
                            <option value="MySQL">MySQL</option>
                            <option value="Nginx">Nginx</option>
                            <option value="Node.Js" selected>Node.Js</option> <!-- Pre-selected -->
                            <option value="OOP">OOP</option>
                            <option value="PHP">PHP</option>
                            <option value="PostgreSQL">PostgreSQL</option>
                            <option value="Presentation Skills">Presentation Skills</option>
                            <option value="Product Management">Product Management</option>
                            <option value="Project Management">Project Management</option>
                            <option value="Project Management Software">Project Management Software</option>
                            <option value="React">React</option>
                            <option value="Redis">Redis</option>
                            <option value="Relational Databases">Relational Databases</option>
                            <option value="Requirements Analysis">Requirements Analysis</option>
                            <option value="Requirements Gathering">Requirements Gathering</option>
                            <option value="Responsive Web Design">Responsive Web Design</option>
                            <option value="RESTApi">RESTApi</option>
                            <option value="Scrum">Scrum</option>
                            <option value="SDLC">SDLC</option>
                            <option value="Server Management">Server Management</option>
                            <option value="Software Deployment">Software Deployment</option>
                            <option value="Software Development">Software Development</option>
                            <option value="Software Troubleshooting">Software Troubleshooting</option>
                            <option value="Solution Architecture">Solution Architecture</option>
                            <option value="SQL">SQL</option>
                            <option value="System Architecture">System Architecture</option>
                            <option value="System Design">System Design</option>
                            <option value="Systems Engineering">Systems Engineering</option>
                            <option value="Ubuntu">Ubuntu</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Web Services">Web Services</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25"><label for="experience_period">Experience Period:</label></div>
                    <div class="col-50"><input type="text" id="experience_period" name="experience_period" placeholder="10/20" required></div>
                    <div class="col-25">
                        <label for="experience_period_unit" style="display: none;">Experience Period Unit</label>
                        <select id="experience_period_unit" name="experience_period_unit">
                            <option value="Years" selected>Years</option>
                            <option value="Months">Months</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25"><label for="description">Description:</label></div>
                    <div class="col-75">
                        <textarea id="description" name="description" placeholder="Description" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25"><label for="skill_usage">Skill Used In:</label></div>
                    <div class="col-75">
                        <textarea id="skill_usage" name="skill_usage" placeholder="Skill Used In" cols="30" rows="5"></textarea>
                    </div>
                </div>

                <input type="submit" id="submit" name="submit" value="Submit">

            </form>
        </div>
    </div>
</div>

</body>
</html>