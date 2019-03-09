<?php session_start(); ?>

<html>
	<link href="bootstrap.min.css" type="text/css" rel="stylesheet"/>
	
<head>
	<title>Beartooth - News</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="container-fluid">
		
	<?php
	include "DBConnect.php";
	include "NavBar.php";
	?>

	<!-- Create our row that we can split out of 12.-->
	<div class = "row">
	<!-- Create three columns for the large screen -->
		<div class = "col-lg-4"></div>
		<div class = "col-lg-4">
		
		<!-- Out content(Card) that we are splitting the screen into thirds-->
		<div class="card mb-3">
		  <h3 class="card-header">Tour dates</h3>
		  <div class="card-body">
		  </div>
		  <img style="height: 500px; width: 100%; display: block;" src="img/Gig.jpg" alt="Card image">
		  <div class="card-body">
			<p class="card-text">Several new tour dates have been announced for both USA and UK! Buy tickets before they sell out!</p>
		  </div>
		  <ul class="list-group list-group-flush">
			<li class="list-group-item">Download Festival, Donington Park, Leicestershire, UK</li>
			<li class="list-group-item">Rize Festival, Hylands Park, Essex, UK</li>
			<li class="list-group-item">Pitchfork Music Festival, Union Park, Chicago, USA</li>
			<li class="list-group-item">Ultra Music Festival, Bayfront Park, Miami, Florida, USA</li>
		  </ul>
		  <div class="card-body">
			<a href="UKTour.php" class="card-link">Tour Schedule</a>
		  </div>
		  <div class="card-footer text-muted">
			2 days ago
		  </div>
		</div>
		</div>
		<div class = "col-lg-4"></div>
	</div>

	<!-- Create our row that we can split out of 12.-->
	<div class = "row">
	<!-- Create three columns for the large screen -->
		<div class = "col-lg-4"></div>
		<div class = "col-lg-4">
		
		<!-- Out content(Card) that we are splitting the screen into thirds-->
		<div class="card mb-3">
		  <h3 class="card-header">Beartooth Own the Charts!</h3>
		  <div class="card-body">
		  </div>
		  <img style="height: 500px; width: 100%; display: block;" src="img/ManGuitar.jpg" alt="Card image">
		  <div class="card-body">
			<p class="card-text">Beartooth's new album "Disease" a major success, reaching highest honour in chart topping spree.</p>
		  </div>
		  <ul class="list-group list-group-flush">
			<li class="list-group-item">US Independent Albums (Billboard): 1</li>
			<li class="list-group-item">US Top Hard Rock Albums (Billboard): 1</li>
			<li class="list-group-item">US Top Rock Albums (Billboard): 5</li>
		  </ul>
		  <div class="card-body">
			<a href="Albums.php" class="card-link">View Album</a>
		  </div>
		  <div class="card-footer text-muted">
			17 days ago
		  </div>
		</div>
		</div>
		<div class = "col-lg-4"></div>
	</div>

	<!-- Create our row that we can split out of 12.-->
	<div class = "row">
	<!-- Create three columns for the large screen -->
		<div class = "col-lg-4"></div>
		<div class = "col-lg-4">
		
		<!-- Out content(Card) that we are splitting the screen into thirds-->
		<div class="card mb-3">
		  <h3 class="card-header">New Album</h3>
		  <div class="card-body">
		  </div>
		  <img style="height: 500px; width: 100%; display: block;" src="img/Disease.jpg" alt="Card image">
		  <div class="card-body">
			<p class="card-text">"Beartooth's new album "Disease" has now been released for purchase worldwide</p>
		  </div>
		  <div class="card-body">
			<a href="Albums.php" class="card-link">View Album</a>
		  </div>
		  <div class="card-footer text-muted">
			24 days ago
		  </div>
		</div>
		</div>
		<div class = "col-lg-4"></div>
	</div>

	<!-- Create our row that we can split out of 12.-->
	<div class = "row">
	<!-- Create three columns for the large screen -->
		<div class = "col-lg-4"></div>
		<div class = "col-lg-4">
		
		<!-- Out content(Card) that we are splitting the screen into thirds-->
		<div class="card mb-3">
		  <h3 class="card-header">Back to the Studio</h3>
		  <div class="card-body">
		  </div>
		  <img style="height: 500px; width: 100%; display: block;" src="img/Mic.jpg" alt="Card image">
		  <div class="card-body">
			<p class="card-text">Beartooth have returned to their studio in Columbus, Ohio to work on their next album.</p>
		  </div>
		  <ul class="list-group list-group-flush">
			<li class="list-group-item">Details of the album name and songlist is currently a secret.</li>
			<li class="list-group-item">Updates will follow on this website so stay connected!</li>
		  </ul>
		  <div class="card-footer text-muted">
			4 months ago
		  </div>
		</div>
		</div>
		<div class = "col-lg-4"></div>
	</div>


	<?php include_once "Footer.php"?>
	
	</div>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="NavbarJquery.js"></script>


</body>

</html>                                                           
              