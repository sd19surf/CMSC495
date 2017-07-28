<?php

// write a method to post the chat message to the database
// capture the geolocation from the browser, userid and the message.

include('session.php');

$value1 = $_SESSION['UserId'];
$value2 = $_POST['lat'];
$value3 = $_POST['lon'];
$value4 = $_POST['message'];
$value5 = "CURRENT_TIMESTAMP";


	$sql = "INSERT INTO messages (UserId, Lat, Lon, Messages, timeposted) VALUES ('$value1', '$value2', 
     '$value3', '$value4', '$value5')";

	$query = $conn->query($sql); 

	$close = $conn->close();


?>