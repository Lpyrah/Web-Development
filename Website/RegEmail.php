<?php 
	include "DBConnect.php";

	if(isset($_REQUEST['q'])){
		// get the GET request via the url and the q parameter
		$email = $_REQUEST['q'];
		
		// Test regex against the sql.
		// Any number of a-z A-Z 0-9
		// check for the @ symbol
		// Any number of a-z A-Z 0-9
		// check for things like .com, .net, .gov, etc, etc
		if (preg_match("/^[a-zA-Z0-9]+\@[a-zA-Z0-9]+\.[a-z]{3}$/", $email)) {
			// Set up parameterised query
				$sql = $con->prepare("select Email from `users` where Email = ?");
				$sql->bind_param("s",$email);
				
				// execute sql statement
				$sql->execute();
				
				// // // get the results.
				$result = $sql->get_result();
				
				// // check how many results have been returned.
				if($result->num_rows > 0){
				  echo "dupe";
				}
		} else {
			echo "Not Found";
		}
	}
?>