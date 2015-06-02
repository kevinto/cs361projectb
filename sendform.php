<html lang="en">
	<head>
		<title>Send form redirect</title>
		<link rel="shortcut icon" href="pic/favicon.ico">
		<meta charset="utf-8"></meta>
		<meta content="IE=edge" http-equiv="X-UA-Compatible"></meta>
		<meta content="width=device-width, initial-scale=1" name="viewport"></meta>
		<!-- Important meta tags according to getbootstrap.com -->
		<meta content="" name="This is the volunteers page for Forever Furries Adoption repository"></meta>
		<meta content="" name="CS361 Project B"></meta>
		<!--TO VIEW UNIT TESTS -->
		<META http-equiv="refresh" content="10;URL=http://web.engr.oregonstate.edu/~colliell/home.html">
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="css/bootstrap.css"></link>
		<!-- Bootstrap theme -->
		<link rel="stylesheet" href="css/bootstrap-theme.css"></link>
	</head>    
 
<body role="document">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	<div class="container theme-showcase" role="main">
		<!-- This class creates a gray block for large text on the page -->
		<div class="jumbotron">
			<h1>
				<?php 
					$user = "colliell@onid.orst.edu"; //delete this line and use $email for real testing
					$subject2 = "Your form has been submitted"; 

					//$shelter = $_POST['mySelect'];
					$shelter = "collinsreilly@gmail.com";
					$subject = "Volunteer form submitted"; 

					$first = $_POST['firstName'] ; 
					$last = $_POST['lastName']; 
					$email = $_POST['Email'];
					$exp = $_POST['Experience'];
					$qs = $_POST['Questions'];
					$headers = "From: admin@foreverfurries.com";

					$body ="Hello " . $shelter . ",<br><br>" . "We have received the following information from a recently submitted online volunteer interest form.<br><br>". 
					"Name: " . $first . " " . $last . "<br>" . "Email: " . $email . "<br>" . "Experience: " . $exp . "<br>" . "Questions: " . $qs . "<br><br>" . 
					"Please contact us with any questions. As always, thanks for helping our furry friends!<br><br>" . "Sincerely,<br>Forever Furries team";

					$body2 ="Hello " . $first . ",<br><br>We have begun processing your volunteer form through the designated shelter.<br>" . "You can contact them directly at " . 
					$shelter . ".<br>Here's the information we received.<br><br>" . "Name: " . $first . " " . $last . "<br>" . "Email: " . $email . "<br>" . "Experience: " . $exp .
					"<br>Questions: " . $qs . "<br><br>" . "Please contact us with any questions. Thank you for volunteering!<br><br>" . "Sincerely,<br>Forever Furries team";


					$send = mail($shelter, $subject, $body, $headers); 
					$send2 = mail($email, $subject2, $body2, $headers); 

					//UNIT TESTS FOR SEND SUCCESS//
					if($send and $send2) 
					{
						print ("Success<br>");
					} 
					else 
					{
						print ("We encountered an error sending your mail, please notify webmaster@foreverfurries<br>");  
					}
				?> 
			</h1>
		</div>
		<p>
			<h3>
				Redirecting...
			</h3>
			<h4>
				<?php
					//UNIT TESTS FOR VARIABLE STORAGE//
					print("User email: ");
					echo $email . "<br>";
					print("User subject: ");
					echo $subject2 . "<br>";
					print("Shelter email: ");
					echo $shelter . "<br>";
					print("Shelter subject: ");
					echo $subject . "<br>";
					print("Name: ");
					echo $first . " " . $last . "<br>";
					print("Experience: ");
					echo $exp . "<br>";
					print("Questions: ");
					echo $qs . "<br>";
					print("Header: ");
					echo $headers . "<br>";
				?>
			</h4>
		</p>
	</div>
</html>