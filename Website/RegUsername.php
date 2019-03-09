<?php 	
	include "DBConnect.php";

		if(isset($_REQUEST['q']))
		{
		// get the GET request via the url and the q parameter
		$username = $_REQUEST['q'];
		
		if(preg_match("/^[a-zA-Z]+$/", $username) === 1){
			
			// Set up parameterised query
				$sql = $con->prepare("SELECT Username FROM users WHERE Username = ?");
				$sql->bind_param("s",$username);
				
				// execute sql statement
				$sql->execute();
				
				// // // get the results.
				$result = $sql->get_result();
				
				// // check how many results have been returned.
				if($result->num_rows > 0)
				{
				  echo "dupe";
				}
		
		}else{
				echo "Invalid";
		}
		 
	}
	


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
/*

$sql = "SELECT Username FROM users WHERE Username = $username";
	$result = $con->query($sql);

	if($result == 0)
	{
		echo "This username is available".
	}
	else if($result => 1)
	{
		echo "This username is unavailable, please try another."
	}
	
*/
?>

