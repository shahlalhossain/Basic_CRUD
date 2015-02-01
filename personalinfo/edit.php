<?php
$recordID = $_GET['id'];
$record = [];
$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "basic_crud");
if ($dbConnection) {
    $query  = "SELECT * FROM personalinfo WHERE id = $recordID";
    $result = mysqli_query($dbConnection, $query);
    $record = mysqli_fetch_assoc($result);
//    print_r($record);
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
    <title>Personal Information Update</title>

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
            <h3>Add New Record of Personal Information</h3>

            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $record['id']; ?>" />

                <fieldset class="container">
                    <legend><strong>Personal Information</strong></legend>

                    <div class="row">
                        <div class="col-25"><label for="code">Access Code:</label></div>
                        <div class="col-75"><input type="text" id="code" name="code" value="<?php echo $record['code']; ?>" disabled readonly placeholder="Access Code" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="track">Preferred Track:</label></div>
                        <div class="col-75">
                            <select id="track" name="track" required>
                                <option value="">Select Track</option>
                                <option <?php if($record['track'] == "ITS") echo 'selected'; ?> value="ITS">ITS</option>
                                <option <?php if($record['track'] == "ITES") echo 'selected'; ?> value="ITES">ITES</option>
                                <option <?php if($record['track'] == "ITSS") echo 'selected'; ?> value="ITSS">ITSS</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="name">Full Name:</label></div>
                        <div class="col-75"><input type="text" id="name" name="name" value="<?php if($record['name']) echo $record['name']; ?>" placeholder="Full Name" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="mobile">Mobile Number:</label></div>
                        <div class="col-75"><input type="text" id="mobile" name="mobile" value="<?php if($record['mobile']) echo $record['mobile']; ?>" placeholder="+8801731479874" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="email">Email Address:</label></div>
                        <div class="col-75"><input type="text" id="email" name="email" value="<?php if($record['email']) echo $record['email']; ?>" placeholder="Email Address" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="gender">Gender/Sex:</label></div>
                        <div class="col-75">
                            <input type="radio" id="gender" name="gender" <?php if($record['gender'] == "Male") echo 'checked'; ?> value="Male">Male
                            <input type="radio" id="gender" name="gender" <?php if($record['gender'] == "Female") echo 'checked'; ?> value="Female">Female
                            <input type="radio" id="gender" name="gender" <?php if($record['gender'] == "Transgender") echo 'checked'; ?> value="Transgender">Transgender
                            <input type="radio" id="gender" name="gender" <?php if($record['gender'] == "Others") echo 'checked'; ?> value="Others">Others
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="dob">Date of Birth:</label></div>
                        <div class="col-75"><input type="date" id="dob" name="dob" value="<?php if($record['dob']) echo $record['dob']; ?>" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="religion">Religion:</label></div>
                        <div class="col-75">
                            <select id="religion" name="religion" required>
                                <option value="">Select Religion</option>
                                <option <?php if($record['religion'] == "Muslim") echo 'selected'; ?> value="Muslim">Muslim</option>
                                <option <?php if($record['religion'] == "Hinduism") echo 'selected'; ?> value="Hinduism">Hinduism</option>
                                <option <?php if($record['religion'] == "Christian") echo 'selected'; ?> value="Christian">Christian</option>
                                <option <?php if($record['religion'] == "Buddhism") echo 'selected'; ?> value="Buddhism">Buddhism</option>
                                <option <?php if($record['religion'] == "Judaism") echo 'selected'; ?> value="Judaism">Judaism</option>
                                <option <?php if($record['religion'] == "Other") echo 'selected'; ?> value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="father_name">Father Name:</label></div>
                        <div class="col-75"><input type="text" id="father_name" name="father_name" value="<?php if($record['father_name']) echo $record['father_name']; ?>" placeholder="Father Name" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="mother_name">Mother Name:</label></div>
                        <div class="col-75"><input type="text" id="mother_name" name="mother_name" value="<?php if($record['mother_name']) echo $record['mother_name']; ?>" placeholder="Mother Name" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="nid">National ID:</label></div>
                        <div class="col-75"><input type="text" id="nid" name="nid" placeholder="National ID" value="<?php if($record['nid']) echo $record['nid']; ?>" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="nationality">Nationality:</label></div>
                        <div class="col-75">
                            <select id="nationality" name="nationality" required>
                                <option value="">Select Nationality</option>
                                <option <?php if($record['nationality'] == "Bangladeshi") echo 'selected'; ?> value="Bangladeshi">Bangladeshi</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="hometown">Hometown:</label></div>
                        <div class="col-75">
                            <select id="hometown" name="hometown">
                                <option value="">Select Hometown</option>
                                <option <?php if($record['hometown'] == "Bagerhat") echo 'selected'; ?> value="Bagerhat">Bagerhat - বাগেরহাট</option>
                                <option <?php if($record['hometown'] == "Bandarban") echo 'selected'; ?> value="Bandarban">Bandarban - বান্দরবান</option>
                                <option <?php if($record['hometown'] == "Barguna") echo 'selected'; ?> value="Barguna">Barguna - বরগুনা</option>
                                <option <?php if($record['hometown'] == "Barisal") echo 'selected'; ?> value="Barisal">Barisal - বরিশাল</option>
                                <option <?php if($record['hometown'] == "Bhola") echo 'selected'; ?> value="Bhola">Bhola - ভোলা</option>
                                <option <?php if($record['hometown'] == "Bogra") echo 'selected'; ?> value="Bogra">Bogra - বগুড়া</option>
                                <option <?php if($record['hometown'] == "Brahmanbaria") echo 'selected'; ?> value="Brahmanbaria">Brahmanbaria - ব্রাহ্মণবাড়িয়া</option>
                                <option <?php if($record['hometown'] == "Chandpur") echo 'selected'; ?> value="Chandpur">Chandpur - চাঁদপুর</option>
                                <option <?php if($record['hometown'] == "Chittagong") echo 'selected'; ?> value="Chittagong">Chittagong - চট্টগ্রাম</option>
                                <option <?php if($record['hometown'] == "Chuadanga") echo 'selected'; ?> value="Chuadanga">Chuadanga - চুয়াডাঙ্গা</option>
                                <option <?php if($record['hometown'] == "Comilla") echo 'selected'; ?> value="Comilla">Comilla - কুমিল্লা</option>
                                <option <?php if($record['hometown'] == "Cox's Bazar") echo 'selected'; ?> value="Cox's Bazar">Cox's Bazar - কক্সবাজার</option>
                                <option <?php if($record['hometown'] == "Dhaka") echo 'selected'; ?> value="Dhaka">Dhaka - ঢাকা</option>
                                <option <?php if($record['hometown'] == "Dinajpur") echo 'selected'; ?> value="Dinajpur">Dinajpur - দিনাজপুর</option>
                                <option <?php if($record['hometown'] == "Faridpur") echo 'selected'; ?> value="Faridpur">Faridpur - ফরিদপুর</option>
                                <option <?php if($record['hometown'] == "Feni") echo 'selected'; ?> value="Feni">Feni - ফেনী</option>
                                <option <?php if($record['hometown'] == "Gaibandha") echo 'selected'; ?> value="Gaibandha">Gaibandha - গাইবান্ধা</option>
                                <option <?php if($record['hometown'] == "Gazipur") echo 'selected'; ?> value="Gazipur">Gazipur - গাজীপুর</option>
                                <option <?php if($record['hometown'] == "Gopalganj") echo 'selected'; ?> value="Gopalganj">Gopalganj - গোপালগঞ্জ</option>
                                <option <?php if($record['hometown'] == "Habiganj") echo 'selected'; ?> value="Habiganj">Habiganj - হবিগঞ্জ</option>
                                <option <?php if($record['hometown'] == "Jamalpur") echo 'selected'; ?> value="Jamalpur">Jamalpur - জামালপুর</option>
                                <option <?php if($record['hometown'] == "Jessore") echo 'selected'; ?> value="Jessore">Jessore - যশোর</option>
                                <option <?php if($record['hometown'] == "Jhalokati") echo 'selected'; ?> value="Jhalokati">Jhalokati - ঝালকাঠি</option>
                                <option <?php if($record['hometown'] == "Jhenaidah") echo 'selected'; ?> value="Jhenaidah">Jhenaidah - ঝিনাইদহ</option>
                                <option <?php if($record['hometown'] == "Joypurhat") echo 'selected'; ?> value="Joypurhat">Joypurhat - জয়পুরহাট</option>
                                <option <?php if($record['hometown'] == "Khagrachari") echo 'selected'; ?> value="Khagrachari">Khagrachari - খাগড়াছড়ি</option>
                                <option <?php if($record['hometown'] == "Khulna") echo 'selected'; ?> value="Khulna">Khulna - খুলনা</option>
                                <option <?php if($record['hometown'] == "Kishoreganj") echo 'selected'; ?> value="Kishoreganj">Kishoreganj - কিশোরগঞ্জ</option>
                                <option <?php if($record['hometown'] == "Kurigram") echo 'selected'; ?> value="Kurigram">Kurigram - কুড়িগ্রাম</option>
                                <option <?php if($record['hometown'] == "Kushtia") echo 'selected'; ?> value="Kushtia">Kushtia - কুষ্টিয়া</option>
                                <option <?php if($record['hometown'] == "Lakshmipur") echo 'selected'; ?> value="Lakshmipur">Lakshmipur - লক্ষ্মীপুর</option>
                                <option <?php if($record['hometown'] == "Lalmonirhat") echo 'selected'; ?> value="Lalmonirhat">Lalmonirhat - লালমনিরহাট</option>
                                <option <?php if($record['hometown'] == "Madaripur") echo 'selected'; ?> value="Madaripur">Madaripur - মাদারীপুর</option>
                                <option <?php if($record['hometown'] == "Magura") echo 'selected'; ?> value="Magura">Magura - মাগুরা</option>
                                <option <?php if($record['hometown'] == "Manikganj") echo 'selected'; ?> value="Manikganj">Manikganj - মানিকগঞ্জ</option>
                                <option <?php if($record['hometown'] == "Maulvibazar") echo 'selected'; ?> value="Maulvibazar">Maulvibazar - মৌলভীবাজার</option>
                                <option <?php if($record['hometown'] == "Meherpur") echo 'selected'; ?> value="Meherpur">Meherpur - মেহেরপুর</option>
                                <option <?php if($record['hometown'] == "Munshiganj") echo 'selected'; ?> value="Munshiganj">Munshiganj - মুন্সীগঞ্জ</option>
                                <option <?php if($record['hometown'] == "Mymensingh") echo 'selected'; ?> value="Mymensingh">Mymensingh - ময়মনসিংহ</option>
                                <option <?php if($record['hometown'] == "Naogaon") echo 'selected'; ?> value="Naogaon">Naogaon - নওগাঁ</option>
                                <option <?php if($record['hometown'] == "Narail") echo 'selected'; ?> value="Narail">Narail - নড়াইল</option>
                                <option <?php if($record['hometown'] == "Narayanganj") echo 'selected'; ?> value="Narayanganj">Narayanganj - নারায়ণগঞ্জ</option>
                                <option <?php if($record['hometown'] == "Narsingdi") echo 'selected'; ?> value="Narsingdi">Narsingdi - নরসিংদী</option>
                                <option <?php if($record['hometown'] == "Natore") echo 'selected'; ?> value="Natore">Natore - নাটোর</option>
                                <option <?php if($record['hometown'] == "Nawabganj") echo 'selected'; ?> value="Nawabganj">Nawabganj - নবাবগঞ্জ</option>
                                <option <?php if($record['hometown'] == "Netrokona") echo 'selected'; ?> value="Netrokona">Netrokona - নেত্রকোনা</option>
                                <option <?php if($record['hometown'] == "Nilphamari") echo 'selected'; ?> value="Nilphamari">Nilphamari - নীলফামারী</option>
                                <option <?php if($record['hometown'] == "Noakhali") echo 'selected'; ?> value="Noakhali">Noakhali - নোয়াখালী</option>
                                <option <?php if($record['hometown'] == "Pabna") echo 'selected'; ?> value="Pabna">Pabna - পাবনা</option>
                                <option <?php if($record['hometown'] == "Panchagarh") echo 'selected'; ?> value="Panchagarh">Panchagarh - পঞ্চগড়</option>
                                <option <?php if($record['hometown'] == "Patuakhali") echo 'selected'; ?> value="Patuakhali">Patuakhali - পটুয়াখালী</option>
                                <option <?php if($record['hometown'] == "Pirojpur") echo 'selected'; ?> value="Pirojpur">Pirojpur - পিরোজপুর</option>
                                <option <?php if($record['hometown'] == "Rajbari") echo 'selected'; ?> value="Rajbari">Rajbari - রাজবাড়ী</option>
                                <option <?php if($record['hometown'] == "Rajshahi") echo 'selected'; ?> value="Rajshahi">Rajshahi - রাজশাহী</option>
                                <option <?php if($record['hometown'] == "Rangamati") echo 'selected'; ?> value="Rangamati">Rangamati - রাঙামাটি</option>
                                <option <?php if($record['hometown'] == "Rangpur") echo 'selected'; ?> value="Rangpur">Rangpur - রংপুর</option>
                                <option <?php if($record['hometown'] == "Satkhira") echo 'selected'; ?> value="Satkhira">Satkhira - সাতক্ষীরা</option>
                                <option <?php if($record['hometown'] == "Shariatpur") echo 'selected'; ?> value="Shariatpur">Shariatpur - শরীয়তপুর</option>
                                <option <?php if($record['hometown'] == "Sherpur") echo 'selected'; ?> value="Sherpur">Sherpur - শেরপুর</option>
                                <option <?php if($record['hometown'] == "Sirajgonj") echo 'selected'; ?> value="Sirajgonj">Sirajgonj - সিরাজগঞ্জ</option>
                                <option <?php if($record['hometown'] == "Sunamganj") echo 'selected'; ?> value="Sunamganj">Sunamganj - সুনামগঞ্জ</option>
                                <option <?php if($record['hometown'] == "Sylhet") echo 'selected'; ?> value="Sylhet">Sylhet - সিলেট</option>
                                <option <?php if($record['hometown'] == "Tangail") echo 'selected'; ?> value="Tangail">Tangail - টাঙ্গাইল</option>
                                <option <?php if($record['hometown'] == "Thakurgaon") echo 'selected'; ?> value="Thakurgaon">Thakurgaon - ঠাকুরগাঁও</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="current_city">Current City:</label></div>
                        <div class="col-75">
                            <select id="current_city" name="current_city">
                                <option value="">Select Current City</option>
                                <option <?php if($record['current_city'] == "Bagerhat") echo 'selected'; ?> value="Bagerhat">Bagerhat - বাগেরহাট</option>
                                <option <?php if($record['current_city'] == "Bandarban") echo 'selected'; ?> value="Bandarban">Bandarban - বান্দরবান</option>
                                <option <?php if($record['current_city'] == "Barguna") echo 'selected'; ?> value="Barguna">Barguna - বরগুনা</option>
                                <option <?php if($record['current_city'] == "Barisal") echo 'selected'; ?> value="Barisal">Barisal - বরিশাল</option>
                                <option <?php if($record['current_city'] == "Bhola") echo 'selected'; ?> value="Bhola">Bhola - ভোলা</option>
                                <option <?php if($record['current_city'] == "Bogra") echo 'selected'; ?> value="Bogra">Bogra - বগুড়া</option>
                                <option <?php if($record['current_city'] == "Brahmanbaria") echo 'selected'; ?> value="Brahmanbaria">Brahmanbaria - ব্রাহ্মণবাড়িয়া</option>
                                <option <?php if($record['current_city'] == "Chandpur") echo 'selected'; ?> value="Chandpur">Chandpur - চাঁদপুর</option>
                                <option <?php if($record['current_city'] == "Chittagong") echo 'selected'; ?> value="Chittagong">Chittagong - চট্টগ্রাম</option>
                                <option <?php if($record['current_city'] == "Chuadanga") echo 'selected'; ?> value="Chuadanga">Chuadanga - চুয়াডাঙ্গা</option>
                                <option <?php if($record['current_city'] == "Comilla") echo 'selected'; ?> value="Comilla">Comilla - কুমিল্লা</option>
                                <option <?php if($record['current_city'] == "Cox's Bazar") echo 'selected'; ?> value="Cox's Bazar">Cox's Bazar - কক্সবাজার</option>
                                <option <?php if($record['current_city'] == "Dhaka") echo 'selected'; ?> value="Dhaka">Dhaka - ঢাকা</option>
                                <option <?php if($record['current_city'] == "Dinajpur") echo 'selected'; ?> value="Dinajpur">Dinajpur - দিনাজপুর</option>
                                <option <?php if($record['current_city'] == "Faridpur") echo 'selected'; ?> value="Faridpur">Faridpur - ফরিদপুর</option>
                                <option <?php if($record['current_city'] == "Feni") echo 'selected'; ?> value="Feni">Feni - ফেনী</option>
                                <option <?php if($record['current_city'] == "Gaibandha") echo 'selected'; ?> value="Gaibandha">Gaibandha - গাইবান্ধা</option>
                                <option <?php if($record['current_city'] == "Gazipur") echo 'selected'; ?> value="Gazipur">Gazipur - গাজীপুর</option>
                                <option <?php if($record['current_city'] == "Gopalganj") echo 'selected'; ?> value="Gopalganj">Gopalganj - গোপালগঞ্জ</option>
                                <option <?php if($record['current_city'] == "Habiganj") echo 'selected'; ?> value="Habiganj">Habiganj - হবিগঞ্জ</option>
                                <option <?php if($record['current_city'] == "Jamalpur") echo 'selected'; ?> value="Jamalpur">Jamalpur - জামালপুর</option>
                                <option <?php if($record['current_city'] == "Jessore") echo 'selected'; ?> value="Jessore">Jessore - যশোর</option>
                                <option <?php if($record['current_city'] == "Jhalokati") echo 'selected'; ?> value="Jhalokati">Jhalokati - ঝালকাঠি</option>
                                <option <?php if($record['current_city'] == "Jhenaidah") echo 'selected'; ?> value="Jhenaidah">Jhenaidah - ঝিনাইদহ</option>
                                <option <?php if($record['current_city'] == "Joypurhat") echo 'selected'; ?> value="Joypurhat">Joypurhat - জয়পুরহাট</option>
                                <option <?php if($record['current_city'] == "Khagrachari") echo 'selected'; ?> value="Khagrachari">Khagrachari - খাগড়াছড়ি</option>
                                <option <?php if($record['current_city'] == "Khulna") echo 'selected'; ?> value="Khulna">Khulna - খুলনা</option>
                                <option <?php if($record['current_city'] == "Kishoreganj") echo 'selected'; ?> value="Kishoreganj">Kishoreganj - কিশোরগঞ্জ</option>
                                <option <?php if($record['current_city'] == "Kurigram") echo 'selected'; ?> value="Kurigram">Kurigram - কুড়িগ্রাম</option>
                                <option <?php if($record['current_city'] == "Kushtia") echo 'selected'; ?> value="Kushtia">Kushtia - কুষ্টিয়া</option>
                                <option <?php if($record['current_city'] == "Lakshmipur") echo 'selected'; ?> value="Lakshmipur">Lakshmipur - লক্ষ্মীপুর</option>
                                <option <?php if($record['current_city'] == "Lalmonirhat") echo 'selected'; ?> value="Lalmonirhat">Lalmonirhat - লালমনিরহাট</option>
                                <option <?php if($record['current_city'] == "Madaripur") echo 'selected'; ?> value="Madaripur">Madaripur - মাদারীপুর</option>
                                <option <?php if($record['current_city'] == "Magura") echo 'selected'; ?> value="Magura">Magura - মাগুরা</option>
                                <option <?php if($record['current_city'] == "Manikganj") echo 'selected'; ?> value="Manikganj">Manikganj - মানিকগঞ্জ</option>
                                <option <?php if($record['current_city'] == "Maulvibazar") echo 'selected'; ?> value="Maulvibazar">Maulvibazar - মৌলভীবাজার</option>
                                <option <?php if($record['current_city'] == "Meherpur") echo 'selected'; ?> value="Meherpur">Meherpur - মেহেরপুর</option>
                                <option <?php if($record['current_city'] == "Munshiganj") echo 'selected'; ?> value="Munshiganj">Munshiganj - মুন্সীগঞ্জ</option>
                                <option <?php if($record['current_city'] == "Mymensingh") echo 'selected'; ?> value="Mymensingh">Mymensingh - ময়মনসিংহ</option>
                                <option <?php if($record['current_city'] == "Naogaon") echo 'selected'; ?> value="Naogaon">Naogaon - নওগাঁ</option>
                                <option <?php if($record['current_city'] == "Narail") echo 'selected'; ?> value="Narail">Narail - নড়াইল</option>
                                <option <?php if($record['current_city'] == "Narayanganj") echo 'selected'; ?> value="Narayanganj">Narayanganj - নারায়ণগঞ্জ</option>
                                <option <?php if($record['current_city'] == "Narsingdi") echo 'selected'; ?> value="Narsingdi">Narsingdi - নরসিংদী</option>
                                <option <?php if($record['current_city'] == "Natore") echo 'selected'; ?> value="Natore">Natore - নাটোর</option>
                                <option <?php if($record['current_city'] == "Nawabganj") echo 'selected'; ?> value="Nawabganj">Nawabganj - নবাবগঞ্জ</option>
                                <option <?php if($record['current_city'] == "Netrokona") echo 'selected'; ?> value="Netrokona">Netrokona - নেত্রকোনা</option>
                                <option <?php if($record['current_city'] == "Nilphamari") echo 'selected'; ?> value="Nilphamari">Nilphamari - নীলফামারী</option>
                                <option <?php if($record['current_city'] == "Noakhali") echo 'selected'; ?> value="Noakhali">Noakhali - নোয়াখালী</option>
                                <option <?php if($record['current_city'] == "Pabna") echo 'selected'; ?> value="Pabna">Pabna - পাবনা</option>
                                <option <?php if($record['current_city'] == "Panchagarh") echo 'selected'; ?> value="Panchagarh">Panchagarh - পঞ্চগড়</option>
                                <option <?php if($record['current_city'] == "Patuakhali") echo 'selected'; ?> value="Patuakhali">Patuakhali - পটুয়াখালী</option>
                                <option <?php if($record['current_city'] == "Pirojpur") echo 'selected'; ?> value="Pirojpur">Pirojpur - পিরোজপুর</option>
                                <option <?php if($record['current_city'] == "Rajbari") echo 'selected'; ?> value="Rajbari">Rajbari - রাজবাড়ী</option>
                                <option <?php if($record['current_city'] == "Rajshahi") echo 'selected'; ?> value="Rajshahi">Rajshahi - রাজশাহী</option>
                                <option <?php if($record['current_city'] == "Rangamati") echo 'selected'; ?> value="Rangamati">Rangamati - রাঙামাটি</option>
                                <option <?php if($record['current_city'] == "Rangpur") echo 'selected'; ?> value="Rangpur">Rangpur - রংপুর</option>
                                <option <?php if($record['current_city'] == "Satkhira") echo 'selected'; ?> value="Satkhira">Satkhira - সাতক্ষীরা</option>
                                <option <?php if($record['current_city'] == "Shariatpur") echo 'selected'; ?> value="Shariatpur">Shariatpur - শরীয়তপুর</option>
                                <option <?php if($record['current_city'] == "Sherpur") echo 'selected'; ?> value="Sherpur">Sherpur - শেরপুর</option>
                                <option <?php if($record['current_city'] == "Sirajgonj") echo 'selected'; ?> value="Sirajgonj">Sirajgonj - সিরাজগঞ্জ</option>
                                <option <?php if($record['current_city'] == "Sunamganj") echo 'selected'; ?> value="Sunamganj">Sunamganj - সুনামগঞ্জ</option>
                                <option <?php if($record['current_city'] == "Sylhet") echo 'selected'; ?> value="Sylhet">Sylhet - সিলেট</option>
                                <option <?php if($record['current_city'] == "Tangail") echo 'selected'; ?> value="Tangail">Tangail - টাঙ্গাইল</option>
                                <option <?php if($record['current_city'] == "Thakurgaon") echo 'selected'; ?> value="Thakurgaon">Thakurgaon - ঠাকুরগাঁও</option>
                            </select>
                        </div>
                    </div>

                </fieldset>

                <br>

                <fieldset class="container">
                    <legend><strong>Academic Information (S.S.C)</strong></legend>

                    <div class="row">
                        <div class="col-25"><label for="ssc_roll">S.S.C Exam Roll:</label></div>
                        <div class="col-75"><input type="text" id="ssc_roll" name="ssc_roll" value="<?php if($record['ssc_roll']) echo $record['ssc_roll']; ?>" placeholder="S.S.C Exam Roll" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="ssc_board">S.S.C Exam Roll:</label></div>
                        <div class="col-75">
                            <select id="ssc_board" name="ssc_board" required>
                                <option value="">Select S.S.C Board</option>
                                <option <?php if($record['ssc_board'] == "Dhaka") echo 'selected'; ?> value="Dhaka">Dhaka</option>
                                <option <?php if($record['ssc_board'] == "Rajshahi") echo 'selected'; ?> value="Rajshahi">Rajshahi</option>
                                <option <?php if($record['ssc_board'] == "Jessore") echo 'selected'; ?> value="Jessore">Jessore</option>
                                <option <?php if($record['ssc_board'] == "Barisal") echo 'selected'; ?> value="Barisal">Barisal</option>
                                <option <?php if($record['ssc_board'] == "Chittagong") echo 'selected'; ?> value="Chittagong">Chittagong</option>
                                <option <?php if($record['ssc_board'] == "Sylhet") echo 'selected'; ?> value="Sylhet">Sylhet</option>
                                <option <?php if($record['ssc_board'] == "Comilla") echo 'selected'; ?> value="Comilla">Comilla</option>
                                <option <?php if($record['ssc_board'] == "Dinajpur") echo 'selected'; ?> value="Dinajpur">Dinajpur</option>
                                <option <?php if($record['ssc_board'] == "Other") echo 'selected'; ?> value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="ssc_year">S.S.C Passing Year:</label></div>
                        <div class="col-75">
                            <select id="ssc_year" name="ssc_year" required>
                                <option value="">Select S.S.C Passing Year</option>
                                <option <?php if($record['ssc_year'] == "2000") echo 'selected'; ?> value="2000">2000</option>
                                <option <?php if($record['ssc_year'] == "2001") echo 'selected'; ?> value="2001">2001</option>
                                <option <?php if($record['ssc_year'] == "2002") echo 'selected'; ?> value="2002">2002</option>
                                <option <?php if($record['ssc_year'] == "2003") echo 'selected'; ?> value="2003">2003</option>
                                <option <?php if($record['ssc_year'] == "2004") echo 'selected'; ?> value="2004">2004</option>
                                <option <?php if($record['ssc_year'] == "2005") echo 'selected'; ?> value="2005">2005</option>
                                <option <?php if($record['ssc_year'] == "2006") echo 'selected'; ?> value="2006">2006</option>
                                <option <?php if($record['ssc_year'] == "2007") echo 'selected'; ?> value="2007">2007</option>
                                <option <?php if($record['ssc_year'] == "2008") echo 'selected'; ?> value="2008">2008</option>
                                <option <?php if($record['ssc_year'] == "2009") echo 'selected'; ?> value="2009">2009</option>
                                <option <?php if($record['ssc_year'] == "2010") echo 'selected'; ?> value="2010">2010</option>
                                <option <?php if($record['ssc_year'] == "2011") echo 'selected'; ?> value="2011">2011</option>
                                <option <?php if($record['ssc_year'] == "2012") echo 'selected'; ?> value="2012">2012</option>
                                <option <?php if($record['ssc_year'] == "2013") echo 'selected'; ?> value="2013">2013</option>
                                <option <?php if($record['ssc_year'] == "2014") echo 'selected'; ?> value="2014">2014</option>
                                <option <?php if($record['ssc_year'] == "2015") echo 'selected'; ?> value="2015">2015</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="ssc_group">S.S.C Group:</label></div>
                        <div class="col-75">
                            <select id="ssc_group" name="ssc_group" required>
                                <option value="">Select S.S.C Group</option>
                                <option <?php if($record['ssc_group'] == "Science") echo 'selected'; ?> value="Science">Science</option>
                                <option <?php if($record['ssc_group'] == "Arts") echo 'selected'; ?> value="Arts">Arts</option>
                                <option <?php if($record['ssc_group'] == "Commerce") echo 'selected'; ?> value="Commerce">Commerce</option>
                                <option <?php if($record['ssc_group'] == "Other") echo 'selected'; ?> value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="ssc_result">S.S.C Result (GPA/Division):</label></div>
                        <div class="col-75"><input type="text" id="ssc_result" name="ssc_result" value="<?php if($record['ssc_result']) echo $record['ssc_result']; ?>" placeholder="S.S.C Result (GPA/Division)" required></div>
                    </div>

                </fieldset>

                <br>

                <fieldset class="container">
                    <legend><strong>Academic Information (H.S.C)</strong></legend>

                    <div class="row">
                        <div class="col-25"><label for="hsc_roll">H.S.C Exam Roll:</label></div>
                        <div class="col-75"><input type="text" id="hsc_roll" name="hsc_roll" value="<?php if($record['hsc_roll']) echo $record['hsc_roll']; ?>" placeholder="H.S.C Exam Roll" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="hsc_board">H.S.C Exam Roll:</label></div>
                        <div class="col-75">
                            <select id="hsc_board" name="hsc_board" required>
                                <option value="">Select H.S.C Board</option>
                                <option <?php if($record['hsc_board'] == "Dhaka") echo 'selected'; ?> value="Dhaka">Dhaka</option>
                                <option <?php if($record['hsc_board'] == "Rajshahi") echo 'selected'; ?> value="Rajshahi">Rajshahi</option>
                                <option <?php if($record['hsc_board'] == "Jessore") echo 'selected'; ?> value="Jessore">Jessore</option>
                                <option <?php if($record['hsc_board'] == "Barisal") echo 'selected'; ?> value="Barisal">Barisal</option>
                                <option <?php if($record['hsc_board'] == "Chittagong") echo 'selected'; ?> value="Chittagong">Chittagong</option>
                                <option <?php if($record['hsc_board'] == "Sylhet") echo 'selected'; ?> value="Sylhet">Sylhet</option>
                                <option <?php if($record['hsc_board'] == "Comilla") echo 'selected'; ?> value="Comilla">Comilla</option>
                                <option <?php if($record['hsc_board'] == "Dinajpur") echo 'selected'; ?> value="Dinajpur">Dinajpur</option>
                                <option <?php if($record['hsc_board'] == "Other") echo 'selected'; ?> value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="hsc_year">H.S.C Passing Year:</label></div>
                        <div class="col-75">
                            <select id="hsc_year" name="hsc_year" required>
                                <option value="">Select H.S.C Passing Year</option>
                                <option <?php if($record['hsc_year'] == "2000") echo 'selected'; ?> value="2000">2000</option>
                                <option <?php if($record['hsc_year'] == "2001") echo 'selected'; ?> value="2001">2001</option>
                                <option <?php if($record['hsc_year'] == "2002") echo 'selected'; ?> value="2002">2002</option>
                                <option <?php if($record['hsc_year'] == "2003") echo 'selected'; ?> value="2003">2003</option>
                                <option <?php if($record['hsc_year'] == "2004") echo 'selected'; ?> value="2004">2004</option>
                                <option <?php if($record['hsc_year'] == "2005") echo 'selected'; ?> value="2005">2005</option>
                                <option <?php if($record['hsc_year'] == "2006") echo 'selected'; ?> value="2006">2006</option>
                                <option <?php if($record['hsc_year'] == "2007") echo 'selected'; ?> value="2007">2007</option>
                                <option <?php if($record['hsc_year'] == "2008") echo 'selected'; ?> value="2008">2008</option>
                                <option <?php if($record['hsc_year'] == "2009") echo 'selected'; ?> value="2009">2009</option>
                                <option <?php if($record['hsc_year'] == "2010") echo 'selected'; ?> value="2010">2010</option>
                                <option <?php if($record['hsc_year'] == "2011") echo 'selected'; ?> value="2011">2011</option>
                                <option <?php if($record['hsc_year'] == "2012") echo 'selected'; ?> value="2012">2012</option>
                                <option <?php if($record['hsc_year'] == "2013") echo 'selected'; ?> value="2013">2013</option>
                                <option <?php if($record['hsc_year'] == "2014") echo 'selected'; ?> value="2014">2014</option>
                                <option <?php if($record['hsc_year'] == "2015") echo 'selected'; ?> value="2015">2015</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="hsc_group">H.S.C Group:</label></div>
                        <div class="col-75">
                            <select id="hsc_group" name="hsc_group" required>
                                <option value="">Select H.S.C Group</option>
                                <option <?php if($record['hsc_group'] == "Science") echo 'selected'; ?> value="Science">Science</option>
                                <option <?php if($record['hsc_group'] == "Arts") echo 'selected'; ?> value="Arts">Arts</option>
                                <option <?php if($record['hsc_group'] == "Commerce") echo 'selected'; ?> value="Commerce">Commerce</option>
                                <option <?php if($record['hsc_group'] == "Other") echo 'selected'; ?> value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="hsc_result">H.S.C Result (GPA/Division):</label></div>
                        <div class="col-75"><input type="text" id="hsc_result" name="hsc_result" value="<?php if($record['hsc_result']) echo $record['hsc_result']; ?>" placeholder="H.S.C Result (GPA/Division)" required></div>
                    </div>

                </fieldset>

                <br>

                <fieldset class="container">
                    <legend><strong>Academic Information (Honers/Bachelor)</strong></legend>

                    <div class="row">
                        <div class="col-25"><label for="hons_year">Honers/Bachelor Passing Year:</label></div>
                        <div class="col-75">
                            <select id="hons_year" name="hons_year" required>
                                <option value="">Select Honers/Bachelor Passing Year</option>
                                <option <?php if($record['hons_year'] == "2000") echo 'selected'; ?> value="2000">2000</option>
                                <option <?php if($record['hons_year'] == "2001") echo 'selected'; ?> value="2001">2001</option>
                                <option <?php if($record['hons_year'] == "2002") echo 'selected'; ?> value="2002">2002</option>
                                <option <?php if($record['hons_year'] == "2003") echo 'selected'; ?> value="2003">2003</option>
                                <option <?php if($record['hons_year'] == "2004") echo 'selected'; ?> value="2004">2004</option>
                                <option <?php if($record['hons_year'] == "2005") echo 'selected'; ?> value="2005">2005</option>
                                <option <?php if($record['hons_year'] == "2006") echo 'selected'; ?> value="2006">2006</option>
                                <option <?php if($record['hons_year'] == "2007") echo 'selected'; ?> value="2007">2007</option>
                                <option <?php if($record['hons_year'] == "2008") echo 'selected'; ?> value="2008">2008</option>
                                <option <?php if($record['hons_year'] == "2009") echo 'selected'; ?> value="2009">2009</option>
                                <option <?php if($record['hons_year'] == "2010") echo 'selected'; ?> value="2010">2010</option>
                                <option <?php if($record['hons_year'] == "2011") echo 'selected'; ?> value="2011">2011</option>
                                <option <?php if($record['hons_year'] == "2012") echo 'selected'; ?> value="2012">2012</option>
                                <option <?php if($record['hons_year'] == "2013") echo 'selected'; ?> value="2013">2013</option>
                                <option <?php if($record['hons_year'] == "2014") echo 'selected'; ?> value="2014">2014</option>
                                <option <?php if($record['hons_year'] == "2015") echo 'selected'; ?> value="2015">2015</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="hons_subject">Honers/Bachelor Subject:</label></div>
                        <div class="col-75"><input type="text" id="hons_subject" name="hons_subject" value="<?php if($record['hons_subject']) echo $record['hons_subject']; ?>" placeholder="Honers/Bachelor Subject"></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="hons_result">Honers/Bachelor Result (GPA/Division):</label></div>
                        <div class="col-75"><input type="text" id="hons_result" name="hons_result" value="<?php if($record['hons_result']) echo $record['hons_result']; ?>" placeholder="Honers/Bachelor Result (GPA/Division)"></div>
                    </div>

                </fieldset>

                <input type="submit" id="update" name="update" value="Update">
            </form>

        </div>
    </div>
</div>

</body>
</html>


