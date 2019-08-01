<?php
include("session.php");
$s_id = $_SESSION["s_id"];
$strSQL1= "CALL pension('$s_id')";
$strSQL = mysqli_query($connection,$strSQL1);
$Results = mysqli_fetch_assoc($strSQL);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Pension Information</title>
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
						<h2>Pension Information</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2" align="center">
				<div>
					<h3>Service Id : <?php echo $Results['service_id']; ?></h3><br>
					<h3>Amount : <?php echo $Results['amount']; ?></h3><br>
					<h3>Last Installment Date : <?php echo $Results['last_install_date']; ?></h3><br>
					<h3>Next Installment Date : <?php echo $Results['next_install_date']; ?></h3><br>
					<h3>Outstanding : <?php echo $Results['outstanding']; ?></h3><br>
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
