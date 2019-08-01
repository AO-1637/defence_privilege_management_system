<?php
include("session.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Welome Comrade!</title>
		<link rel="icon" type="image/png" href="images\pic11.png" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><?php //include("server.php");
				 $_SESSION["count"]=1;
				 echo $_SESSION["message"]; ?></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index2.php">Home</a></li>
					<li><a href="generic1.php">Profile Information</a></li>
					<li><a href="generic.php">Privilege Profile</a></li>
					<li><a href="generic2.php">Pension</a></li>
					<li><a href="generic3.php">Achievements</a></li>
					<li><a href="session_stop.php">Log Out</a></li>

				</ul>
			</nav>

		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/pic3.jpg" alt="" />
					<div class="inner">
						<header>
							<p>A platform to monitor and regulate priveleges to our jawans</p>
							<h2>VISHEYAMAN</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/pic4.jpg" alt="" />
					<div class="inner">
						<header>
							<p>An actual compilation of service & privelege records</p>
						</header>
					</div>
				</article>
				<article>
					<img src="images/pic6.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>A step to ensure the well being of the defence personnel</p>
						</header>
					</div>
				</article>
				<article>
					<img src="images/pic1.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>In Life or Death thou shall be honoured</p>
						</header>
					</div>
				</article>
				<article>
					<img src="images/pic5.jpg"  alt="" />
					<div class="inner">
						<header>
							<h2>JAI HIND</h2>
						</header>
					</div>
				</article>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic18.jpeg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2> India covertly tested its nuclear arsenal in the early 1970s and late 1990s without the CIA even knowing what was happening.</h2>
									</header>
									<p>Till date, it is considered to be one of the CIA’s biggest failures in espionage and detection.</p>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic19.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2> The Indo Pakistan War of 1971 came to end with the surrender of about 93,000 combatants and officials of the Pakistani Army.</h2>
									</header>
									<p>This is the largest number of POWs taken into custody since World War II. The war resulted in the creation of the independent state of Bangladesh.</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>“ Either I will come back after hoisting the tricolor, or I will come back wrapped in it, but I will be back for sure. “</p>
						<h2>Capt. Vikram Batra, PVC</h2>
					</header>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2">
				<div class="inner">
					<header class="align-center">
						<p class="special">A tribute to the Army by our children</p>
						<h2>Indian Army Painting Competition</h2>
					</header>
					<div class="gallery">
						<div>
							<div class="image fit">
								<a href="#"><img src="images/pic12.jpg" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="images/pic9.jpg" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="images/pic14.jpg" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="images/pic16.jpg" alt="" /></a>
							</div>
						</div>
					</div>
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