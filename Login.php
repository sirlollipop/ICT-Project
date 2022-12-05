<?php
	include("config.php");
   session_start();
   if (!empty($_SESSION["myusername"])) {
		header("location: Welcome.php");
	}
   $error = "";
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	// username and password sent from form 
		$username = $_POST['loginUsername'];
		$password = $_POST['loginPassword'];
		
		
		if($username != "") {
			$myusername = mysqli_real_escape_string($db,$username);
			$mypassword = mysqli_real_escape_string($db,$password); 
		  
			$sql = "SELECT id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
			$result = mysqli_query($db,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		  
			$count = mysqli_num_rows($result);
			  
			// If result matched $myusername and $mypassword, table row must be 1 row
			
			if($count == 1) {
				$_SESSION['myusername'] = $myusername;
			 
				header("location: Welcome.php");
			}else {
				$error = "Your Login Name or Password is invalid";
				
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<title>Quiz</title>
	
</head>

<body>
	<!-- Navigointi palkki sivun yläosassa jossa Techvet logo -->
	<nav class="navbar fixed-top navbar-dark bg-primary">
	 <a class="navbar-brand" href="quiz.php"><img src="NextSteps_at_TechVET_logo.png" width="100" class="d-inline-block align-top" alt=""></a>
	</nav>
	
	<!-- Navigointi palkki pohjalla jossa Erasmus logo -->
	<nav class="navbar fixed-bottom navbar-dark bg-primary justify-content-between">
	 <a class="navbar-brand" href="#"><img src="logosbeneficaireserasmusleft_en_0.jpg" width="200" class="d-inline-block align-top" alt=""></a>
	 <a id="loginlink" href="Login.php" style="color:black;">Admin login</a>
	</nav>
	
	<div class="container">
		<h1> Admin Login </h1>
		<form method="post">
		  <!-- Email input -->
		  <span class="error"><?php echo $error; ?></span>
		  <div class="form-outline mb-4">
			<input type="text" name="loginUsername" class="form-control" required />
			<label class="form-label" for="loginUsername">Username</label>
		  </div>

		  <!-- Password input -->
		  <div class="form-outline mb-4">
			<input type="password" name="loginPassword" class="form-control" required />
			<label class="form-label" for="loginPassword">Password</label>
		  </div>


		  <!-- Submit button -->
		  <input type="submit" class="btn btn-primary btn-block mb-4" value="Login">
		</form>
	</div>
</body>
</html>