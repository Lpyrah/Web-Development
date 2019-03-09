<?php session_start(); ?>
<html>
	<link href="bootstrap.min.css" type="text/css" rel="stylesheet"/>
	
<head>
	<title>Beartooth - Log In</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="container-fluid">
	<?php
	include "DBConnect.php";
	include "NavBar.php";
	
	if(isset($_POST['email']) == true && isset($_POST['password']) == true){
	
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$email = htmlspecialchars($email);
		$password = htmlspecialchars($password);
		
		$sql = $con->prepare("SELECT UserID,Username,Email,AdminPriv,Password FROM users WHERE email = ?;");
		$sql->bind_param("s",$email);
		$sql->execute();
		
		$result = $sql->get_result();
		
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$hash = $row['Password'];
				if(password_verify($password,$hash)){
					$_SESSION['Username'] = $row['Username'];
					$_SESSION['Email'] = $row['Email'];
					$_SESSION['AdminPriv'] = $row['AdminPriv'];
					$_SESSION['UserID'] = $row['UserID'];
					if($_SESSION['AdminPriv'] == "t"){
						header("Location: AdminPage.php");
					}else{
						header("Location: Index.php");
					}
				} else{
					echo "<script>window.alert('Password is invalid');</script>";
				}				
			}
		}else{
			echo "<script>window.alert('user doesnt exist');</script>";
		}	
		
	}
	?>
	
		<form action="Login.php" method="post">
			<fieldset>
				<legend>Log In</legend>
				<div class="form-group row">
				</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Email address</label>
			  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
			  <label for="exampleInputPassword1">Password</label>
			  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			</fieldset>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		
			<p>Not got an account yet?</p> 
			<a href="Register.php">Register here</a>
				<br><br>
			
			
	<?php include_once "Footer.php"?>
	</div>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="NavbarJquery.js"></script>


</body>

</html>                                                           
              