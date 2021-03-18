<?php
	$conn = new mysqli('localhost', 'root', 'chacal666', 'votesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>
