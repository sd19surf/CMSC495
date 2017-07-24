<?php
session_start();

// Converted config.ini to this include for the header to start the sesssion.

$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
$dbname = "project1"; // the name of the database that you are going to use for this project
$dbuser = "webconn"; // the username that you created, or were given, to access your database
$dbpass = "oVQxQ7JmQmMfdp2r"; // the password that you created, or were given, to access your database

$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysqli_error());
mysqli_select_db($conn, $dbname) or die("MySQL Error: " . mysqli_error());
?>