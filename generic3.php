<?php
include("session.php");
$s_id = $_SESSION["s_id"];
$strSQL1= "CALL ach('$s_id')";
$strSQL = mysqli_query($connection,$strSQL1);
$Results = mysqli_fetch_assoc($strSQL);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Achievement</title>
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
						<h2>Achievements</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2" align="center">
				<div>
					<h2>Thank You for Services Jawan ! Every sacrifice of yours is an achievement</h2><br>
					<h3>Service Id : <?php echo $Results['service_id']; ?></h3><br>
					<h3>Current Service Status : <?php echo $Results['current_service_type']; ?></h3><br>
					<h3>Rank : <?php echo $Results['rank']; ?></h3><br>
					<h3>Field Missions : <?php echo $Results['field_mission']; ?></h3><br>
					<h3>Desk Assignments : <?php echo $Results['desk_assign']; ?></h3><br>
					<h3>Conduct : <?php echo $Results['conduct']; ?></h3><br>
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
