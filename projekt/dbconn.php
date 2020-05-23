<?php
	# Stop Hacking attempt

	if(!defined('__APP__')) {

		die("Hacking attempt");

	}	

	# Connect to MySQL database
	#$MySQLi = new mysqli("127.0.0.1","root","/D`:yM6fSS","vvg") or die ('Error connecting to MySQL server.');

	$MySQL = mysqli_connect("127.0.0.1","earnaut","yM6fSS2020!!","vvg",3307) or die('Error connecting to MySQL server.');
	?>