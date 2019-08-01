<?php
include("session.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Privilege Profile</title>
		<link rel="icon" type="image/png" href="images\pic11.png" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo">
				</div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index2.php">Home</a></li>
					<li><a href="generic1.php">Profile</a></li>
					<li><a href="generic.php">Privilege Profile</a></li>
					<li><a href="generic2.php">Pension</a></li>
					<li><a href="generic3.php">Achievements</a></li>
					<li><a href="session_stop.php">Log Out</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>The section to enter your serving personnel details</p>
						<h2>Privilege Profile</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2" align="center">
				<h3>Serving Personnel Form</h3>
				<div class="form">
				<form method="post" action="server1.php" align="center">
					Service Id:<br>
  					<input type="text" name="service_id"><br>
  					Serving Status:<br>
  					<input type="text" name="status"><br>
  					Name:<br>
  					<input type="text" name="name"><br>
  					Gender:<br>
  					<input type="text" name="gender"><br>
  					Date Of Birth:<br>
  					<input type="text" name="dob"><br>
  					Contact Number:<br>
  					<input type="text" name="contact_number"><br>
  					Force Type:<br>
  					<input type="text" name="type"><br>
  					<input type="submit" value="Submit">
				</form>
				</div>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
