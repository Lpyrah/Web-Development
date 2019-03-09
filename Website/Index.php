<?php session_start(); ?>
<html>
	<link href="bootstrap.min.css" type="text/css" rel="stylesheet"/>
	
<head>
	<title>Beartooth - Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="container-fluid">
		
	<?php
	include "DBConnect.php";
	include "NavBar.php";
	?>

	<!-- Jumbotron Container -->
<div class="jumbotron">
	<!-- Import the image that is going to be used. -->
    <!-- Margin: 0 auto; centers the image -->
		<img style="height : 100%; width : 100%; margin: 0 auto;" src="img/BearArt.jpg"> <!-- Photo by Scott Webb on Unsplash -->
			<p class="lead"> </p>
				<hr class="my-4">
					<p>Welcome to Beartooth! Please use navigation bars to view news, albums, tour dates and more.</p>
					<h2>Social Media</h2>
						<div class="btn-group">
							<a href="https://www.facebook.com/BEARTOOTHband/" target="_blank">
								<button type="button" class="btn btn-primary active">Facebook</button>
							</a>
							<a href="https://twitter.com/BEARTOOTHband" target="_blank">
								<button type="button" class="btn btn-primary active">Twitter</button>
							</a>
							<a href="https://www.youtube.com/channel/UC5d3EwBqgsmHHyBCcq_Af_A" target="_blank">
								<button type="button" class="btn btn-primary active">Youtube</button>
							</a>
						</div>
</div>
	<?php include_once "Footer.php"?>
	</div>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="alertifyjs/css/alertify.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="alertify.js"></script>
	<script src="NavbarJquery.js"></script>
	<script src="Cookies.js"></script>


</body>

</html>                                                           
              