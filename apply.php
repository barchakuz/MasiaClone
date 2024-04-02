<!DOCTYPE html>
<html>
<head>
<?php
include('include/header.php');
?>
	
</head>
<body>
<?php
include('include/slider.php');

?>
<div align="center" height='50%'>
	<form method='post' action='administration/applicant_new_process.php' enctype="multipart/form-data">
		<table>
			<br /><br />
			<tr>
				<td>
					Name :
				</td>
				<td>
					<input type="text" name="applicant_name" placeholder="Name"><br /><br />
				</td>
			</tr>
			<tr>
				<td>
					Email :
				</td>
				<td>
					<input type="text" name="applicant_email" placeholder="Your Email"><br /><br />
				</td>
			</tr>
			<tr>
				<td>
					Course :
				</td>
				<td>
					<select name="applicant_course">
						  <option >Select Course</option>
						  <option value="php">Php</option>
						  <option value="laravel">Laravel</option>
						  <option value="c++">C++</option>
						  <option value="java">JAVA Programming</option>
						  <option value="asp">ASP.Net (C#) </option>
						  <option value="android">Android Develepment</option>
						  <option value="adobe_illustrator">Adobe Illustrator</option>
						  <option value="auto_cad">AutoCAD </option>
						  <option value="microsoft-office">Microsoft Office</option>
						  <option value="adobe_photoshop">Adobe Photoshop</option>
						  <option value="corel_draw">Corel Draw</option>
						  <option value="graphics_designing">Graphics Designing</option>
					</select><br /><br />
				</td>
			</tr>
			<tr>
				<td>
					Photo :
				</td>
				<td>
					<input type="file" name="applicant_photo"><br /><br />
				</td>
			</tr>
			<td>
				<input type="submit" name="Apply"><br /><br />
			</td>									
		</table>
	</form>
</div>	
<?php
include('include/footer.php');
?>
</body>
</html>