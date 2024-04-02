<?php

	require('include/database.php');

	$sql = "SELECT * FROM course";

	$query = mysqli_query($connection , $sql);
	
	if(!$query)
	{
		echo mysqli_query($connection);
	}
	
	$course_list = '';
	$sno = 0;
		while($course = mysqli_fetch_assoc($query))
	{
		
		$sno++;
		
			$course_list .= "
						<div class='full' >
							<div class='main'>
								<br />
								<div>
									<img id='photo' src=images/course_list/$course[photo] />
								</div>
								<div id='course_name'>	
									$course[course_name] </br><br />
								</div>
								<div id='fees'>						
									Fees :<div id='old_fee'><del> $course[old_fee]</del></div> $course[fees]
								</div>
								<br /><br />
								<div id='duration'>
								 <b> Duration</b> : $course[duration]
								</div>	<br />
								<button><a id='apply' href='apply.php'>Apply</a></button>
							</div>
						</div>	

						";
	
	
	
	}
	
	
	mysqli_close($connection);


?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/course_list.css">
	<style>
		#photo{
			width : 100px;
			height : 100px;
		}
		button{
			border: 0.1px solid #5cb85c;
			height: 30px;
			width: 70px;
			background-color: #5cb85c;
			
			border-radius: 10%;
		}
		#apply{
			color: white;
			text-decoration: none;
		}
		.main{
			background-color: white;
		}
		.full{
			margin-left: 5%;
			margin-right: 5%;
		}
	</style>
<?php
include('include/header.php');

?>	
</head>
<body>
<?php
include('include/slider.php');

?>
	<h1 id="title">
		Computer Course
	</h1>
	<p>
	MASIA Institute offers the best training in Rawalpindi and Islamabad. We focus on job oriented short courses for beginners and experienced students. MASIA Institute and computer academy is famous for its practical training in Website Designing, Web Development, Graphics Designing, PHP Programming, C++, Java Programming, Android Apps Development, AutoCAD and Microsoft Office.<br><br><br>Currently following short courses are available at masia institute:


	</p>
	
		<div align="center">
		<?php
		
			echo $course_list;
		
		?>

		</div>
	
	<div style='clear: both;'><p></p></div>
</body>

<?php
include('include/footer.php');

?>

</html>

