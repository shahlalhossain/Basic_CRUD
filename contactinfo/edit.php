<?php
$recordID = $_GET['id'];
$dbConnection = mysqli_connect("localhost", "root", "hisl@321", "basic_crud");
if ($dbConnection && $recordID) {
    $query  = "SELECT * FROM contact_info WHERE id = $recordID";
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
                    <span>Update Contact</span>
                </div>
                <div class="col-6" style="text-align: right; padding-top: 10px;">
                    <a href="list.php">Back to List</a>
                </div>
            </div>

            <hr>

            <form action="update.php" method="POST">

                <input type="hidden" name="id" value="<?php echo $record['id']; ?>" />

                <div class="row">
                    <div class="col-25"><label for="contact_person">Contact Person Name:</label></div>
                    <div class="col-75"><input type="text" id="contact_person" name="contact_person" value="<?php echo $record['contact_person'];?>" placeholder="Contact Person Name" required></div>
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
                    <div class="col-25"><label for="profession">Profession/Occupation:</label></div>
                    <div class="col-75">
                        <select id="profession" name="profession" required>
                            <option value="">Select Profession/Occupation</option>
                            <option <?php if($record['profession'] == "Account Manager") echo 'selected'; ?> value="Account Manager">Account Manager – একাউন্ট ম্যানেজার</option>
                            <option <?php if($record['profession'] == "Accountant") echo 'selected'; ?> value="Accountant">Accountant – হিসাবরক্ষক</option>
                            <option <?php if($record['profession'] == "Actor") echo 'selected'; ?> value="Actor">Actor – অভিনেতা</option>
                            <option <?php if($record['profession'] == "Actress") echo 'selected'; ?> value="Actress">Actress – অভিনেত্রী</option>
                            <option <?php if($record['profession'] == "Administrative Assistant") echo 'selected'; ?> value="Administrative Assistant">Administrative Assistant – প্রশাসনিক সহকারী</option>
                            <option <?php if($record['profession'] == "Aerospace Engineer") echo 'selected'; ?> value="Aerospace Engineer">Aerospace Engineer – মহাকাশ/এয়ারোস্পেস প্রকৌশলী</option>
                            <option <?php if($record['profession'] == "Air Hostess") echo 'selected'; ?> value="Air Hostess">Air Hostess – বিমানবালা</option>
                            <option <?php if($record['profession'] == "Architect") echo 'selected'; ?> value="Architect">Architect – স্থপতি</option>
                            <option <?php if($record['profession'] == "AI Engineer") echo 'selected'; ?> value="AI Engineer">AI Engineer – কৃত্রিম বুদ্ধিমত্তা প্রকৌশলী</option>
                            <option <?php if($record['profession'] == "Artisan") echo 'selected'; ?> value="Artisan">Artisan – কারিগর</option>
                            <option <?php if($record['profession'] == "Artist") echo 'selected'; ?> value="Artist">Artist – শিল্পী</option>
                            <option <?php if($record['profession'] == "Astrologer") echo 'selected'; ?> value="Astrologer">Astrologer – জ্যোতিষী</option>
                            <option <?php if($record['profession'] == "Astronomer") echo 'selected'; ?> value="Astronomer">Astronomer – জ্যোতির্বিজ্ঞানী</option>
                            <option <?php if($record['profession'] == "Author") echo 'selected'; ?> value="Author">Author – লেখক</option>
                            <option <?php if($record['profession'] == "Baker") echo 'selected'; ?> value="Baker">Baker – বেকার</option>
                            <option <?php if($record['profession'] == "Bank Teller") echo 'selected'; ?> value="Bank Teller">Bank Teller – ব্যাংক টেলার বা কোষাধ্যক্ষ</option>
                            <option <?php if($record['profession'] == "Banker") echo 'selected'; ?> value="Banker">Banker – ব্যাংকার</option>
                            <option <?php if($record['profession'] == "Barber") echo 'selected'; ?> value="Barber">Barber – নাপিত</option>
                            <option <?php if($record['profession'] == "Bartender") echo 'selected'; ?> value="Bartender">Bartender – বারটেন্ডার/পানীয় পরিবেশনকারী</option>
                            <option <?php if($record['profession'] == "Biomedical Engineer") echo 'selected'; ?> value="Biomedical Engineer">Biomedical Engineer – বায়োমেডিক্যাল প্রকৌশলী</option>
                            <option <?php if($record['profession'] == "Biotechnologist") echo 'selected'; ?> value="Biotechnologist">Biotechnologist – জৈব প্রযুক্তিবিদ</option>
                            <option <?php if($record['profession'] == "Blacksmith") echo 'selected'; ?> value="Blacksmith">Blacksmith – কামার</option>
                            <option <?php if($record['profession'] == "Bookseller") echo 'selected'; ?> value="Bookseller">Bookseller – বই বিক্রেতা/পুস্তক-বিক্রেতা</option>
                            <option <?php if($record['profession'] == "Bricklayer") echo 'selected'; ?> value="Bricklayer">Bricklayer – রাজমিস্ত্রি</option>
                            <option <?php if($record['profession'] == "Bus Driver") echo 'selected'; ?> value="Bus Driver">Bus Driver – বাস চালক</option>
                            <option <?php if($record['profession'] == "Bus Helper/Bus Conductor") echo 'selected'; ?> value="Bus Helper/Bus Conductor">Bus Helper/Bus Conductor – বাসের হেলপার</option>
                            <option <?php if($record['profession'] == "Butcher") echo 'selected'; ?> value="Butcher">Butcher – কসাই</option>
                            <option <?php if($record['profession'] == "Cabin Crew") echo 'selected'; ?> value="Cabin Crew">Cabin Crew – বিমানের বা জাহাজের নাবিক</option>
                            <option <?php if($record['profession'] == "Carpenter") echo 'selected'; ?> value="Carpenter">Carpenter – কাঠমিস্ত্রি</option>
                            <option <?php if($record['profession'] == "Cashier") echo 'selected'; ?> value="Cashier">Cashier – ক্যাশিয়ার বা কোষাধ্যক্ষ</option>
                            <option <?php if($record['profession'] == "Chef") echo 'selected'; ?> value="Chef">Chef – পাচক/বাবুর্চি</option>
                            <option <?php if($record['profession'] == "Cleaner") echo 'selected'; ?> value="Cleaner">Cleaner – পরিষ্কারক</option>
                            <option <?php if($record['profession'] == "Cobbler") echo 'selected'; ?> value="Cobbler">Cobbler – মুচি</option>
                            <option <?php if($record['profession'] == "Computer Programmer") echo 'selected'; ?> value="Computer Programmer">Computer Programmer – কম্পিউটার প্রোগ্রামার</option>
                            <option <?php if($record['profession'] == "Construction Worker") echo 'selected'; ?> value="Construction Worker">Construction Worker – নির্মাণ শ্রমিক</option>
                            <option <?php if($record['profession'] == "Cook") echo 'selected'; ?> value="Cook">Cook – রাঁধুনি / বাবুর্চি</option>
                            <option <?php if($record['profession'] == "Craftsman") echo 'selected'; ?> value="Craftsman">Craftsman – কারিগর</option>
                            <option <?php if($record['profession'] == "Customer Service Representative") echo 'selected'; ?> value="Customer Service Representative">Customer Service Representative – গ্রাহক পরিষেবা প্রতিনিধি</option>
                            <option <?php if($record['profession'] == "Delivery Man") echo 'selected'; ?> value="Delivery Man">Delivery Man – সরবরাহকারী বা ডেলিভারি ম্যান</option>
                            <option <?php if($record['profession'] == "Dentist") echo 'selected'; ?> value="Dentist">Dentist – ডেন্টিস্ট/দন্ত-চিকিৎসক</option>
                            <option <?php if($record['profession'] == "Designer") echo 'selected'; ?> value="Designer">Designer – নকশাকার</option>
                            <option <?php if($record['profession'] == "Doctor") echo 'selected'; ?> value="Doctor">Doctor – ডাক্তার</option>
                            <option <?php if($record['profession'] == "Doorman") echo 'selected'; ?> value="Doorman">Doorman – দারোয়ান</option>
                            <option <?php if($record['profession'] == "Dustman") echo 'selected'; ?> value="Dustman">Dustman – ডাস্টম্যান/ঝাড়ুদার</option>
                            <option <?php if($record['profession'] == "Education Administrator") echo 'selected'; ?> value="Education Administrator">Education Administrator – শিক্ষা প্রশাসক</option>
                            <option <?php if($record['profession'] == "Educational Consultant") echo 'selected'; ?> value="Educational Consultant">Educational Consultant – শিক্ষাগত পরামর্শক</option>
                            <option <?php if($record['profession'] == "Electrician") echo 'selected'; ?> value="Electrician">Electrician – ইলেকট্রিশিয়ান/বিদ্যুৎমিস্ত্রি</option>
                            <option <?php if($record['profession'] == "Engineer") echo 'selected'; ?> value="Engineer">Engineer – প্রকৌশলী</option>
                            <option <?php if($record['profession'] == "Entrepreneur") echo 'selected'; ?> value="Entrepreneur">Entrepreneur – উদ্যোক্তা</option>
                            <option <?php if($record['profession'] == "Environmental Scientist") echo 'selected'; ?> value="Environmental Scientist">Environmental Scientist – পরিবেশ বিজ্ঞানী</option>
                            <option <?php if($record['profession'] == "Event Planner") echo 'selected'; ?> value="Event Planner">Event Planner – ইভেন্ট পরিকল্পক</option>
                            <option <?php if($record['profession'] == "Factory Worker") echo 'selected'; ?> value="Factory Worker">Factory Worker – কারখানা শ্রমিক</option>
                            <option <?php if($record['profession'] == "Farmer") echo 'selected'; ?> value="Farmer">Farmer – কৃষক</option>
                            <option <?php if($record['profession'] == "Financial Advisor") echo 'selected'; ?> value="Financial Advisor">Financial Advisor – আর্থিক উপদেষ্টা</option>
                            <option <?php if($record['profession'] == "Financial Analyst") echo 'selected'; ?> value="Financial Analyst">Financial Analyst – আর্থিক বিশ্লেষক</option>
                            <option <?php if($record['profession'] == "Firefighter/Fireman") echo 'selected'; ?> value="Firefighter/Fireman">Firefighter/Fireman – অগ্নিনির্বাপক/দমকলকর্মী</option>
                            <option <?php if($record['profession'] == "Fish Dealer/Fishmonger") echo 'selected'; ?> value="Fish Dealer/Fishmonger">Fish Dealer/Fishmonger – মৎস্য বিক্রেতা</option>
                            <option <?php if($record['profession'] == "Fisherman") echo 'selected'; ?> value="Fisherman">Fisherman – জেলে/মৎস্যজীবী/মৎস্যচাষী</option>
                            <option <?php if($record['profession'] == "Flight Attendant") echo 'selected'; ?> value="Flight Attendant">Flight Attendant – বিমানবালা</option>
                            <option <?php if($record['profession'] == "Florist") echo 'selected'; ?> value="Florist">Florist – ফুলওয়ালা</option>
                            <option <?php if($record['profession'] == "Gardener") echo 'selected'; ?> value="Gardener">Gardener – মালী</option>
                            <option <?php if($record['profession'] == "Gatekeeper") echo 'selected'; ?> value="Gatekeeper">Gatekeeper – দ্বাররক্ষী/দারোয়ান</option>
                            <option <?php if($record['profession'] == "Goldsmith") echo 'selected'; ?> value="Goldsmith">Goldsmith – স্বর্ণকার</option>
                            <option <?php if($record['profession'] == "Graphic Designer") echo 'selected'; ?> value="Graphic Designer">Graphic Designer – গ্রাফিক ডিজাইনার</option>
                            <option <?php if($record['profession'] == "Hairdresser") echo 'selected'; ?> value="Hairdresser">Hairdresser – হেয়ারড্রেসার/কেশবিন্যাসকারী</option>
                            <option <?php if($record['profession'] == "Headmaster/Headmistress") echo 'selected'; ?> value="Headmaster/Headmistress">Headmaster/Headmistress – প্রধান শিক্ষক/প্রধান শিক্ষিকা</option>
                            <option <?php if($record['profession'] == "Human Resources Manager") echo 'selected'; ?> value="Human Resources Manager">Human Resources Manager – মানব সম্পদ ব্যবস্থাপক</option>
                            <option <?php if($record['profession'] == "IT Specialist") echo 'selected'; ?> value="IT Specialist">IT Specialist – তথ্য প্রযুক্তি বিশেষজ্ঞ</option>
                            <option <?php if($record['profession'] == "Interpreter") echo 'selected'; ?> value="Interpreter">Interpreter – দোভাষী/ব্যাখ্যাতা/অনুবাদক</option>
                            <option <?php if($record['profession'] == "Janitor") echo 'selected'; ?> value="Janitor">Janitor – তত্ত্বাবধায়ক/দ্বারপাল</option>
                            <option <?php if($record['profession'] == "Journalist") echo 'selected'; ?> value="Journalist">Journalist – সাংবাদিক</option>
                            <option <?php if($record['profession'] == "Judge") echo 'selected'; ?> value="Judge">Judge – বিচারক</option>
                            <option <?php if($record['profession'] == "Landlord/Landlady") echo 'selected'; ?> value="Landlord/Landlady">Landlord/Landlady – বাড়িওয়ালা/বাড়িওয়ালী</option>
                            <option <?php if($record['profession'] == "Lawyer") echo 'selected'; ?> value="Lawyer">Lawyer – আইনজীবী</option>
                            <option <?php if($record['profession'] == "Lecturer") echo 'selected'; ?> value="Lecturer">Lecturer – প্রভাষক</option>
                            <option <?php if($record['profession'] == "Librarian") echo 'selected'; ?> value="Librarian">Librarian – গ্রন্থাগারিক</option>
                            <option <?php if($record['profession'] == "Lifeguard") echo 'selected'; ?> value="Lifeguard">Lifeguard – লাইফগার্ড</option>
                            <option <?php if($record['profession'] == "Locksmith") echo 'selected'; ?> value="Locksmith">Locksmith – তালা-চাবি মিস্ত্রি</option>
                            <option <?php if($record['profession'] == "Manager") echo 'selected'; ?> value="Manager">Manager – ম্যানেজার/ব্যাবস্থাপক</option>
                            <option <?php if($record['profession'] == "Marketing Specialist") echo 'selected'; ?> value="Marketing Specialist">Marketing Specialist – বিপণন বিশেষজ্ঞ</option>
                            <option <?php if($record['profession'] == "Mason") echo 'selected'; ?> value="Mason">Mason – রাজমিস্ত্রি</option>
                            <option <?php if($record['profession'] == "Matchmaker") echo 'selected'; ?> value="Matchmaker">Matchmaker – ঘটক</option>
                            <option <?php if($record['profession'] == "Mechanic") echo 'selected'; ?> value="Mechanic">Mechanic – মেকানিক</option>
                            <option <?php if($record['profession'] == "Medical Assistant") echo 'selected'; ?> value="Medical Assistant">Medical Assistant – চিকিৎসা সহকারী</option>
                            <option <?php if($record['profession'] == "Medical Lab Technologist") echo 'selected'; ?> value="Medical Lab Technologist">Medical Lab Technologist – মেডিকেল ল্যাব টেকনোলজিস্ট</option>
                            <option <?php if($record['profession'] == "Medical Researcher") echo 'selected'; ?> value="Medical Researcher">Medical Researcher – চিকিৎসা গবেষক</option>
                            <option <?php if($record['profession'] == "Model") echo 'selected'; ?> value="Model">Model – মডেল</option>
                            <option <?php if($record['profession'] == "Musician") echo 'selected'; ?> value="Musician">Musician – সঙ্গীতজ্ঞ</option>
                            <option <?php if($record['profession'] == "Network Administrator") echo 'selected'; ?> value="Network Administrator">Network Administrator – নেটওয়ার্ক প্রশাসক</option>
                            <option <?php if($record['profession'] == "News-presenter") echo 'selected'; ?> value="News-presenter">News-presenter – সংবাদ উপস্থাপক</option>
                            <option <?php if($record['profession'] == "Newsagent") echo 'selected'; ?> value="Newsagent">Newsagent – সংবাদদাতা</option>
                            <option <?php if($record['profession'] == "Newsdealer") echo 'selected'; ?> value="Newsdealer">Newsdealer – সংবাদ বিক্রেতা</option>
                            <option <?php if($record['profession'] == "Newspaper Vendor") echo 'selected'; ?> value="Newspaper Vendor">Newspaper Vendor – সংবাদপত্র বিক্রেতা</option>
                            <option <?php if($record['profession'] == "Newsreader") echo 'selected'; ?> value="Newsreader">Newsreader – সংবাদ পাঠক</option>
                            <option <?php if($record['profession'] == "Nurse") echo 'selected'; ?> value="Nurse">Nurse – নার্স/পরিষেবিকা</option>
                            <option <?php if($record['profession'] == "Ophthalmologist") echo 'selected'; ?> value="Ophthalmologist">Ophthalmologist – চক্ষুরোগ বিশেষজ্ঞ</option>
                            <option <?php if($record['profession'] == "Optician") echo 'selected'; ?> value="Optician">Optician – চশমাবিক্রেতা</option>
                            <option <?php if($record['profession'] == "Optometrist") echo 'selected'; ?> value="Optometrist">Optometrist – চক্ষু বিশেষজ্ঞ</option>
                            <option <?php if($record['profession'] == "Painter") echo 'selected'; ?> value="Painter">Painter – চিত্রকর/চিত্রশিল্পী/রংমিস্ত্রি</option>
                            <option <?php if($record['profession'] == "Pediatrician") echo 'selected'; ?> value="Pediatrician">Pediatrician – শিশু বিশেষজ্ঞ</option>
                            <option <?php if($record['profession'] == "Personal Trainer") echo 'selected'; ?> value="Personal Trainer">Personal Trainer – ব্যক্তিগত প্রশিক্ষক</option>
                            <option <?php if($record['profession'] == "Pharmacist") echo 'selected'; ?> value="Pharmacist">Pharmacist – ফার্মাসিস্ট</option>
                            <option <?php if($record['profession'] == "Photographer") echo 'selected'; ?> value="Photographer">Photographer – ফটোগ্রাফার</option>
                            <option <?php if($record['profession'] == "Physiotherapist") echo 'selected'; ?> value="Physiotherapist">Physiotherapist – ফিজিওথেরাপিস্ট</option>
                            <option <?php if($record['profession'] == "Pilot") echo 'selected'; ?> value="Pilot">Pilot – বিমান চালক</option>
                            <option <?php if($record['profession'] == "Plumber") echo 'selected'; ?> value="Plumber">Plumber – সীসক-কর্মকার/গ্যাস-পানি প্রভৃতির নলত্তয়ালা</option>
                            <option <?php if($record['profession'] == "Police Officer") echo 'selected'; ?> value="Police Officer">Police Officer – পুলিশ অফিসার</option>
                            <option <?php if($record['profession'] == "Politician") echo 'selected'; ?> value="Politician">Politician – রাজনীতিবিদ</option>
                            <option <?php if($record['profession'] == "Porter") echo 'selected'; ?> value="Porter">Porter – কুলি</option>
                            <option <?php if($record['profession'] == "Postman/Mailman") echo 'selected'; ?> value="Postman/Mailman">Postman/Mailman – পোস্টম্যান/ডাকপিওন/ডাক হরকরা</option>
                            <option <?php if($record['profession'] == "Potter") echo 'selected'; ?> value="Potter">Potter – কুমার</option>
                            <option <?php if($record['profession'] == "Principal") echo 'selected'; ?> value="Principal">Principal – প্রধান শিক্ষক/প্রধান শিক্ষিকা</option>
                            <option <?php if($record['profession'] == "Professor") echo 'selected'; ?> value="Professor">Professor – অধ্যাপক</option>
                            <option <?php if($record['profession'] == "Project Manager") echo 'selected'; ?> value="Project Manager">Project Manager – প্রকল্প ব্যবস্থাপক</option>
                            <option <?php if($record['profession'] == "Psychiatrist") echo 'selected'; ?> value="Psychiatrist">Psychiatrist – মনোরোগ বিশেষজ্ঞ</option>
                            <option <?php if($record['profession'] == "Real Estate Agent") echo 'selected'; ?> value="Real Estate Agent">Real Estate Agent – আবাসন এজেন্ট</option>
                            <option <?php if($record['profession'] == "Receptionist") echo 'selected'; ?> value="Receptionist">Receptionist – রিসেপশনিস্ট</option>
                            <option <?php if($record['profession'] == "Refuse Collector") echo 'selected'; ?> value="Refuse Collector">Refuse collector – আবর্জনা সংগ্রাহক</option>
                            <option <?php if($record['profession'] == "Researcher") echo 'selected'; ?> value="Researcher">Researcher – গবেষক</option>
                            <option <?php if($record['profession'] == "Salesperson") echo 'selected'; ?> value="Salesperson">Salesperson – বিক্রয়কর্মী</option>
                            <option <?php if($record['profession'] == "Scavenger/Garbage Collector") echo 'selected'; ?> value="Scavenger/Garbage Collector">Scavenger/Garbage Collector – মেথর</option>
                            <option <?php if($record['profession'] == "Scientist") echo 'selected'; ?> value="Scientist">Scientist – বিজ্ঞানী</option>
                            <option <?php if($record['profession'] == "Secretary") echo 'selected'; ?> value="Secretary">Secretary – সচিব</option>
                            <option <?php if($record['profession'] == "Security Guard") echo 'selected'; ?> value="Security Guard">Security Guard – চৌকিদার/নিরাপত্তা রক্ষী</option>
                            <option <?php if($record['profession'] == "Shop Assistant") echo 'selected'; ?> value="Shop Assistant">Shop Assistant – দোকান সহকারি</option>
                            <option <?php if($record['profession'] == "Shopkeeper") echo 'selected'; ?> value="Shopkeeper">Shopkeeper – দোকানদার</option>
                            <option <?php if($record['profession'] == "Singer") echo 'selected'; ?> value="Singer">Singer – গায়ক</option>
                            <option <?php if($record['profession'] == "Social Worker") echo 'selected'; ?> value="Social Worker">Social Worker – সমাজ কর্মী</option>
                            <option <?php if($record['profession'] == "Software Developer") echo 'selected'; ?> value="Software Developer">Software Developer – সফ্টওয়্যার ডেভেলপার</option>
                            <option <?php if($record['profession'] == "Soldier") echo 'selected'; ?> value="Soldier">Soldier – সৈনিক</option>
                            <option <?php if($record['profession'] == "Speech Therapist") echo 'selected'; ?> value="Speech Therapist">Speech Therapist – ভাষা চিকিৎসক</option>
                            <option <?php if($record['profession'] == "Surgeon") echo 'selected'; ?> value="Surgeon">Surgeon – সার্জন/শল্য-চিকিৎসক</option>
                            <option <?php if($record['profession'] == "Sweeper") echo 'selected'; ?> value="Sweeper">Sweeper – ঝাড়ুদার</option>
                            <option <?php if($record['profession'] == "Systems Analyst") echo 'selected'; ?> value="Systems Analyst">Systems Analyst – সিস্টেম বিশ্লেষক</option>
                            <option <?php if($record['profession'] == "Tailor") echo 'selected'; ?> value="Tailor">Tailor – দর্জি</option>
                            <option <?php if($record['profession'] == "Taxi Driver") echo 'selected'; ?> value="Taxi Driver">Taxi Driver – ট্যাক্সি চালক</option>
                            <option <?php if($record['profession'] == "Teacher") echo 'selected'; ?> value="Teacher">Teacher – শিক্ষক</option>
                            <option <?php if($record['profession'] == "Therapist") echo 'selected'; ?> value="Therapist">Therapist – ভেষজবিজ্ঞানী/থেরাপিস্ট</option>
                            <option <?php if($record['profession'] == "Traffic Warden") echo 'selected'; ?> value="Traffic Warden">Traffic Warden – ট্রাফিক ওয়ার্ডেন</option>
                            <option <?php if($record['profession'] == "Translator") echo 'selected'; ?> value="Translator">Translator – অনুবাদক</option>
                            <option <?php if($record['profession'] == "Travel Agent") echo 'selected'; ?> value="Travel Agent">Travel agent – ট্রাভেল এজেন্ট</option>
                            <option <?php if($record['profession'] == "Tutor") echo 'selected'; ?> value="Tutor">Tutor – শিক্ষক</option>
                            <option <?php if($record['profession'] == "Veterinarian") echo 'selected'; ?> value="Veterinarian">Veterinarian – পশু চিকিৎসক</option>
                            <option <?php if($record['profession'] == "Waiter/Waitress") echo 'selected'; ?> value="Waiter/Waitress">Waiter/Waitress – পরিচারক/পরিচারিকা</option>
                            <option <?php if($record['profession'] == "Web Developer") echo 'selected'; ?> value="Web Developer">Web Developer – ওয়েব ডেভেলপার</option>
                            <option <?php if($record['profession'] == "Writer") echo 'selected'; ?> value="Writer">Writer – লেখক</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="designation">Designation:</label></div>
                    <div class="col-75"><input type="text" id="designation" name="designation" value="<?php echo $record['designation'];?>" placeholder="Designation" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="primary_mobile">Primary Mobile:</label></div>
                    <div class="col-75"><input type="text" id="primary_mobile" name="primary_mobile" value="<?php echo $record['primary_mobile'];?>" placeholder="Primary Mobile" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="secondary_mobile">Secondary Mobile:</label></div>
                    <div class="col-75"><input type="text" id="secondary_mobile" name="secondary_mobile" value="<?php echo $record['secondary_mobile'];?>" placeholder="Secondary Mobile" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="primary_email">Primary Email:</label></div>
                    <div class="col-75"><input type="text" id="primary_email" name="primary_email" value="<?php echo $record['primary_email'];?>" placeholder="Primary Email" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="secondary_email">Secondary Email:</label></div>
                    <div class="col-75"><input type="text" id="secondary_email" name="secondary_email" value="<?php echo $record['secondary_email'];?>" placeholder="Secondary Email" required></div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="present_address">Present Address:</label></div>
                    <div class="col-50"><input type="text" id="present_address" name="present_address" value="<?php echo $record['present_address'];?>" placeholder="Present Address" required></div>
                    <div class="col-25">
                        <select id="present_district" name="present_district">
                            <option value="">Select Present District/City</option>
                            <option <?php if($record['present_district'] == "Bagerhat") echo 'selected'; ?> value="Bagerhat">Bagerhat - বাগেরহাট</option>
                            <option <?php if($record['present_district'] == "Bandarban") echo 'selected'; ?> value="Bandarban">Bandarban - বান্দরবান</option>
                            <option <?php if($record['present_district'] == "Barguna") echo 'selected'; ?> value="Barguna">Barguna - বরগুনা</option>
                            <option <?php if($record['present_district'] == "Barisal") echo 'selected'; ?> value="Barisal">Barisal - বরিশাল</option>
                            <option <?php if($record['present_district'] == "Bhola") echo 'selected'; ?> value="Bhola">Bhola - ভোলা</option>
                            <option <?php if($record['present_district'] == "Bogra") echo 'selected'; ?> value="Bogra">Bogra - বগুড়া</option>
                            <option <?php if($record['present_district'] == "Brahmanbaria") echo 'selected'; ?> value="Brahmanbaria">Brahmanbaria - ব্রাহ্মণবাড়িয়া</option>
                            <option <?php if($record['present_district'] == "Chandpur") echo 'selected'; ?> value="Chandpur">Chandpur - চাঁদপুর</option>
                            <option <?php if($record['present_district'] == "Chittagong") echo 'selected'; ?> value="Chittagong">Chittagong - চট্টগ্রাম</option>
                            <option <?php if($record['present_district'] == "Chuadanga") echo 'selected'; ?> value="Chuadanga">Chuadanga - চুয়াডাঙ্গা</option>
                            <option <?php if($record['present_district'] == "Comilla") echo 'selected'; ?> value="Comilla">Comilla - কুমিল্লা</option>
                            <option <?php if($record['present_district'] == "Cox's Bazar") echo 'selected'; ?> value="Cox's Bazar">Cox's Bazar - কক্সবাজার</option>
                            <option <?php if($record['present_district'] == "Dhaka") echo 'selected'; ?> value="Dhaka">Dhaka - ঢাকা</option>
                            <option <?php if($record['present_district'] == "Dinajpur") echo 'selected'; ?> value="Dinajpur">Dinajpur - দিনাজপুর</option>
                            <option <?php if($record['present_district'] == "Faridpur") echo 'selected'; ?> value="Faridpur">Faridpur - ফরিদপুর</option>
                            <option <?php if($record['present_district'] == "Feni") echo 'selected'; ?> value="Feni">Feni - ফেনী</option>
                            <option <?php if($record['present_district'] == "Gaibandha") echo 'selected'; ?> value="Gaibandha">Gaibandha - গাইবান্ধা</option>
                            <option <?php if($record['present_district'] == "Gazipur") echo 'selected'; ?> value="Gazipur">Gazipur - গাজীপুর</option>
                            <option <?php if($record['present_district'] == "Gopalganj") echo 'selected'; ?> value="Gopalganj">Gopalganj - গোপালগঞ্জ</option>
                            <option <?php if($record['present_district'] == "Habiganj") echo 'selected'; ?> value="Habiganj">Habiganj - হবিগঞ্জ</option>
                            <option <?php if($record['present_district'] == "Jamalpur") echo 'selected'; ?> value="Jamalpur">Jamalpur - জামালপুর</option>
                            <option <?php if($record['present_district'] == "Jessore") echo 'selected'; ?> value="Jessore">Jessore - যশোর</option>
                            <option <?php if($record['present_district'] == "Jhalokati") echo 'selected'; ?> value="Jhalokati">Jhalokati - ঝালকাঠি</option>
                            <option <?php if($record['present_district'] == "Jhenaidah") echo 'selected'; ?> value="Jhenaidah">Jhenaidah - ঝিনাইদহ</option>
                            <option <?php if($record['present_district'] == "Joypurhat") echo 'selected'; ?> value="Joypurhat">Joypurhat - জয়পুরহাট</option>
                            <option <?php if($record['present_district'] == "Khagrachari") echo 'selected'; ?> value="Khagrachari">Khagrachari - খাগড়াছড়ি</option>
                            <option <?php if($record['present_district'] == "Khulna") echo 'selected'; ?> value="Khulna">Khulna - খুলনা</option>
                            <option <?php if($record['present_district'] == "Kishoreganj") echo 'selected'; ?> value="Kishoreganj">Kishoreganj - কিশোরগঞ্জ</option>
                            <option <?php if($record['present_district'] == "Kurigram") echo 'selected'; ?> value="Kurigram">Kurigram - কুড়িগ্রাম</option>
                            <option <?php if($record['present_district'] == "Kushtia") echo 'selected'; ?> value="Kushtia">Kushtia - কুষ্টিয়া</option>
                            <option <?php if($record['present_district'] == "Lakshmipur") echo 'selected'; ?> value="Lakshmipur">Lakshmipur - লক্ষ্মীপুর</option>
                            <option <?php if($record['present_district'] == "Lalmonirhat") echo 'selected'; ?> value="Lalmonirhat">Lalmonirhat - লালমনিরহাট</option>
                            <option <?php if($record['present_district'] == "Madaripur") echo 'selected'; ?> value="Madaripur">Madaripur - মাদারীপুর</option>
                            <option <?php if($record['present_district'] == "Magura") echo 'selected'; ?> value="Magura">Magura - মাগুরা</option>
                            <option <?php if($record['present_district'] == "Manikganj") echo 'selected'; ?> value="Manikganj">Manikganj - মানিকগঞ্জ</option>
                            <option <?php if($record['present_district'] == "Maulvibazar") echo 'selected'; ?> value="Maulvibazar">Maulvibazar - মৌলভীবাজার</option>
                            <option <?php if($record['present_district'] == "Meherpur") echo 'selected'; ?> value="Meherpur">Meherpur - মেহেরপুর</option>
                            <option <?php if($record['present_district'] == "Munshiganj") echo 'selected'; ?> value="Munshiganj">Munshiganj - মুন্সীগঞ্জ</option>
                            <option <?php if($record['present_district'] == "Mymensingh") echo 'selected'; ?> value="Mymensingh">Mymensingh - ময়মনসিংহ</option>
                            <option <?php if($record['present_district'] == "Naogaon") echo 'selected'; ?> value="Naogaon">Naogaon - নওগাঁ</option>
                            <option <?php if($record['present_district'] == "Narail") echo 'selected'; ?> value="Narail">Narail - নড়াইল</option>
                            <option <?php if($record['present_district'] == "Narayanganj") echo 'selected'; ?> value="Narayanganj">Narayanganj - নারায়ণগঞ্জ</option>
                            <option <?php if($record['present_district'] == "Narsingdi") echo 'selected'; ?> value="Narsingdi">Narsingdi - নরসিংদী</option>
                            <option <?php if($record['present_district'] == "Natore") echo 'selected'; ?> value="Natore">Natore - নাটোর</option>
                            <option <?php if($record['present_district'] == "Nawabganj") echo 'selected'; ?> value="Nawabganj">Nawabganj - নবাবগঞ্জ</option>
                            <option <?php if($record['present_district'] == "Netrokona") echo 'selected'; ?> value="Netrokona">Netrokona - নেত্রকোনা</option>
                            <option <?php if($record['present_district'] == "Nilphamari") echo 'selected'; ?> value="Nilphamari">Nilphamari - নীলফামারী</option>
                            <option <?php if($record['present_district'] == "Noakhali") echo 'selected'; ?> value="Noakhali">Noakhali - নোয়াখালী</option>
                            <option <?php if($record['present_district'] == "Pabna") echo 'selected'; ?> value="Pabna">Pabna - পাবনা</option>
                            <option <?php if($record['present_district'] == "Panchagarh") echo 'selected'; ?> value="Panchagarh">Panchagarh - পঞ্চগড়</option>
                            <option <?php if($record['present_district'] == "Patuakhali") echo 'selected'; ?> value="Patuakhali">Patuakhali - পটুয়াখালী</option>
                            <option <?php if($record['present_district'] == "Pirojpur") echo 'selected'; ?> value="Pirojpur">Pirojpur - পিরোজপুর</option>
                            <option <?php if($record['present_district'] == "Rajbari") echo 'selected'; ?> value="Rajbari">Rajbari - রাজবাড়ী</option>
                            <option <?php if($record['present_district'] == "Rajshahi") echo 'selected'; ?> value="Rajshahi">Rajshahi - রাজশাহী</option>
                            <option <?php if($record['present_district'] == "Rangamati") echo 'selected'; ?> value="Rangamati">Rangamati - রাঙামাটি</option>
                            <option <?php if($record['present_district'] == "Rangpur") echo 'selected'; ?> value="Rangpur">Rangpur - রংপুর</option>
                            <option <?php if($record['present_district'] == "Satkhira") echo 'selected'; ?> value="Satkhira">Satkhira - সাতক্ষীরা</option>
                            <option <?php if($record['present_district'] == "Shariatpur") echo 'selected'; ?> value="Shariatpur">Shariatpur - শরীয়তপুর</option>
                            <option <?php if($record['present_district'] == "Sherpur") echo 'selected'; ?> value="Sherpur">Sherpur - শেরপুর</option>
                            <option <?php if($record['present_district'] == "Sirajgonj") echo 'selected'; ?> value="Sirajgonj">Sirajgonj - সিরাজগঞ্জ</option>
                            <option <?php if($record['present_district'] == "Sunamganj") echo 'selected'; ?> value="Sunamganj">Sunamganj - সুনামগঞ্জ</option>
                            <option <?php if($record['present_district'] == "Sylhet") echo 'selected'; ?> value="Sylhet">Sylhet - সিলেট</option>
                            <option <?php if($record['present_district'] == "Tangail") echo 'selected'; ?> value="Tangail">Tangail - টাঙ্গাইল</option>
                            <option <?php if($record['present_district'] == "Thakurgaon") echo 'selected'; ?> value="Thakurgaon">Thakurgaon - ঠাকুরগাঁও</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25"><label for="permanent_address">Permanent Address:</label></div>
                    <div class="col-50"><input type="text" id="permanent_address" name="permanent_address" value="<?php echo $record['permanent_address'];?>" placeholder="Permanent Address" required></div>
                    <div class="col-25">
                        <select id="permanent_district" name="permanent_district">
                            <option value="">Select Permanent District/City</option>
                            <option <?php if($record['permanent_district'] == "Bagerhat") echo 'selected'; ?> value="Bagerhat">Bagerhat - বাগেরহাট</option>
                            <option <?php if($record['permanent_district'] == "Bandarban") echo 'selected'; ?> value="Bandarban">Bandarban - বান্দরবান</option>
                            <option <?php if($record['permanent_district'] == "Barguna") echo 'selected'; ?> value="Barguna">Barguna - বরগুনা</option>
                            <option <?php if($record['permanent_district'] == "Barisal") echo 'selected'; ?> value="Barisal">Barisal - বরিশাল</option>
                            <option <?php if($record['permanent_district'] == "Bhola") echo 'selected'; ?> value="Bhola">Bhola - ভোলা</option>
                            <option <?php if($record['permanent_district'] == "Bogra") echo 'selected'; ?> value="Bogra">Bogra - বগুড়া</option>
                            <option <?php if($record['permanent_district'] == "Brahmanbaria") echo 'selected'; ?> value="Brahmanbaria">Brahmanbaria - ব্রাহ্মণবাড়িয়া</option>
                            <option <?php if($record['permanent_district'] == "Chandpur") echo 'selected'; ?> value="Chandpur">Chandpur - চাঁদপুর</option>
                            <option <?php if($record['permanent_district'] == "Chittagong") echo 'selected'; ?> value="Chittagong">Chittagong - চট্টগ্রাম</option>
                            <option <?php if($record['permanent_district'] == "Chuadanga") echo 'selected'; ?> value="Chuadanga">Chuadanga - চুয়াডাঙ্গা</option>
                            <option <?php if($record['permanent_district'] == "Comilla") echo 'selected'; ?> value="Comilla">Comilla - কুমিল্লা</option>
                            <option <?php if($record['permanent_district'] == "Cox's Bazar") echo 'selected'; ?> value="Cox's Bazar">Cox's Bazar - কক্সবাজার</option>
                            <option <?php if($record['permanent_district'] == "Dhaka") echo 'selected'; ?> value="Dhaka">Dhaka - ঢাকা</option>
                            <option <?php if($record['permanent_district'] == "Dinajpur") echo 'selected'; ?> value="Dinajpur">Dinajpur - দিনাজপুর</option>
                            <option <?php if($record['permanent_district'] == "Faridpur") echo 'selected'; ?> value="Faridpur">Faridpur - ফরিদপুর</option>
                            <option <?php if($record['permanent_district'] == "Feni") echo 'selected'; ?> value="Feni">Feni - ফেনী</option>
                            <option <?php if($record['permanent_district'] == "Gaibandha") echo 'selected'; ?> value="Gaibandha">Gaibandha - গাইবান্ধা</option>
                            <option <?php if($record['permanent_district'] == "Gazipur") echo 'selected'; ?> value="Gazipur">Gazipur - গাজীপুর</option>
                            <option <?php if($record['permanent_district'] == "Gopalganj") echo 'selected'; ?> value="Gopalganj">Gopalganj - গোপালগঞ্জ</option>
                            <option <?php if($record['permanent_district'] == "Habiganj") echo 'selected'; ?> value="Habiganj">Habiganj - হবিগঞ্জ</option>
                            <option <?php if($record['permanent_district'] == "Jamalpur") echo 'selected'; ?> value="Jamalpur">Jamalpur - জামালপুর</option>
                            <option <?php if($record['permanent_district'] == "Jessore") echo 'selected'; ?> value="Jessore">Jessore - যশোর</option>
                            <option <?php if($record['permanent_district'] == "Jhalokati") echo 'selected'; ?> value="Jhalokati">Jhalokati - ঝালকাঠি</option>
                            <option <?php if($record['permanent_district'] == "Jhenaidah") echo 'selected'; ?> value="Jhenaidah">Jhenaidah - ঝিনাইদহ</option>
                            <option <?php if($record['permanent_district'] == "Joypurhat") echo 'selected'; ?> value="Joypurhat">Joypurhat - জয়পুরহাট</option>
                            <option <?php if($record['permanent_district'] == "Khagrachari") echo 'selected'; ?> value="Khagrachari">Khagrachari - খাগড়াছড়ি</option>
                            <option <?php if($record['permanent_district'] == "Khulna") echo 'selected'; ?> value="Khulna">Khulna - খুলনা</option>
                            <option <?php if($record['permanent_district'] == "Kishoreganj") echo 'selected'; ?> value="Kishoreganj">Kishoreganj - কিশোরগঞ্জ</option>
                            <option <?php if($record['permanent_district'] == "Kurigram") echo 'selected'; ?> value="Kurigram">Kurigram - কুড়িগ্রাম</option>
                            <option <?php if($record['permanent_district'] == "Kushtia") echo 'selected'; ?> value="Kushtia">Kushtia - কুষ্টিয়া</option>
                            <option <?php if($record['permanent_district'] == "Lakshmipur") echo 'selected'; ?> value="Lakshmipur">Lakshmipur - লক্ষ্মীপুর</option>
                            <option <?php if($record['permanent_district'] == "Lalmonirhat") echo 'selected'; ?> value="Lalmonirhat">Lalmonirhat - লালমনিরহাট</option>
                            <option <?php if($record['permanent_district'] == "Madaripur") echo 'selected'; ?> value="Madaripur">Madaripur - মাদারীপুর</option>
                            <option <?php if($record['permanent_district'] == "Magura") echo 'selected'; ?> value="Magura">Magura - মাগুরা</option>
                            <option <?php if($record['permanent_district'] == "Manikganj") echo 'selected'; ?> value="Manikganj">Manikganj - মানিকগঞ্জ</option>
                            <option <?php if($record['permanent_district'] == "Maulvibazar") echo 'selected'; ?> value="Maulvibazar">Maulvibazar - মৌলভীবাজার</option>
                            <option <?php if($record['permanent_district'] == "Meherpur") echo 'selected'; ?> value="Meherpur">Meherpur - মেহেরপুর</option>
                            <option <?php if($record['permanent_district'] == "Munshiganj") echo 'selected'; ?> value="Munshiganj">Munshiganj - মুন্সীগঞ্জ</option>
                            <option <?php if($record['permanent_district'] == "Mymensingh") echo 'selected'; ?> value="Mymensingh">Mymensingh - ময়মনসিংহ</option>
                            <option <?php if($record['permanent_district'] == "Naogaon") echo 'selected'; ?> value="Naogaon">Naogaon - নওগাঁ</option>
                            <option <?php if($record['permanent_district'] == "Narail") echo 'selected'; ?> value="Narail">Narail - নড়াইল</option>
                            <option <?php if($record['permanent_district'] == "Narayanganj") echo 'selected'; ?> value="Narayanganj">Narayanganj - নারায়ণগঞ্জ</option>
                            <option <?php if($record['permanent_district'] == "Narsingdi") echo 'selected'; ?> value="Narsingdi">Narsingdi - নরসিংদী</option>
                            <option <?php if($record['permanent_district'] == "Natore") echo 'selected'; ?> value="Natore">Natore - নাটোর</option>
                            <option <?php if($record['permanent_district'] == "Nawabganj") echo 'selected'; ?> value="Nawabganj">Nawabganj - নবাবগঞ্জ</option>
                            <option <?php if($record['permanent_district'] == "Netrokona") echo 'selected'; ?> value="Netrokona">Netrokona - নেত্রকোনা</option>
                            <option <?php if($record['permanent_district'] == "Nilphamari") echo 'selected'; ?> value="Nilphamari">Nilphamari - নীলফামারী</option>
                            <option <?php if($record['permanent_district'] == "Noakhali") echo 'selected'; ?> value="Noakhali">Noakhali - নোয়াখালী</option>
                            <option <?php if($record['permanent_district'] == "Pabna") echo 'selected'; ?> value="Pabna">Pabna - পাবনা</option>
                            <option <?php if($record['permanent_district'] == "Panchagarh") echo 'selected'; ?> value="Panchagarh">Panchagarh - পঞ্চগড়</option>
                            <option <?php if($record['permanent_district'] == "Patuakhali") echo 'selected'; ?> value="Patuakhali">Patuakhali - পটুয়াখালী</option>
                            <option <?php if($record['permanent_district'] == "Pirojpur") echo 'selected'; ?> value="Pirojpur">Pirojpur - পিরোজপুর</option>
                            <option <?php if($record['permanent_district'] == "Rajbari") echo 'selected'; ?> value="Rajbari">Rajbari - রাজবাড়ী</option>
                            <option <?php if($record['permanent_district'] == "Rajshahi") echo 'selected'; ?> value="Rajshahi">Rajshahi - রাজশাহী</option>
                            <option <?php if($record['permanent_district'] == "Rangamati") echo 'selected'; ?> value="Rangamati">Rangamati - রাঙামাটি</option>
                            <option <?php if($record['permanent_district'] == "Rangpur") echo 'selected'; ?> value="Rangpur">Rangpur - রংপুর</option>
                            <option <?php if($record['permanent_district'] == "Satkhira") echo 'selected'; ?> value="Satkhira">Satkhira - সাতক্ষীরা</option>
                            <option <?php if($record['permanent_district'] == "Shariatpur") echo 'selected'; ?> value="Shariatpur">Shariatpur - শরীয়তপুর</option>
                            <option <?php if($record['permanent_district'] == "Sherpur") echo 'selected'; ?> value="Sherpur">Sherpur - শেরপুর</option>
                            <option <?php if($record['permanent_district'] == "Sirajgonj") echo 'selected'; ?> value="Sirajgonj">Sirajgonj - সিরাজগঞ্জ</option>
                            <option <?php if($record['permanent_district'] == "Sunamganj") echo 'selected'; ?> value="Sunamganj">Sunamganj - সুনামগঞ্জ</option>
                            <option <?php if($record['permanent_district'] == "Sylhet") echo 'selected'; ?> value="Sylhet">Sylhet - সিলেট</option>
                            <option <?php if($record['permanent_district'] == "Tangail") echo 'selected'; ?> value="Tangail">Tangail - টাঙ্গাইল</option>
                            <option <?php if($record['permanent_district'] == "Thakurgaon") echo 'selected'; ?> value="Thakurgaon">Thakurgaon - ঠাকুরগাঁও</option>
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