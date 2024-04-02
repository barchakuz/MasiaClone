<?php

	const DB_SERVER = 'localhost';
	const DB_USER = 'root';
	const DB_PASSWORD = '';
	const DB_DATABASE = 'project';


	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
	
	if(!$connection)
	{
		die('Error: Cannot connect to the Database server');
	}
	
?>