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
				<dt onclick="collapse(1);">FRIDAY</dt>
				<dd class="1">First guy</dd>
				<dd class="1">Second guy</dd>
				<dt onclick="collapse(2);">SATURDAY</dt>
				<dd class="2">Third guy</dd>
				<dd class="2">Fourth guy</dd>
				<dt onclick="collapse(3);">SUNDAY</dt>
				<dd class="3">Fifth guy</dd>
				<dd class="3">Sixth guy</dd>
			</dl>
		</div>
	</body>
</html>