<?php

	require('../include/database.php');
	
	$dir_course_applicant = '../images/applicant_list/';

	$applicant_name = $_POST['applicant_name'];
	$applicant_email = $_POST['applicant_email'];
	$applicant_course = $_POST['applicant_course'];
	
	$applicant_photo = $_FILES['applicant_photo']['name'];
	$applicant_tmp_name = $_FILES['applicant_photo']['tmp_name'];
	$applicant_size = $_FILES['applicant_photo']['size'] / 1024;
	$applicant_allowed_ext = array('.jpg', '.jpeg', '.png');

	$applicant_extension = strrchr($applicant_photo, '.');
	$applicant_extension = strtolower($applicant_extension);
		
	if(!in_array($applicant_extension , $applicant_allowed_ext))
		{
			die('Error: invalid image file');
		}
		
		
	if($applicant_size > 1024)
		{
			die('Error: File size is large');
		}
		
	$upload = move_uploaded_file($applicant_tmp_name, $dir_course_applicant . $applicant_photo);
	
	$sql = "INSERT INTO applicant
			
			SET
			
			applicant_name = '$applicant_name',
			applicant_email = '$applicant_email',
			applicant_course = '$applicant_course',
			applicant_photo= '$applicant_photo' 
			";
	$query = mysqli_query($connection, $sql);
	
	
	if(!$query)
	{
		
		echo "Error: Your course failed to registered";
		
	}
	else{
		
		echo "Success: Your Course registered";
		
	}
?>