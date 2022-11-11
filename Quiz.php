<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Quiz</title>
	<style>
    body{
        padding-top: 100px;
        padding-bottom: 100px;
    }
	
	.category1{
		border-radius: 20px;
		border-style:solid;
		border-color:lightblue;
	}
	
	.category2{
		border-radius: 20px;
		border-style:solid;
		border-color:lightgreen;
	}
	
	.category3{
		border-radius: 20px;
		border-style:solid;
		border-color:orange;
	}
	</style>
</head>
<body>
<?php
 
 ?>
	<!-- Navigointi palkki sivun yläosassa jossa Techvet logo -->
	<nav class="navbar fixed-top navbar-dark bg-primary">
	 <a class="navbar-brand" href="#"><img src="NextSteps_at_TechVET_logo.png" width="100" class="d-inline-block align-top" alt=""></a>
	</nav>
	
	<!-- Navigointi palkki pohjalla jossa Erasmus logo -->
	<nav class="navbar fixed-bottom navbar-dark bg-primary">
	 <a class="navbar-brand" href="#"><img src="logosbeneficaireserasmusleft_en_0.jpg" width="200" class="d-inline-block align-top" alt=""></a>
	</nav>
	
	<div class="container">
	
		<div class="card">
		<form action="#">
		<div class= "card-body category1">
			
				<p class="question">Are you okay?</p>
				<label for="no">Completely disagree</label>
				<input type="range" name="question1" class="form-range" step="25">
				<label for="yes">Completely agree</label>
		</div>
		<div class= "card-body category1">
			
				<p class="card-text">Are you good?</p>
				
				<label for="no">Completely disagree</label>
				<input type="range" name="question2" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
		<div class= "card-body category1">
			
				<p class="card-text">Are you good?</p>
				
				<label for="no">Completely disagree</label>
				<input type="range" name="question3" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
		<div class= "card-body category1">
			
				<p class="card-text">Are you good?</p>
				
				<label for="no">Completely disagree</label>
				<input type="range" name="question4" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
		<div class= "card-body category2">
			
				<p class="card-text">Are you good?</p>
				
				<label for="no">Completely disagree</label>
				<input type="range" name="question5" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
		<div class= "card-body category2">
			
				<p class="card-text">Are you good?</p>
				
				<label for="no">Completely disagree</label>
				<input type="range" name="question6" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
		<div class= "card-body category2">
			
				<p class="card-text">Are you good?</p>
				
				<label for="no">Completely disagree</label>
				<input type="range" name="question7" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
		<div class= "card-body category2">
			
				<p class="card-text">Are you good?</p>
				
				<label for="no">Completely disagree</label>
				<input type="range" name="question8" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
		<div class= "card-body category3">
			
				<p class="card-text">Are you good?</p>
				
				<label for="no">Completely disagree</label>
				<input type="range" name="question9" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
		<div class= "card-body category3">
			
				<p class="card-text">Are you good?</p>
				
				<label for="no">Completely disagree</label>
				<input type="range" name="question10" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
		<div class= "card-body category3">
			
				<p class="card-text">Are you good?</p>
				
				<label for="no">Completely disagree</label>
				<input type="range" name="question11" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
		</form>	
		</div>
	
	</div>
	

	
</body>
</html>