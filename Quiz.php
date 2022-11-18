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
	<title>Quiz</title>
	
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
			
				<p class="question">I systematically acquire information about the changes taking place in my professional field</p>
				<label for="no">Completely disagree</label>
				<input type="range" name="question1" class="form-range" step="25">
				<label for="yes">Completely agree</label>
		</div>
		<div class= "card-body category1">
			
				<p class="card-text">I take into account the feedback I receive in guiding learning in the workplace</p>
				<label for="no">Completely disagree</label>
				<input type="range" name="question2" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
		<div class= "card-body category1">
			
				<p class="card-text">I have a comprehensive knowledge of the skills needs of my profession</p>
				<label for="no">Completely disagree</label>
				<input type="range" name="question3" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
		<div class= "card-body category2">
			
				<p class="card-text">I am well aware of the future of my profession and the skills that will be associated with it in the future</p>
				<label for="no">Completely disagree</label>
				<input type="range" name="question4" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
		<div class= "card-body category2">
			
				<p class="card-text">My own role as a learning ambassador is clear to me</p>
				<label for="no">Completely disagree</label>
				<input type="range" name="question5" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
		<div class= "card-body category2">
			
				<p class="card-text">I can evaluate and reflect on my own supervision</p>
				<label for="no">Completely disagree</label>
				<input type="range" name="question6" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
		<div class= "card-body category3">
			
				<p class="card-text">I can evaluate a student's professional (substantive) skills and so-called soft skills as well</p>
				<label for="no">Completely disagree</label>
				<input type="range" name="question7" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
		<div class= "card-body category3">
			
				<p class="card-text">I regularly update my own competence development plan</p>
				<label for="no">Completely disagree</label>
				<input type="range" name="question8" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
		<div class= "card-body category3">
			
				<p class="card-text">I regularly discuss with my supervisor about developing my own skills</p>
				<label for="no">Completely disagree</label>
				<input type="range" name="question9" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
		<div class= "card-body category3">
			
				<p class="card-text">I collaborate with workplaces in a way that develops my ability to act as a Learning Ambassador</p>
				<label for="no">Completely disagree</label>
				<input type="range" name="question10" class="form-range" step="25">
				<label for="yes">Completely agree</label>
			
		</div>
<!-- Button trigger modal -->
<div class="text-right">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#submitModal">
  Submit
</button>

<!-- Modal -->
<div class="modal fade" id="submitModal" tabindex="-1" role="dialog" aria-labelledby="submitModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="submitModal">Your points</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        placeholder
      </div>
      <div class="modal-footer">
	  	<a class="btn btn-primary" href="quiz2.php" role="button">Next Page</a>
      </div>
    </div>
  </div>
</div>
</div>

</div>
</form>
</div>
</div>

</body>
</html>