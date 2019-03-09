<?php session_start(); ?>
<html>
	<link href="bootstrap.min.css" type="text/css" rel="stylesheet"/>
	
<head>
	<title>Beartooth - Tour</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="container-fluid">
		
	<?php
	include "DBConnect.php";
	include "NavBar.php";	

	
	?>

	<h2>THIS IS THE BEARTOOTH TOUR PAGE</h2>
	<?php 
	
	$sql = "SELECT TourDate, Venue, Location FROM uk";
		$result = $con->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
    echo "<table class = table table-hover>";
    echo "<thead>";
    echo "<tr>";
        echo "<th scope='col'>Date</th> ";
        echo "<th scope='col'>Venue</th> ";
        echo "<th scope='col'>Location</th> ";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
		while($row = $result->fetch_assoc()) {
			
			echo "<tr>";
            echo "<td>" .  $row["TourDate"] . "</td>";
            echo "<td>" . $row["Venue"] . "</td>";
            echo "<td>" . $row["Location"] . "</td>";
			echo "</tr>";
        }
		
    echo "</tbody>";
    echo "</table>";
}

$con->close()
	
	?>

	
	<?php include_once "Footer.php"?>
	</div>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="NavbarJquery.js"></script>


</body>

</html>                                                           
              