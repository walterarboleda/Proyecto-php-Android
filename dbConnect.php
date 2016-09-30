<?php
	/*
		author: Belal Khan 
		website: https://www.simplifiedcoding.net
		
		My Database is androiddb 
		you need to change the database name rest the things are default if you are using wamp or xampp server
		You may need to change the host user name or password if you have changed the defaults in your server
	*/
	
	//Defining Constants

	define('HOST','mysql8.000webhost.com');
	define('USER','a4398722_root');
	define('PASS','qwer123');
	define('DB','a4398722_android');
	
	//Connecting to Database
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');