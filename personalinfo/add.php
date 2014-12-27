<?php
//print_r($_POST);


$code = $_POST['code'];
$track = $_POST['track'];
$fullname = $_POST['fullname'];
$fathername = $_POST['fathername'];
$mothername = $_POST['mothername'];
$religion = $_POST['religion'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$nationalid = $_POST['nationalid'];
$useremail = $_POST['useremail'];
$mobile = $_POST['mobile'];
$hometown = $_POST['hometown'];
$currentcity = $_POST['currentcity'];
$sscroll = $_POST['sscroll'];
$sscboard = $_POST['sscboard'];
$sscyear = $_POST['sscyear'];
$sscgroup = $_POST['sscgroup'];
$sscresult = $_POST['sscresult'];
$hscroll = $_POST['hscroll'];
$hscboard = $_POST['hscboard'];
$hscyear = $_POST['hscyear'];
$hscgroup = $_POST['hscgroup'];
$hscresult = $_POST['hscresult'];
$honssubject = $_POST['honssubject'];
$honsresult = $_POST['honsresult'];
$bangla = $_POST['bangla'];
$english = $_POST['english'];

$link = mysqli_connect("localhost", "root", "lict@2", "crud01");

$query = "INSERT INTO `crud01`.`personalinfo`(`code`, `track`, `fullname`, `fathername`, `mothername`, `religion`, `dob`, `gender`, `nationality`, `nationalid`, `useremail`, `mobile`, `hometown`, `currentcity`, `sscroll`, `sscboard`, `sscyear`, `sscgroup`, `sscresult`, `hscroll`, `hscboard`, `hscyear`, `hscgroup`, `hscresult`, `honssubject`, `honsresult`, `bangla`, `english`)
VALUES ('$code', '$track', '$fullname', '$fathername', '$mothername', '$religion', '$dob', '$gender', '$nationality', '$nationalid', '$useremail', '$mobile', '$hometown', '$currentcity', '$sscroll', '$sscboard', '$sscyear', '$sscgroup', '$sscresult', '$hscroll', '$hscboard', '$hscyear', '$hscgroup', '$hscresult', '$honssubject', '$honsresult', '$bangla', '$english')";
mysqli_query($link, $query);


header('location:list.php');
?>