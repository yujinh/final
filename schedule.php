<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
		<title>Home</title>
		<link rel="stylesheet" href="styles/style.css">
		<link rel="stylesheet" href="styles/schedulestyle.css">
		<link rel="stylesheet" href="styles/modal.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="js/modal.js" type="text/javascript"></script>
	    <script src="js/main.js" type="text/javascript"></script>
	</head>
	<body>
		<header id="navbar">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="schedule.php">Schedule</a></li>
				<li><a href="map.html">Map</a></li>
				<li><a href="">Page 3</a></li>
				<li><a href="">Page 4</a></li>
			</ul>
		</header>
		<div id="content">
			<dl>
				<?php
					include 'scripts/schedulereader.php';
				?>
			</dl>
		</div>
	</body>
</html>