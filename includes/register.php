<?php
// connect to the database

$config = parse_ini_file('../../../config.ini');
 
 $conn = new mysqli('localhost', $config['username'], $config['password'],$config['dbname']);

	// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		} 
   

//   Get all the variables passed from the html form
// firstname=&lastname=&email=&username=&password1=&password2=
$value2 = $_POST['firstname'];
$value3 = $_POST['lastname'];
$value4 = $_POST['email'];
$value5 = $_POST['username'];
$value6 = $_POST['password1'];
//$confirmPass = &_POST['password2'];


// insert the user information

	// Places the user information into the user table on the MySQL database. 

	// Make a UUID	
	$userid  = uniqid();
	
	// Current Date for Last_Login

	$lastlogin = date("Ymd");

	$sql = "INSERT INTO user (UserId, First_Name, Last_Name, Username, Email, Password, Last_Login) VALUES ('$userid', '$value2', 
     '$value3', '$value4', '$value5', '$value6','$lastlogin')";

	$query = $conn->query($sql);



// close connection

$close = $conn->close();


?>
