<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "rto";
	$conn = mysqli_connect($servername, $username, $password, $db);
	if(!$conn) {
		die("Connection failed:" . mysqli_connect_error());
	}

	date_default_timezone_set('Asia/Kolkata');
?>