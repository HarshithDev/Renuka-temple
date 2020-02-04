<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="keyword" content="">
<meta name="description" content="">
<meta name="keyword" content="">
<meta name="author" content="">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:url" content="">
<meta property="og:image" content="">
<meta property="og:type" content="">
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="nav.css">
<link href="https://fonts.googleapis.com/css?family=Sarabun|Caveat" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery.js"></script>
<script src="aos.js"></script>
<link rel="stylesheet" href="aos.css">
</head>
<body>
<header>
<div id="title-bar" class="header-bar">
	<h1 class="title">Sri Rameshwara and Goddess Honnadevi</h1>
</div>
<div class="navigation-menu">
<nav class="navbar">
	<ul class="navbar-nav">
		<li><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>">Home</a></li>
		<li><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>#Background">Background</a></li>
		<li><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>#about">About</a></li>
		<li><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>#events">Events</a></li>
		<li><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>#gallery">Gallery</a></li>
		<li><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>#testimonials">Testimonials</a></li>
        <li><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>#contact">Contact</a></li>
        <li><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/donation.php">Donations</a></li>
	</ul>
</nav>
	<span class="open-slide" >
	<a href="#" id="hamburger-open" onclick="openSlideMenu()">
		<svg width="30" height="30">
			<path d="M0,5 30,5" stroke="#fff" stroke-width="5" />
			<path d="M0,14 30,14" stroke="#fff" stroke-width="5" />
			<path d="M0,23 30,23" stroke="#fff" stroke-width="5" />
		</svg>
	</a>
	</span>
	<div id="side-menu" class="side-nav">
		<a href="#" id="hamburger-close" class="btn-close" onclick="closeSlideMenu()">&times;</a>
		<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>" onclick="closeSlideMenu()">Home</a>
		<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>#Background" onclick="closeSlideMenu()">Background</a>
		<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>#about" onclick="closeSlideMenu()">About</a>
		<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>#events" onclick="closeSlideMenu()">Events</a>
		<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>#gallery" onclick="closeSlideMenu()">Gallery</a>
		<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>#testimonials" onclick="closeSlideMenu()">Testimonials</a>
        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>#contact" onclick="closeSlideMenu()">Contact</a>
        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/donation.php" onclick="closeSlideMenu()">Donations</a>
	</div>
</div>
</header>