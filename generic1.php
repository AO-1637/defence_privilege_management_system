<?php
include("session.php");
$s_id = $_SESSION["s_id"];
$strSQL = mysqli_query($connection,"SELECT * from serving_personnel where service_id='$s_id'");
$Results = mysqli_fetch_array($strSQL,MYSQLI_ASSOC);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Profile Information</title>
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
						<h2>Profile Information</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2" align="center">
				<div>
					<h3>Service Id : <?php echo $Results['service_id']; ?></h3><br>
					<h3>Serving Status : <?php echo $Results['status']; ?></h3><br>
					<h3>Name : <?php echo $Results['name']; ?></h3><br>
					<h3>Gender : <?php echo $Results['gender']; ?></h3><br>
					<h3>Date Of Birth : <?php echo $Results['dob']; ?></h3><br>
					<h3>Contact Number : <?php echo $Results['contact_number']; ?></h3><br>
					<h3>Force Type : <?php echo $Results['type']; ?></h3><br>
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
