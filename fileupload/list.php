<?php
// Connects to your Database
mysql_connect("your.hostaddress.com", "username", "password") or die(mysql_error()) ;
mysql_select_db("Database_Name") or die(mysql_error()) ;

//Retrieves data from MySQL
$data = mysql_query("SELECT * FROM employees") or die(mysql_error());

//Puts it into an array
while($info = mysql_fetch_array( $data )) {
//Outputs the image and other data
    Echo "<img src=http://www.yoursite.com/images/".$info['photo'] ."> <br>";
    Echo "<b>Name:</b> ".$info['name'] . "<br> ";
    Echo "<b>Email:</b> ".$info['email'] . " <br>";
    Echo "<b>Phone:</b> ".$info['phone'] . " <hr>"; }
}?>