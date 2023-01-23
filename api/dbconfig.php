<?php

	global $con;

	$hostname = 'dba120-db.dangerdane.io'; 	// Host Name
	
	$user = 'dane9640'; 			// username of host
	
	$password = 'wd6ebwyw'; 			// password of host
	
	$dbname = 'dba120_db'; 			//database name
			
	$con = new mysqli($hostname,$user,$password,$dbname);
	if (mysqli_connect_errno())
	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		die();
  	}