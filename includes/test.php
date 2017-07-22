

<?php
$config = parse_ini_file('../config.ini');

$conn = new mysqli('localhost', $config['username'], $config['password'],$config['dbname']);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?> 