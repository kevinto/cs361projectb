<!DOCTYPE html>
<?php
	include "h.php"
?>
<html lang="en">
	<head>
		<meta charset="utf-8"></meta>
		<meta content="IE=edge" http-equiv="X-UA-Compatible"></meta>
		<meta content="width=device-width, initial-scale=1" name="viewport"></meta>
		<!-- Important meta tags according to getbootstrap.com -->
		<meta content="" name="This is the homepage for Forever Furries Adoption repository"></meta>
		<meta content="" name="CS361 Project B"></meta>
		<title>
			Forever Furries - Home
		</title>
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
		<!-- Fixed navbar -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<!-- Container for the navigation bar items -->
			<div class="container">
				<div class="navbar-header">
					<!-- Upper left page name button -->
					<a class="navbar-brand" href="home.html">
						<img src="pic/pawlogo.png" height="22" width="25"></img>
					</a>
				</div>
				<!-- Navigation bar menu items -->
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						::before
						<li class="active">
							<a href="home.php">
								Home
							</a>
						</li>
						<li>
							<a href="adoptions.php">
								Adoptions
							</a>
						</li>
						<li>
							<a href="volunteers.html">
								Volunteers
							</a>
						</li>
						<li>
							<a href="donations.html">
								Donations
							</a>
						</li>
					</ul>
				</div>
				<!-- /.nav-collapse -->
			</div>
		</nav>
		<br><br><br><br> <!-- Properly aligns the showcase container -->
		<div class="container theme-showcase" role="main">
			<!-- This class creates a gray block for large text on the page -->
			<div class="jumbotron">
					<h1>
							Forever Furries
					</h1>
					<p>
							Welcome to America's #1 dog and cat adoption site. Our mission is to connect great families with amazing pets - and become Forever Furries. To get started, simply click on a picture of an animal below, or select from the menu options above. 
					</p>
			</div>
			<!-- Create a header that leads into pet images -->
			<div class="page-header">
				<h1>
					Find a friend
				</h1>
			</div>
			<div style="text-align: center">
				<h4>
					<a href="adoptions.php?add=cat">
						Search felines
						<img class="img-thumbnail" alt="Missing Pet" src="pic/catlogo.gif" style="float: center; width: 200px; height: 200px;" ></img>
					</a>
					<a href="adoptions.php?add=dog" name="dog_selected">
						<img class="img-thumbnail" alt="Missing Pet" src="pic/doglogo.gif" style="float: center; width: 200px; height: 200px;" ></img>
						Search canines
					</a>
				</h4>
			</div>
			<br /><br />
			<div class="page-header">
				<h1>
					Showcased Pets
				</h1>
			</div>
			<!-- Create 10x clickable pet thumbnail images -->
			<a href="adoptions.php">
				<img class="img-thumbnail" alt="Missing Pet" src="pic/cat1.jpg" style="width: 200px; height: 200px;" ></img>
			</a>
			<a href="adoptions.php">
				<img class="img-thumbnail" alt="Missing Pet" src="pic/dog1.jpg" style="width: 200px; height: 200px;" ></img>
			</a>
			<a href="adoptions.php">
				<img class="img-thumbnail" alt="Missing Pet" src="pic/dog2.jpg" style="width: 200px; height: 200px;" ></img>
			</a>
			<a href="adoptions.php">
				<img class="img-thumbnail" alt="Missing Pet" src="pic/cat2.jpg" style="width: 200px; height: 200px;" ></img>
			</a>
			<a href="adoptions.php">
				<img class="img-thumbnail" alt="Missing Pet" src="pic/cat3.jpg" style="width: 200px; height: 200px;" ></img>
			</a>
			<a href="adoptions.php">
				<img class="img-thumbnail" alt="Missing Pet" src="pic/dog3.jpg" style="width: 200px; height: 200px;" ></img>
			</a>
			<a href="adoptions.php">
				<img class="img-thumbnail" alt="Missing Pet" src="pic/cat4.jpg" style="width: 200px; height: 200px;" ></img>
			</a>
			<a href="adoptions.php">
				<img class="img-thumbnail" alt="Missing Pet" src="pic/cat5.jpg" style="width: 200px; height: 200px;" ></img>
			</a>
			<a href="adoptions.php">
				<img class="img-thumbnail" alt="Missing Pet" src="pic/dog4.jpg" style="width: 200px; height: 200px;" ></img>
			</a>
			<a href="adoptions.php">
				<img class="img-thumbnail" alt="Missing Pet" src="pic/dog5.jpg" style="width: 200px; height: 200px;" ></img>
			</a>
		</div>
	</body>
	<footer class="footer">
		<div class="container">
			<br /><br />
			<div style="text-align:center">
				<img src="pic/footerlogo.gif" height="70" width="150"></img>
				<p class="text-muted">&copy;<br /></p>
			</div>
			<br /><br />
		</div>
	</footer>
</html>