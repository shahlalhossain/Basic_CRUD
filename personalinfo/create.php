<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Shahlal Hossain">
    <meta name="description" content="PHP CRUD Practices">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, MySQL, CRUD">
    <title>Add Personal Details</title>

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

            <form action="add.php" method="POST">

                <fieldset class="container">
                    <legend><strong>Personal Information</strong></legend>

                    <div class="row">
                        <div class="col-25"><label for="code">Access Code:</label></div>
                        <div class="col-75"><input type="text" id="code" name="code" placeholder="Access Code" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="track">Preferred Track:</label></div>
                        <div class="col-75">
                            <select id="track" name="track" required>
                                <option value="" selected>Select Track</option>
                                <option value="ITS">ITS</option>
                                <option value="ITES">ITES</option>
                                <option value="ITSS">ITSS</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="name">Full Name:</label></div>
                        <div class="col-75"><input type="text" id="name" name="name" placeholder="Full Name" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="mobile">Mobile Number:</label></div>
                        <div class="col-75"><input type="text" id="mobile" name="mobile" placeholder="+8801731479874" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="email">Email Address:</label></div>
                        <div class="col-75"><input type="text" id="email" name="email" placeholder="Email Address" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="gender">Gender/Sex:</label></div>
                        <div class="col-75">
                            <input type="radio" id="gender" name="gender" value="Male" checked>Male
                            <input type="radio" id="gender" name="gender" value="Female">Female
                            <input type="radio" id="gender" name="gender" value="Transgender">Transgender
                            <input type="radio" id="gender" name="gender" value="Others">Others
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="dob">Date of Birth:</label></div>
                        <div class="col-75"><input type="date" id="dob" name="dob" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="religion">Religion:</label></div>
                        <div class="col-75">
                            <select id="religion" name="religion" required>
                                <option value="" selected>Select Religion</option>
                                <option value="Muslim">Muslim</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Christian">Christian</option>
                                <option value="Buddhism">Buddhism</option>
                                <option value="Judaism">Judaism</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="father_name">Father Name:</label></div>
                        <div class="col-75"><input type="text" id="father_name" name="father_name" placeholder="Father Name" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="mother_name">Mother Name:</label></div>
                        <div class="col-75"><input type="text" id="mother_name" name="mother_name" placeholder="Mother Name" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="nid">National ID:</label></div>
                        <div class="col-75"><input type="text" id="nid" name="nid" placeholder="National ID" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="nationality">Nationality:</label></div>
                        <div class="col-75">
                            <select id="nationality" name="nationality" required>
                                <option value="" selected>Select Nationality</option>
                                <option value="Bangladeshi">Bangladeshi</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="hometown">Hometown:</label></div>
                        <div class="col-75">
                            <select id="hometown" name="hometown">
                                <option value="" selected>Select Hometown</option>
                                <option value="Bagerhat">Bagerhat - বাগেরহাট</option>
                                <option value="Bandarban">Bandarban - বান্দরবান</option>
                                <option value="Barguna">Barguna - বরগুনা</option>
                                <option value="Barisal">Barisal - বরিশাল</option>
                                <option value="Bhola">Bhola - ভোলা</option>
                                <option value="Bogra">Bogra - বগুড়া</option>
                                <option value="Brahmanbaria">Brahmanbaria - ব্রাহ্মণবাড়িয়া</option>
                                <option value="Chandpur">Chandpur - চাঁদপুর</option>
                                <option value="Chittagong">Chittagong - চট্টগ্রাম</option>
                                <option value="Chuadanga">Chuadanga - চুয়াডাঙ্গা</option>
                                <option value="Comilla">Comilla - কুমিল্লা</option>
                                <option value="Cox's Bazar">Cox's Bazar - কক্সবাজার</option>
                                <option value="Dhaka">Dhaka - ঢাকা</option>
                                <option value="Dinajpur">Dinajpur - দিনাজপুর</option>
                                <option value="Faridpur">Faridpur - ফরিদপুর</option>
                                <option value="Feni">Feni - ফেনী</option>
                                <option value="Gaibandha">Gaibandha - গাইবান্ধা</option>
                                <option value="Gazipur">Gazipur - গাজীপুর</option>
                                <option value="Gopalganj">Gopalganj - গোপালগঞ্জ</option>
                                <option value="Habiganj">Habiganj - হবিগঞ্জ</option>
                                <option value="Jamalpur">Jamalpur - জামালপুর</option>
                                <option value="Jessore">Jessore - যশোর</option>
                                <option value="Jhalokati">Jhalokati - ঝালকাঠি</option>
                                <option value="Jhenaidah">Jhenaidah - ঝিনাইদহ</option>
                                <option value="Joypurhat">Joypurhat - জয়পুরহাট</option>
                                <option value="Khagrachari">Khagrachari - খাগড়াছড়ি</option>
                                <option value="Khulna">Khulna - খুলনা</option>
                                <option value="Kishoreganj">Kishoreganj - কিশোরগঞ্জ</option>
                                <option value="Kurigram">Kurigram - কুড়িগ্রাম</option>
                                <option value="Kushtia">Kushtia - কুষ্টিয়া</option>
                                <option value="Lakshmipur">Lakshmipur - লক্ষ্মীপুর</option>
                                <option value="Lalmonirhat">Lalmonirhat - লালমনিরহাট</option>
                                <option value="Madaripur">Madaripur - মাদারীপুর</option>
                                <option value="Magura">Magura - মাগুরা</option>
                                <option value="Manikganj">Manikganj - মানিকগঞ্জ</option>
                                <option value="Maulvibazar">Maulvibazar - মৌলভীবাজার</option>
                                <option value="Meherpur">Meherpur - মেহেরপুর</option>
                                <option value="Munshiganj">Munshiganj - মুন্সীগঞ্জ</option>
                                <option value="Mymensingh">Mymensingh - ময়মনসিংহ</option>
                                <option value="Naogaon">Naogaon - নওগাঁ</option>
                                <option value="Narail">Narail - নড়াইল</option>
                                <option value="Narayanganj">Narayanganj - নারায়ণগঞ্জ</option>
                                <option value="Narsingdi">Narsingdi - নরসিংদী</option>
                                <option value="Natore">Natore - নাটোর</option>
                                <option value="Nawabganj">Nawabganj - নবাবগঞ্জ</option>
                                <option value="Netrokona">Netrokona - নেত্রকোনা</option>
                                <option value="Nilphamari">Nilphamari - নীলফামারী</option>
                                <option value="Noakhali">Noakhali - নোয়াখালী</option>
                                <option value="Pabna">Pabna - পাবনা</option>
                                <option value="Panchagarh">Panchagarh - পঞ্চগড়</option>
                                <option value="Patuakhali">Patuakhali - পটুয়াখালী</option>
                                <option value="Pirojpur">Pirojpur - পিরোজপুর</option>
                                <option value="Rajbari">Rajbari - রাজবাড়ী</option>
                                <option value="Rajshahi">Rajshahi - রাজশাহী</option>
                                <option value="Rangamati">Rangamati - রাঙামাটি</option>
                                <option value="Rangpur">Rangpur - রংপুর</option>
                                <option value="Satkhira">Satkhira - সাতক্ষীরা</option>
                                <option value="Shariatpur">Shariatpur - শরীয়তপুর</option>
                                <option value="Sherpur">Sherpur - শেরপুর</option>
                                <option value="Sirajgonj">Sirajgonj - সিরাজগঞ্জ</option>
                                <option value="Sunamganj">Sunamganj - সুনামগঞ্জ</option>
                                <option value="Sylhet">Sylhet - সিলেট</option>
                                <option value="Tangail">Tangail - টাঙ্গাইল</option>
                                <option value="Thakurgaon">Thakurgaon - ঠাকুরগাঁও</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="current_city">Current City:</label></div>
                        <div class="col-75">
                            <select id="current_city" name="current_city">
                                <option value="" selected>Select Current City</option>
                                <option value="Bagerhat">Bagerhat - বাগেরহাট</option>
                                <option value="Bandarban">Bandarban - বান্দরবান</option>
                                <option value="Barguna">Barguna - বরগুনা</option>
                                <option value="Barisal">Barisal - বরিশাল</option>
                                <option value="Bhola">Bhola - ভোলা</option>
                                <option value="Bogra">Bogra - বগুড়া</option>
                                <option value="Brahmanbaria">Brahmanbaria - ব্রাহ্মণবাড়িয়া</option>
                                <option value="Chandpur">Chandpur - চাঁদপুর</option>
                                <option value="Chittagong">Chittagong - চট্টগ্রাম</option>
                                <option value="Chuadanga">Chuadanga - চুয়াডাঙ্গা</option>
                                <option value="Comilla">Comilla - কুমিল্লা</option>
                                <option value="Cox's Bazar">Cox's Bazar - কক্সবাজার</option>
                                <option value="Dhaka">Dhaka - ঢাকা</option>
                                <option value="Dinajpur">Dinajpur - দিনাজপুর</option>
                                <option value="Faridpur">Faridpur - ফরিদপুর</option>
                                <option value="Feni">Feni - ফেনী</option>
                                <option value="Gaibandha">Gaibandha - গাইবান্ধা</option>
                                <option value="Gazipur">Gazipur - গাজীপুর</option>
                                <option value="Gopalganj">Gopalganj - গোপালগঞ্জ</option>
                                <option value="Habiganj">Habiganj - হবিগঞ্জ</option>
                                <option value="Jamalpur">Jamalpur - জামালপুর</option>
                                <option value="Jessore">Jessore - যশোর</option>
                                <option value="Jhalokati">Jhalokati - ঝালকাঠি</option>
                                <option value="Jhenaidah">Jhenaidah - ঝিনাইদহ</option>
                                <option value="Joypurhat">Joypurhat - জয়পুরহাট</option>
                                <option value="Khagrachari">Khagrachari - খাগড়াছড়ি</option>
                                <option value="Khulna">Khulna - খুলনা</option>
                                <option value="Kishoreganj">Kishoreganj - কিশোরগঞ্জ</option>
                                <option value="Kurigram">Kurigram - কুড়িগ্রাম</option>
                                <option value="Kushtia">Kushtia - কুষ্টিয়া</option>
                                <option value="Lakshmipur">Lakshmipur - লক্ষ্মীপুর</option>
                                <option value="Lalmonirhat">Lalmonirhat - লালমনিরহাট</option>
                                <option value="Madaripur">Madaripur - মাদারীপুর</option>
                                <option value="Magura">Magura - মাগুরা</option>
                                <option value="Manikganj">Manikganj - মানিকগঞ্জ</option>
                                <option value="Maulvibazar">Maulvibazar - মৌলভীবাজার</option>
                                <option value="Meherpur">Meherpur - মেহেরপুর</option>
                                <option value="Munshiganj">Munshiganj - মুন্সীগঞ্জ</option>
                                <option value="Mymensingh">Mymensingh - ময়মনসিংহ</option>
                                <option value="Naogaon">Naogaon - নওগাঁ</option>
                                <option value="Narail">Narail - নড়াইল</option>
                                <option value="Narayanganj">Narayanganj - নারায়ণগঞ্জ</option>
                                <option value="Narsingdi">Narsingdi - নরসিংদী</option>
                                <option value="Natore">Natore - নাটোর</option>
                                <option value="Nawabganj">Nawabganj - নবাবগঞ্জ</option>
                                <option value="Netrokona">Netrokona - নেত্রকোনা</option>
                                <option value="Nilphamari">Nilphamari - নীলফামারী</option>
                                <option value="Noakhali">Noakhali - নোয়াখালী</option>
                                <option value="Pabna">Pabna - পাবনা</option>
                                <option value="Panchagarh">Panchagarh - পঞ্চগড়</option>
                                <option value="Patuakhali">Patuakhali - পটুয়াখালী</option>
                                <option value="Pirojpur">Pirojpur - পিরোজপুর</option>
                                <option value="Rajbari">Rajbari - রাজবাড়ী</option>
                                <option value="Rajshahi">Rajshahi - রাজশাহী</option>
                                <option value="Rangamati">Rangamati - রাঙামাটি</option>
                                <option value="Rangpur">Rangpur - রংপুর</option>
                                <option value="Satkhira">Satkhira - সাতক্ষীরা</option>
                                <option value="Shariatpur">Shariatpur - শরীয়তপুর</option>
                                <option value="Sherpur">Sherpur - শেরপুর</option>
                                <option value="Sirajgonj">Sirajgonj - সিরাজগঞ্জ</option>
                                <option value="Sunamganj">Sunamganj - সুনামগঞ্জ</option>
                                <option value="Sylhet">Sylhet - সিলেট</option>
                                <option value="Tangail">Tangail - টাঙ্গাইল</option>
                                <option value="Thakurgaon">Thakurgaon - ঠাকুরগাঁও</option>
                            </select>
                        </div>
                    </div>

                </fieldset>

                <br>

                <fieldset class="container">
                    <legend><strong>Academic Information (S.S.C)</strong></legend>

                    <div class="row">
                        <div class="col-25"><label for="ssc_roll">S.S.C Exam Roll:</label></div>
                        <div class="col-75"><input type="text" id="ssc_roll" name="ssc_roll" placeholder="S.S.C Exam Roll" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="ssc_board">S.S.C Exam Roll:</label></div>
                        <div class="col-75">
                            <select id="ssc_board" name="ssc_board" required>
                                <option value="" selected>Select S.S.C Board</option>
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
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="ssc_year">S.S.C Passing Year:</label></div>
                        <div class="col-75">
                            <select id="ssc_year" name="ssc_year" required>
                                <option value="" selected>Select S.S.C Passing Year</option>
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
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="ssc_group">S.S.C Group:</label></div>
                        <div class="col-75">
                            <select id="ssc_group" name="ssc_group" required>
                                <option value="" selected>Select S.S.C Group</option>
                                <option selected>Select Group</option>
                                <option value="Science">Science</option>
                                <option value="Arts">Arts</option>
                                <option value="Commerce">Commerce</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="ssc_result">S.S.C Result (GPA/Division):</label></div>
                        <div class="col-75"><input type="text" id="ssc_result" name="ssc_result" placeholder="S.S.C Result (GPA/Division)" required></div>
                    </div>

                </fieldset>

                <br>

                <fieldset class="container">
                    <legend><strong>Academic Information (H.S.C)</strong></legend>

                    <div class="row">
                        <div class="col-25"><label for="hsc_roll">H.S.C Exam Roll:</label></div>
                        <div class="col-75"><input type="text" id="hsc_roll" name="hsc_roll" placeholder="H.S.C Exam Roll" required></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="hsc_board">H.S.C Exam Roll:</label></div>
                        <div class="col-75">
                            <select id="hsc_board" name="hsc_board" required>
                                <option value="" selected>Select H.S.C Board</option>
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
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="hsc_year">H.S.C Passing Year:</label></div>
                        <div class="col-75">
                            <select id="hsc_year" name="hsc_year" required>
                                <option value="" selected>Select H.S.C Passing Year</option>
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
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="hsc_group">H.S.C Group:</label></div>
                        <div class="col-75">
                            <select id="hsc_group" name="hsc_group" required>
                                <option value="" selected>Select H.S.C Group</option>
                                <option selected>Select Group</option>
                                <option value="Science">Science</option>
                                <option value="Arts">Arts</option>
                                <option value="Commerce">Commerce</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="hsc_result">H.S.C Result (GPA/Division):</label></div>
                        <div class="col-75"><input type="text" id="hsc_result" name="hsc_result" placeholder="H.S.C Result (GPA/Division)" required></div>
                    </div>

                </fieldset>

                <br>

                <fieldset class="container">
                    <legend><strong>Academic Information (Honers/Bachelor)</strong></legend>

                    <div class="row">
                        <div class="col-25"><label for="hons_year">Honers/Bachelor Passing Year:</label></div>
                        <div class="col-75">
                            <select id="hons_year" name="hons_year" required>
                                <option value="" selected>Select Honers/Bachelor Passing Year</option>
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
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="hons_subject">Honers/Bachelor Subject:</label></div>
                        <div class="col-75"><input type="text" id="hons_subject" name="hons_subject" placeholder="Honers/Bachelor Subject"></div>
                    </div>

                    <div class="row">
                        <div class="col-25"><label for="hons_result">Honers/Bachelor Result (GPA/Division):</label></div>
                        <div class="col-75"><input type="text" id="hons_result" name="hons_result" placeholder="Honers/Bachelor Result (GPA/Division)"></div>
                    </div>

                </fieldset>

                <input type="submit" id="submit" name="submit" value="Submit">
            </form>

        </div>
    </div>
</div>

</body>
</html>