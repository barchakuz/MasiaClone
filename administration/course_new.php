<!DOCTYPE html>
<html>
<head>
	<title>New Courses</title>
</head>
<body>
	<form method='post' action='course_new_process.php' enctype="multipart/form-data">
		<table>
			<tr>
				<td>Name :</td>
				<td>
					<input type="text" name="course_name">
			</td>
			</tr>
			<tr>	
				<td>Fees :</td>
				<td>
					<input type="text" name="fees"><br />
				</td>
			</tr>
				<tr>	
				<td>Old Fees :</td>
				<td>
					<input type="text" name="old_fee"><br />
				</td>
			</tr>
			<tr>	
				<td>Duration :</td>
				<td>
					<input type="text" name="duration"><br />
				</td>
			</tr>
			<tr>	
				<td>Photo :</td>
				<td>
					<input type="file" name="photo"><br />
				</td>
			</tr>	
			<td>
				<input type="submit" name="Save"><br />
			</td>
		</table>
	</form>

</body>
</html>