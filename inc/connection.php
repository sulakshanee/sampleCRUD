<?php

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'sampledb';

	$connection = mysqli_connect('localhost', 'root', '', 'sampledb');

	//Checking the connection
	if (mysqli_connect_errno()) {
		die('Database connection failed' . mysqli_connect_error());
	}
?>