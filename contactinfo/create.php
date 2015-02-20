<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Shahlal Hossain">
    <meta name="description" content="PHP CRUD Practices">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, MySQL, CRUD">
    <title>Contact Information</title>

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
                    <span>Add New Contact</span>
                </div>
                <div class="col-6" style="text-align: right; padding-top: 10px;">
                    <a href="list.php">Back to List</a>
                </div>
            </div>

            <hr>

            <form action="add.php" method="POST">

                <div class="row">
                    <div class="col-25"><label for="contact_person">Contact Person Name:</label></div>
                    <div class="col-75"><input type="text" id="contact_person" name="contact_person" placeholder="Contact Person Name" required></div>
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
                    <div class="col-25"><label for="profession">Profession/Occupation:</label></div>
                    <div class="col-75">
                        <select id="profession" name="profession" required>
                            <option value="" selected>Select Profession/Occupation</option>
                            <option value="Account Manager">Account Manager – একাউন্ট ম্যানেজার</option>
                            <option value="Accountant">Accountant – হিসাবরক্ষক</option>
                            <option value="Actor">Actor – অভিনেতা</option>
                            <option value="Actress">Actress – অভিনেত্রী</option>
                            <option value="Administrative Assistant">Administrative Assistant – প্রশাসনিক সহকারী</option>
                            <option value="Aerospace Engineer">Aerospace Engineer – মহাকাশ/এয়ারোস্পেস প্রকৌশলী</option>
                            <option value="Air Hostess">Air Hostess – বিমানবালা</option>
                            <option value="Architect">Architect – স্থপতি</option>
                            <option value="AI Engineer">AI Engineer – কৃত্রিম বুদ্ধিমত্তা প্রকৌশলী</option>
                            <option value="Artisan">Artisan – কারিগর</option>
                            <option value="Artist">Artist – শিল্পী</option>
                            <option value="Astrologer">Astrologer – জ্যোতিষী</option>
                            <option value="Astronomer">Astronomer – জ্যোতির্বিজ্ঞানী</option>
                            <option value="Author">Author – লেখক</option>
                            <option value="Baker">Baker – বেকার</option>
                            <option value="Bank Teller">Bank Teller – ব্যাংক টেলার বা কোষাধ্যক্ষ</option>
                            <option value="Banker">Banker – ব্যাংকার</option>
                            <option value="Barber">Barber – নাপিত</option>
                            <option value="Bartender">Bartender – বারটেন্ডার/পানীয় পরিবেশনকারী</option>
                            <option value="Biomedical Engineer">Biomedical Engineer – বায়োমেডিক্যাল প্রকৌশলী</option>
                            <option value="Biotechnologist">Biotechnologist – জৈব প্রযুক্তিবিদ</option>
                            <option value="Blacksmith">Blacksmith – কামার</option>
                            <option value="Bookseller">Bookseller – বই বিক্রেতা/পুস্তক-বিক্রেতা</option>
                            <option value="Bricklayer">Bricklayer – রাজমিস্ত্রি</option>
                            <option value="Bus Driver">Bus Driver – বাস চালক</option>
                            <option value="Bus Helper/Bus Conductor">Bus Helper/Bus Conductor – বাসের হেলপার</option>
                            <option value="Butcher">Butcher – কসাই</option>
                            <option value="Cabin Crew">Cabin Crew – বিমানের বা জাহাজের নাবিক</option>
                            <option value="Carpenter">Carpenter – কাঠমিস্ত্রি</option>
                            <option value="Cashier">Cashier – ক্যাশিয়ার বা কোষাধ্যক্ষ</option>
                            <option value="Chef">Chef – পাচক/বাবুর্চি</option>
                            <option value="Cleaner">Cleaner – পরিষ্কারক</option>
                            <option value="Cobbler">Cobbler – মুচি</option>
                            <option value="Computer Programmer">Computer Programmer – কম্পিউটার প্রোগ্রামার</option>
                            <option value="Construction Worker">Construction Worker – নির্মাণ শ্রমিক</option>
                            <option value="Cook">Cook – রাঁধুনি / বাবুর্চি</option>
                            <option value="Craftsman">Craftsman – কারিগর</option>
                            <option value="Customer Service Representative">Customer Service Representative – গ্রাহক পরিষেবা প্রতিনিধি</option>
                            <option value="Delivery Man">Delivery Man –  সরবরাহকারী বা ডেলিভারি ম্যান</option>
                            <option value="Dentist">Dentist – ডেন্টিস্ট/দন্ত-চিকিৎসক</option>
                            <option value="Designer">Designer – নকশাকার</option>
                            <option value="Doctor">Doctor – ডাক্তার</option>
                            <option value="Doorman">Doorman – দারোয়ান</option>
                            <option value="Dustman">Dustman – ডাস্টম্যান/ঝাড়ুদার</option>
                            <option value="Education Administrator">Education Administrator – শিক্ষা প্রশাসক</option>
                            <option value="Educational Consultant">Educational Consultant – শিক্ষাগত পরামর্শক</option>
                            <option value="Electrician">Electrician – ইলেকট্রিশিয়ান/বিদ্যুৎমিস্ত্রি</option>
                            <option value="Engineer">Engineer – প্রকৌশলী</option>
                            <option value="Entrepreneur">Entrepreneur – উদ্যোক্তা</option>
                            <option value="Environmental Scientist">Environmental Scientist – পরিবেশ বিজ্ঞানী</option>
                            <option value="Event Planner">Event Planner – ইভেন্ট পরিকল্পক</option>
                            <option value="Factory Worker">Factory Worker – কারখানা শ্রমিক</option>
                            <option value="Farmer">Farmer – কৃষক</option>
                            <option value="Financial Advisor">Financial Advisor – আর্থিক উপদেষ্টা</option>
                            <option value="Financial Analyst">Financial Analyst – আর্থিক বিশ্লেষক</option>
                            <option value="Firefighter/Fireman">Firefighter/Fireman – অগ্নিনির্বাপক/দমকলকর্মী</option>
                            <option value="Fish Dealer/Fishmonger">Fish Dealer/Fishmonger – মৎস্য বিক্রেতা</option>
                            <option value="Fisherman">Fisherman – জেলে/মৎস্যজীবী/মৎস্যচাষী</option>
                            <option value="Flight Attendant">Flight Attendant – বিমানবালা</option>
                            <option value="Florist">Florist – ফুলওয়ালা</option>
                            <option value="Gardener">Gardener – মালী</option>
                            <option value="Gatekeeper">Gatekeeper – দ্বাররক্ষী/দারোয়ান</option>
                            <option value="Goldsmith">Goldsmith – স্বর্ণকার</option>
                            <option value="Graphic Designer">Graphic Designer – গ্রাফিক ডিজাইনার</option>
                            <option value="Hairdresser">Hairdresser – হেয়ারড্রেসার/কেশবিন্যাসকারী</option>
                            <option value="Headmaster/Headmistress">Headmaster/Headmistress – প্রধান শিক্ষক/প্রধান শিক্ষিকা</option>
                            <option value="Human Resources Manager">Human Resources Manager – মানব সম্পদ ব্যবস্থাপক</option>
                            <option value="IT Specialist">IT Specialist – তথ্য প্রযুক্তি বিশেষজ্ঞ</option>
                            <option value="Interpreter">Interpreter – দোভাষী/ব্যাখ্যাতা/অনুবাদক</option>
                            <option value="Janitor">Janitor – তত্ত্বাবধায়ক/দ্বারপাল</option>
                            <option value="Journalist">Journalist – সাংবাদিক</option>
                            <option value="Judge">Judge – বিচারক</option>
                            <option value="Landlord/Landlady">Landlord/Landlady – বাড়িওয়ালা/বাড়িওয়ালী</option>
                            <option value="Lawyer">Lawyer – আইনজীবী</option>
                            <option value="Lecturer">Lecturer – প্রভাষক</option>
                            <option value="Librarian">Librarian – গ্রন্থাগারিক</option>
                            <option value="Lifeguard">Lifeguard – লাইফগার্ড</option>
                            <option value="Locksmith">Locksmith – তালা-চাবি মিস্ত্রি</option>
                            <option value="Manager">Manager – ম্যানেজার/ব্যাবস্থাপক</option>
                            <option value="Marketing Specialist">Marketing Specialist – বিপণন বিশেষজ্ঞ</option>
                            <option value="Mason">Mason – রাজমিস্ত্রি</option>
                            <option value="Matchmaker">Matchmaker – ঘটক</option>
                            <option value="Mechanic">Mechanic – মেকানিক</option>
                            <option value="Medical Assistant">Medical Assistant – চিকিৎসা সহকারী</option>
                            <option value="Medical Lab Technologist">Medical Lab Technologist – মেডিকেল ল্যাব টেকনোলজিস্ট</option>
                            <option value="Medical Researcher">Medical Researcher – চিকিৎসা গবেষক</option>
                            <option value="Model">Model – মডেল</option>
                            <option value="Musician">Musician – সঙ্গীতজ্ঞ</option>
                            <option value="Network Administrator">Network Administrator – নেটওয়ার্ক প্রশাসক</option>
                            <option value="News-presenter">News-presenter – সংবাদ উপস্থাপক</option>
                            <option value="Newsagent">Newsagent – সংবাদদাতা</option>
                            <option value="Newsdealer">Newsdealer – সংবাদ বিক্রেতা</option>
                            <option value="Newspaper Vendor">Newspaper Vendor – সংবাদপত্র বিক্রেতা</option>
                            <option value="Newsreader">Newsreader – সংবাদ পাঠক</option>
                            <option value="Nurse">Nurse – নার্স/পরিষেবিকা</option>
                            <option value="Ophthalmologist">Ophthalmologist – চক্ষুরোগ বিশেষজ্ঞ</option>
                            <option value="Optician">Optician – চশমাবিক্রেতা</option>
                            <option value="Optometrist">Optometrist – চক্ষু বিশেষজ্ঞ</option>
                            <option value="Painter">Painter – চিত্রকর/চিত্রশিল্পী/রংমিস্ত্রি</option>
                            <option value="Pediatrician">Pediatrician – শিশু বিশেষজ্ঞ</option>
                            <option value="Personal Trainer">Personal Trainer – ব্যক্তিগত প্রশিক্ষক</option>
                            <option value="Pharmacist">Pharmacist – ফার্মাসিস্ট</option>
                            <option value="Photographer">Photographer – ফটোগ্রাফার</option>
                            <option value="Physiotherapist">Physiotherapist – ফিজিওথেরাপিস্ট</option>
                            <option value="Pilot">Pilot – বিমান চালক</option>
                            <option value="Plumber">Plumber – সীসক-কর্মকার/গ্যাস-পানি প্রভৃতির নলত্তয়ালা</option>
                            <option value="Police Officer">Police Officer – পুলিশ অফিসার</option>
                            <option value="Politician">Politician – রাজনীতিবিদ</option>
                            <option value="Porter">Porter – কুলি</option>
                            <option value="Postman/Mailman">Postman/Mailman – পোস্টম্যান/ডাকপিওন/ডাক হরকরা</option>
                            <option value="Potter">Potter – কুমার</option>
                            <option value="Principal">Principal – প্রধান শিক্ষক/প্রধান শিক্ষিকা</option>
                            <option value="Professor">Professor – অধ্যাপক</option>
                            <option value="Project Manager">Project Manager – প্রকল্প ব্যবস্থাপক</option>
                            <option value="Psychiatrist">Psychiatrist – মনোরোগ বিশেষজ্ঞ</option>
                            <option value="Real Estate Agent">Real Estate Agent – আবাসন এজেন্ট</option>
                            <option value="Receptionist">Receptionist – রিসেপশনিস্ট</option>
                            <option value="Refuse collector">Refuse collector – আবর্জনা সংগ্রাহক</option>
                            <option value="Researcher">Researcher – গবেষক</option>
                            <option value="Salesperson">Salesperson – বিক্রয়কর্মী</option>
                            <option value="Scavenger/Garbage Collector">Scavenger/Garbage Collector – মেথর</option>
                            <option value="Scientist">Scientist – বিজ্ঞানী</option>
                            <option value="Secretary">Secretary – সচিব</option>
                            <option value="Security Guard">Security Guard – চৌকিদার/নিরাপত্তা রক্ষী</option>
                            <option value="Shop Assistant">Shop Assistant – দোকান সহকারি</option>
                            <option value="Shopkeeper">Shopkeeper – দোকানদার</option>
                            <option value="Singer">Singer – গায়ক</option>
                            <option value="Social Worker">Social Worker – সমাজ কর্মী</option>
                            <option value="Software Developer">Software Developer – সফ্টওয়্যার ডেভেলপার</option>
                            <option value="Soldier">Soldier – সৈনিক</option>
                            <option value="Speech Therapist">Speech Therapist – ভাষা চিকিৎসক</option>
                            <option value="Surgeon">Surgeon – সার্জন/শল্য-চিকিৎসক</option>
                            <option value="Sweeper">Sweeper – ঝাড়ুদার</option>
                            <option value="Systems Analyst">Systems Analyst – সিস্টেম বিশ্লেষক</option>
                            <option value="Tailor">Tailor – দর্জি</option>
                            <option value="Taxi Driver">Taxi Driver – ট্যাক্সি চালক</option>
                            <option value="Teacher">Teacher – শিক্ষক</option>
                            <option value="Therapist">Therapist – ভেষজবিজ্ঞানী/থেরাপিস্ট</option>
                            <option value="Traffic Warden">Traffic Warden – ট্রাফিক ওয়ার্ডেন</option>
                            <option value="Translator">Translator – অনুবাদক</option>
                            <option value="Travel agent">Travel agent – ট্রাভেল এজেন্ট</option>
                            <option value="Tutor">Tutor – শিক্ষক</option>
                            <option value="Veterinarian">Veterinarian – পশু চিকিৎসক</option>
                            <option value="Waiter/Waitress">Waiter/Waitress – পরিচারক/পরিচারিকা</option>
                            <option value="Web Developer">Web Developer – ওয়েব ডেভেলপার</option>
                            <option value="Writer">Writer – লেখক</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="designation">Designation:</label></div>
                    <div class="col-75"><input type="text" id="designation" name="designation" placeholder="Designation" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="primary_mobile">Primary Mobile:</label></div>
                    <div class="col-75"><input type="text" id="primary_mobile" name="primary_mobile" placeholder="Primary Mobile" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="secondary_mobile">Secondary Mobile:</label></div>
                    <div class="col-75"><input type="text" id="secondary_mobile" name="secondary_mobile" placeholder="Secondary Mobile" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="primary_email">Primary Email:</label></div>
                    <div class="col-75"><input type="text" id="primary_email" name="primary_email" placeholder="Primary Email" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="secondary_email">Secondary Email:</label></div>
                    <div class="col-75"><input type="text" id="secondary_email" name="secondary_email" placeholder="Secondary Email" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="present_address">Present Address:</label></div>
                    <div class="col-50"><input type="text" id="present_address" name="present_address" placeholder="Present Address" required></div>
                    <div class="col-25">
                        <select id="present_district" name="present_district">
                            <option value="" selected>Select Present District/City</option>
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
                    <div class="col-25"><label for="permanent_address">Permanent Address:</label></div>
                    <div class="col-50"><input type="text" id="permanent_address" name="permanent_address" placeholder="Permanent Address" required></div>
                    <div class="col-25">
                        <select id="permanent_district" name="permanent_district">
                            <option value="" selected>Select Permanent District/City</option>
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

                <input type="submit" id="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</div>

</body>
</html>