<?php
// connect to the database
  
 include "session.php";

//   Get all the variables passed from the html form
// firstname=&lastname=&email=&username=&password1=&password2=
$value2 = stripslashes($_POST['firstname']);
$value3 = stripslashes($_POST['lastname']);
$value4 = stripslashes($_POST['username']);
$value5 = stripslashes($_POST['email']);
$value6 = md5(stripslashes($_POST['password1']));
$confirmPass = md5(stripslashes($_POST['password2']));

confirmpasswords($value6,$confirmPass);

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

echo "<meta http-equiv='refresh' content='=2;index.php' />";

function confirmpasswords($password1,$password2) {
	if($password1 != $password2){
	echo "Error...Passwords do not match";
	echo "<meta http-equiv='refresh' content='=2;newuser.php' />";
	}
}

?>