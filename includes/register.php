<?php
// connect to the database
  
 include "session.php";

//   Get all the variables passed from the html form
// firstname=&lastname=&email=&username=&password1=&password2=
$value2 = $_POST['firstname'];
$value3 = $_POST['lastname'];
$value4 = $_POST['username'];
$value5 = $_POST['email'];
$value6 = md5($_POST['password1']);
//$confirmPass = &_POST['password2'];


// insert the user information

	// Places the user information into the user table on the MySQL database. 

	// Make a UUID	
	$userid  = uniqid();
	
	// Current Date for Last_Login

	$lastlogin = date("Ymd");
	$avatar = "/images/blank_profile.gif";

	$sql = "INSERT INTO user (UserId, First_Name, Last_Name, Username, Email, Password, Icon, Last_Login) VALUES ('$userid', '$value2', 
     '$value3', '$value4', '$value5', '$value6', '$avatar','$lastlogin')";

	$query = $conn->query($sql);



// close connection

$close = $conn->close();

echo "<meta http-equiv='refresh' content='=2;index1.php' />";

?>
