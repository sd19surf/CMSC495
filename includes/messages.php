<?php

// write a method to post the chat message to the database
// capture the geolocation from the browser, userid and the message.

include('session.php');

$value1 = $_SESSION['UserId'];
$value2 = $_POST['latDB'];
$value3 = $_POST['lonDB'];
$value4 = $_POST['message'];


	$sql = "INSERT INTO messages (UserId, Lat, Lon, Messages, timeposted) VALUES ('$value1', '$value2', 
     '$value3', '$value4', CURRENT_TIMESTAMP)";

	$query = $conn->query($sql); 

	$close = $conn->close();


?>
<meta http-equiv="refresh" content="0;/map.php">