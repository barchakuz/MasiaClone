<?php

	require('include/database.php');

	$sql = "SELECT * FROM applicant";

	$query = mysqli_query($connection , $sql);
	
	if(!$query)
	{
		echo mysqli_query($connection);
	}
	
	$applicant_list = '';
	$sno = 0;
		while($applicant = mysqli_fetch_assoc($query))
	{
		
		$sno++;
		
			$applicant_list .= "
			<div class='box1'>
							<div class='box'>
								<div>
									<img class='applicant_pic' src=images/applicant_list/$applicant[applicant_photo] />
								</div>
								<div>	
									$applicant[applicant_name]<br /><br />
								</div>
								<div>						
									Email : $applicant[applicant_email]<br /><br />
								</div>
								<div>
								 Course : $applicant[applicant_course]<br /><br />
								</div>									
							</div>
						</div>";
	
	
	
	}
	
	
	mysqli_close($connection);


?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/alumni.css">
</head>
<body>
<?php
include('include/header.php');

?>

<?php
include('include/slider.php');

?>
<br>
<h1 id='txt'>Alumni</h1><br>
<div class="alumn1">
					<img src="images/old/1.jpg" class="img-1">
					<h3>Qazi Humayun</h3>
					<p>It has been a pleasure working with MASIA Soft as Web Developer during the past year. CEO of MASIA Soft Mr Ishtiaq Ahmad is a results oriented person and a detail-oriented manager with a realistic approach towards IT problem solving. he is always ready to accept new challenges and meet the targets with his professional team. Sir Ishtiaq is a hard worker and has shown eagerness towards his assigned tasks and responsibilities. I recommend Ishtiaq as a person and MASIA Soft as a professional place with great recognition and deep education of solutions. As I remember, Ishtiaq is a very productive person. Always punctual Manager with boundless energy - that\'s Ishtiaq Ahmad! Loyal and well educated. Is able to work in a fast-paced environment. </p></div>	
<div class="alumn2">
					<img src="images/old/2.jpeg" class="img-1">
					<h3>HASSAN NASIR</h3>
					<p>When I decided to learn website development, I was wondering where to start from. One of my friend suggest me about MASIA Institute. And today I am grateful to my teachers and the management of MASIA Institute. The teaching methodology is excellent. They are cooperative, they are sincere and up to date with the technologies. Teachers helped me in learning and also helped me for my interview preparation. I highly recommend MASIA Institute to those who are eager to learn website development and graphics designing. Its the best platform for new commers.</p></div>
<div class="alumn3">
					<img src="images/old/3.jpg"class="img-1">
					<h3>Areej Ishtiaq</h3>
					<p>Today I am working in a software house sitting along with highly professional people but whenever I look back and think what gives me this confidence I got to remember an ordinary student who is worried for project completion, a student who do not know how to code and from where to start roaming around on road to Find an academy but oh this short time period and no one was ready to help. At that time Masia institute not only. Took the challenge but also gives us confidence that nothing is impossible anyone can code.I have never seen this much cooperative environment and helping staff. Today whatever I am is because of masia institute and. Mr. Ishtiaq Ahmed Khan. Masia institute and its staff is always ready to help and to guide. This institute will not only teaches you but will also polish your skills and will give you confidence to flourish and to improvise your communication skills</p></div>
<div class="alumn4">
					<img src="images/old/4.png" class="img-1">
					<h3>Shahzad Amin</h3>
					<p>This is the place where I started learning graphics Designing. Sir Ishtiaq Ahmad Khan was my teacher. Their teaching methodology is superb. "they know how to bring the best out of us" They trained us in a way that we are living a successful life today. Today I believe I am a lucky person to have this institution as my start. MANY MANY of thanks to Sir. Ishtiaq Ahmad Khan.</p></div>
<div style='clear: both;'></div>
<div><br>
<h1 id='txt_1'>New Applicants</h1>
<br>
</div>

<?php
	echo $applicant_list;
?>
<div style="clear: both;"></div>
<?php
include('include/footer.php');

?>	

</body>

</html>

