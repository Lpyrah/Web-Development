<?php session_start(); ?>

<html>
	<link href="bootstrap.min.css" type="text/css" rel="stylesheet"/>
	
<head>
	<title>Beartooth - Albums</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="container-fluid">
		
	<?php
	include "DBConnect.php";
	include "NavBar.php";
	
	if(isset($_POST['comment'])){
		$comment = $_POST['comment'];
		$comment = htmlspecialchars($comment);
		$userID = $_SESSION['UserID'];

		$sql = $con->prepare("INSERT INTO comments (UserID,CommentContent) VALUES (?,?);");
		$sql->bind_param("is",$userID,$comment);
		$sql->execute();
	}
	?>

<div class="card-deck">
  <div class="card bg-primary">
    <div class="card-body text-center">
		<img style="height: 700px; width: 100%; display: block;" src="img/Disease.jpg" alt="Card image">	<!--Credit goes to https://wallofsoundau.com/2018/09/23/beartooth-disease-album-review/-->
		<p class="card-text">"Disease" is our most recent album to date hitting number one on a number of US Rock charts.</p>
    </div>
  </div>
  <div class="card bg-primary">
    <div class="card-body text-center">
	<img style="height: 700px; width: 100%; display: block;" src="img/Paris.jpg" alt="Card image">	<!--Credit goes to http://coreradio.ru/hardcore/16342-beartooth-live-from-download-festival-paris-2016-2016-->
      <p class="card-text">Relive Beartooth's outstanding performance on Download Festival's Parisian stage in 2016.</p>
    </div>
  </div>
</div>
	<br>
<div class="card-deck">
  <div class="card bg-primary">
    <div class="card-body text-center">
	<img style="height: 700px; width: 100%; display: block;" src="img/Aggressive.jpg" alt="Card image">	<!--Credit goes to https://www.amazon.com/Aggressive-Album-Commentary-Beartooth/dp/B075VFM9TW-->
		<p class="card-text">Our highly rated album released June 2016.</p>
    </div>
  </div>
  <div class="card bg-primary">
    <div class="card-body text-center">
		<img style="height: 700px; width: 100%; display: block;" src="img/Disgusting.jpg" alt="Card image">	<!--Credit goes to https://www.amazon.com/Disgusting-Beartooth/dp/B00JZ4XB3K-->
      <p class="card-text">Highly anticipated first album released by Beartooth June 2014.</p>
    </div>
  </div>
</div>

		
	</div>
	<?php 
		if(session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['Username']) == true){
			include "Comments.php";
		}
	?>
	
	<?php include "Footer.php"?>
	</div>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="NavbarJquery.js"></script>


</body>

</html>                                                           
              