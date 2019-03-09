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
	
		if(isset($_POST['date']) === true && isset($_POST['venue']) === true && isset($_POST['location']) === true){
			$date = htmlspecialchars($_POST['date']);
			$venue = htmlspecialchars($_POST['venue']);
			$location = htmlspecialchars($_POST['location']);
			
			
			$sql = $con->prepare("INSERT INTO uk (TourDate, Venue, Location) VALUES (?,?,?);");
			$sql->bind_param("sss",$date,$venue,$location);
			$sql->execute();
		}
		
		if(isset($_POST['dateDel']) === true){
			$date = htmlspecialchars($_POST['dateDel']);

			$sql = $con->prepare("DELETE FROM uk WHERE TourDate=?");
			$sql->bind_param("s",$date);
			$sql->execute();
		}
		
		if(isset($_POST['editVenue']) === true && isset($_POST['editDate']) === true){
			$venue = htmlspecialchars($_POST['editVenue']);
			$date = htmlspecialchars($_POST['editDate']);
			
			$sql = $con->prepare("UPDATE uk SET Venue = ? WHERE TourDate = ?");
			$sql->bind_param("ss",$venue,$date);
			$sql->execute();
		}
	?>
	<h1>Tour Date Managment</h1>
		<form action="AdminPage.php" method="post">
			<fieldset>
				<legend>Add Venue</legend>
				<div class="form-group row">
				</div>
			<div class="form-group">
			  <label for="dateSet">Date</label>
			  <input type="date" name="date" class="form-control" id="inputDate" aria-describedby="dateHelp" placeholder="Enter date of concert">
			</div>
			<div class="form-group">
			  <label for="venueSet">Venue</label>
			  <input type="text" name="venue" class="form-control" id="inputVenue" placeholder="">
			  <small id="venueHelp" class="form-text text-muted">Enter venue name and address (not including country) e.g. Download Festival, Donington Park, Leicester</small>
			</div>
			<div class="form-group">
			  <label for="inputLocation">Location</label>
			  <input type="text" name="location" class="form-control" id="inputLocation" placeholder="">
			  <small id="venueHelp" class="form-text text-muted">Enter country e.g. "UK, USA, Germany"</small>
			</div>
			</fieldset>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		
		<form action="AdminPage.php" method="post">
			<fieldset>
				<legend>Delete Venue</legend>
				<div class="form-group row">
				</div>
			<div class="form-group">
			  <label for="dateSet">Date</label>
			  <input type="date" name="dateDel" class="form-control" id="inputDate" aria-describedby="dateHelp">
			  <small id="dateHelp" class="form-text text-muted">Please select the date of the venue.</small>
			</div>
			</fieldset>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		
		<form action="AdminPage.php" method="post">
			<fieldset>
				<legend>Edit Venue</legend>
				<div class="form-group row">
				</div>
			<div class="form-group">
			  <label for="dateSet">Date</label>
			  <input type="date" name="editDate" class="form-control" id="inputDate" aria-describedby="dateHelp">
			  <small id="dateHelp" class="form-text text-muted">What is the date of the venue that you would like to edit?</small>
			  
			  <label for="dateSet">Venue</label>
			  <input type="text" name="editVenue" class="form-control" id="inputDate" aria-describedby="dateHelp">
			  <small id="dateHelp" class="form-text text-muted">Where is the new venue?</small>
			</div>
			</fieldset>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<br>
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
	<link rel="stylesheet" href="alertify.min.css">
	<link rel="stylesheet" href="default.min.css">
	<script src="alertify.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="NavbarJquery.js"></script>
	


</body>

</html>                                                           
              