<?php

	require('../include/database.php');
	
	$dir_course_photos = '../images/course_list/';

	$course_name = $_POST['course_name'];
	$fees = $_POST['fees'];
	$old_fee = $_POST['old_fee'];
	$duration = $_POST['duration'];
	
	$photo_name = $_FILES['photo']['name'];
	$photo_tmp_name = $_FILES['photo']['tmp_name'];
	$photo_size = $_FILES['photo']['size'] / 1024;
	$photo_allowed_ext = array('.jpg', '.jpeg', '.png');

	$photo_extension = strrchr($photo_name, '.');
	$photo_extension = strtolower($photo_extension);
		
	if(!in_array($photo_extension , $photo_allowed_ext))
		{
			die('Error: invalid image file');
		}
		
		
	if($photo_size > 1024)
		{
			die('Error: File size is large');
		}
		
	$upload = move_uploaded_file($photo_tmp_name, $dir_course_photos . $photo_name);
	
	$sql = "INSERT INTO course
			
			SET
			
			course_name = '$course_name',
			fees = '$fees',
			old_fee = '$old_fee',
			duration = '$duration',
			photo= '$photo_name' 
			";
	
	$query = mysqli_query($connection, $sql);
	
	
	if(!$query)
	{
		
		echo "Error: Cannot add to the database";
		
	}
	else{
		
		echo "Success: Course registered";
		
	}
?>