<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="shortcut icon" href="pic/favicon.ico">
		<meta charset="utf-8"></meta>
		<meta content="IE=edge" http-equiv="X-UA-Compatible"></meta>
		<meta content="width=device-width, initial-scale=1" name="viewport"></meta>
		<!-- Important meta tags according to getbootstrap.com -->
		<meta content="" name="This is the adoptions page for Forever Furries Adoption repository"></meta>
		<meta content="" name="CS361 Project B"></meta>
		<title>
			Forever Furries - Adoptions
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
						<img src="pic/foreverfurries.gif" height="25px" widht="150px"></img>
					</a>
				</div>
				<!-- Navigation bar menu items -->
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						::before
						<li>
							<a href="home.html">
								Home
							</a>
						</li>
						<li class="active">
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
							Pets Available for Adoption
					</h1>
					<p>
						To aid you in finding your new pet, please use the filter options below to narrow down your search.
						<div style="text-align: center">
							<h4>
								<a href="adoptions.php?add=cat">
									Search felines
									<img class="img-thumbnail" alt="Missing Pet" src="pic/catlogo.gif" style="float: center; width: 200px; height: 200px;" ></img>
								</a>
								<a href="adoptions.php?add=dog">
									<img class="img-thumbnail" alt="Missing Pet" src="pic/doglogo.gif" style="float: center; width: 200px; height: 200px;" ></img>
									Search canines
								</a>
							</h4>
						</div>
						<!--Unit test for URL change-->
						<button onclick="myFunction()">Unit test for URL refresh</button>
						<p id="search"></p>
						<script>
							function myFunction() {
							    var x = document.URL;
							    document.getElementById("search").innerHTML = x;
							}
						</script>
						<!--Variable set for cat or dog choice on page refresh-->
						<?php
							session_start();
							if($_GET["add"] == 'cat'){
								$_SESSION["search"] = "cat";
							}
							elseif($_GET["add"] == 'dog'){
								$_SESSION["search"] = "dog";
							}
							echo "You have chosen: ";
							echo $_SESSION["search"];
							session_destroy();
						?>
					</p>
			</div>
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