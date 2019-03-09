 <?php

	$servername = "lochnagar.abertay.ac.uk";
	$username = "sql1703091";
	$password = "UNoQkdGQjeZX";
	$dbname = "sql1703091";

	//Create connection to database
	$con = new mysqli($servername,$username,$password,$dbname);
   
	//Connection error if unsuccessful
	if($con->connect_error){
		die("Connection Error" . $con->connect_error);
	}
?>
