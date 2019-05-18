<?php
	session_start();

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "MemberUserLogin";

	$conn = new mysqli($servername, $username, $password, $db);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
?>
