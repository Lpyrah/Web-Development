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
	
	if(isset($_POST['email']) == true && isset($_POST['username']) == true && isset($_POST['password']) == true && isset($_POST['gender']) == true && isset($_POST['age']) == true && isset($_POST['radio']) == true){
		
		$email = htmlspecialchars($_POST['email']);
		$username = htmlspecialchars($_POST['username']);
		$gender = htmlspecialchars($_POST['gender']);
		$age = htmlspecialchars($_POST['age']);
		$radio = htmlspecialchars($_POST['radio']);
		$password = $_POST['password'];
		$admin = 'f';
		
		$usernameIsValid = false;
		$emailIsValid = false;
		$passwordIsValid = false;
		$ageIsValid = false;
		$genderIsValid = false;
		$radioIsValid = false;
		
		if (preg_match("/^[a-zA-Z0-9]+\@[a-zA-Z0-9]+\.[a-z]{3}$/", $email)){
			$emailIsValid = true;
		}
		
		if (preg_match("/^[a-zA-Z]+$/",$username)){
			$usernameIsValid = true;
		}
		
		$sql = $con->prepare("SELECT Username,Email FROM users WHERE Username = ? OR Email = ?;");
		$sql->bind_param("ss",$username,$email);
		$sql->execute();
		
		$result = $sql->get_result();
		
		if($result->num_rows > 0){
			$usernameIsValid = false;
			$emailIsValid = false;
		}
		
		
		if(strlen($password) >= 8){
			$passwordIsValid = true;
		}
		
		$password = htmlspecialchars($_POST['password']);
		
		if($gender == "Male" || $gender == "Female"){
			$genderIsValid = true;
		}
		
		if($age == "under16" || $age == "16To24" || $age == "25To39" || $age == "40To59" || $age == "60Plus"){
			$ageIsValid = true;
		}
		
		if($radio == 'Y' || $radio = 'N'){
			$radioIsValid = true;
		}
		
		$hash = password_hash($password,PASSWORD_DEFAULT);
		
		if($usernameIsValid == true && $emailIsValid == true && $passwordIsValid == true && $genderIsValid == true && $ageIsValid == true && $radioIsValid == true){
			$sql = $con->prepare("INSERT INTO users(Email, Username, Password, Gender, AgeGroup, AdminPriv, MailList) VALUES (?,?,?,?,?,?,?);");
			$sql->bind_param("sssssss",$email, $username, $hash, $gender, $age, $admin, $radio);
			$sql->execute();
			$sql->close();
		}
	}
	
	?>

	<div class="card mb-3">
		  <h3 class="card-header">Register</h3>
		</div>

	
<form action="Register.php" method="post">
  <fieldset>
    <div class="form-group">
      <label for="InputEmail">Email address</label>
      <input type="email" name="email" onkeypress="loadDocEmail()" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
	  <div class="form-group">
      <label for="InputUsernam">Username</label>
      <input type="username" name="username" onkeyup="loadDoc()" class="form-control" id="inputUsername" aria-describedby="usernameHelp" placeholder="Create Username">
      <small id="usernameHelp" class="form-text text-muted">This will be visible to other users when you post comments.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Create Password">
	  <small id="passwordHelp" class="form-text text-muted">Password must be greater than 8 characters and must contain at least 1 upper case character, 1 lower case character and 1 number.</small>
    </div>
    <div class="form-group">
      <label for="exampleSelect1">Gender</label>
      <select class="form-control" name="gender" id="exampleSelect1">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleSelect2">Age group</label>
      <select multiple="" name="age" class="form-control" id="exampleSelect2">
        <option value="under16">under 16</option>
        <option value="16To24">16-24</option>
        <option value="25To39">25-39</option>
        <option value="40To59">40-59</option>
        <option value="60Plus">60+</option>
      </select>
    </div>
    <fieldset class="form-group">
		<legend>Do you wish to be added to our mailing list?</legend>
			<div class="radio">
			  <label><input name="radio" type="radio" name="optradio" value="Y" checked>Yes please</label>
			  <label><input name="radio" type="radio" name="optradio" value="N">No thanks</label>
			</div>
    </fieldset>
    <button type="submit" class="btn btn-primary">Register</button>
  </fieldset>
</form>

	<?php include_once "Footer.php"?>
	</div>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="UserAjax.js"></script>
	<script src="EmailAjax.js"></script>


</body>

</html>                                                           
              