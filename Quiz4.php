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
	<nav class="navbar fixed-bottom navbar-dark bg-primary justify-content-between">
	 <a class="navbar-brand" href="#"><img src="logosbeneficaireserasmusleft_en_0.jpg" width="200" class="d-inline-block align-top" alt=""></a>
	 <a id="loginlink" href="Login.php" style="color:black;">Admin login</a>
	</nav>
	
	<div class="container">
	

		<div class="progress" style="background-color:lightgray !important;">
			<div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
		</div>
	


		<div class="card text-center border-0">
	  <form name="form" action="#">
		<h5 class="card-header border-0">Guidance and collaboration in different environments</h5>

		<div class= "card-body category1">
			
				<p class="card-text">I regularly discuss about student guidance with my colleagues</p>
				<label for="no">Completely disagree</label>

				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range"  step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>
				<lable for="checkbox1"> Does not concern </label>
				    <input type="checkbox" id="checkbox1" name="NoConcern" value="true"> 
		</div>
		<div class= "card-body category1">
			
				<p class="card-text">The career guidance I do is based on the educational guidance plan of the educational institution</p>
				<label for="no">Completely disagree</label>
				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range"  step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>
				<lable for="checkbox2"> Does not concern </label>
				    <input type="checkbox" id="checkbox2" name="NoConcern" value="true"> 
		</div>
		<div class= "card-body category1">
			
				<p class="card-text">I recognize a student’s learning difficulties and know how to take them into account</p>
				<label for="no">Completely disagree</label>

				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range"  step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>
				<lable for="checkbox3"> Does not concern </label>
				    <input type="checkbox" id="checkbox3" name="NoConcern" value="true"> 
		</div>
		<div class= "card-body category2">
			
				<p class="card-text">I can help companies with the continuous learning of their staff in working life</p>
				<label for="no">Completely disagree</label>

				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range"  step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>
				<lable for="checkbox4"> Does not concern </label>
				    <input type="checkbox" id="checkbox4" name="NoConcern" value="true"> 
		</div>
		<div class= "card-body category2">
			
				<p class="card-text">I know what kind of feedback students have given about the career guidance they have received during their studies</p>
				<label for="no">Completely disagree</label>

				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range"  step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>
				<lable for="checkbox5"> Does not concern </label>
				    <input type="checkbox" id="checkbox5" name="NoConcern" value="true"> 
		</div>
		<div class= "card-body category2">
			
				<p class="card-text">I can guide my colleagues and workplace trainers in working with a student</p>
				<label for="no">Completely disagree</label>

				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range"  step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>
				<lable for="checkbox6"> Does not concern </label>
				    <input type="checkbox" id="checkbox6" name="NoConcern" value="true"> 
		</div>
		<div class= "card-body category3">
			
				<p class="card-text">I encourage students to communicate their career goals to workplace trainers</p>
				<label for="no">Completely disagree</label>

				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range"  step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>
				<lable for="checkbox7"> Does not concern </label>
				    <input type="checkbox" id="checkbox7" name="NoConcern" value="true"> 
		</div>
		<div class= "card-body category3">
			
				<p class="card-text">I know the ethical principles of guidance and I act according to them</p>
				<label for="no">Completely disagree</label>

				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range"  step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>
				<lable for="checkbox8"> Does not concern </label>
				    <input type="checkbox" id="checkbox8" name="NoConcern" value="true"> 
		</div>
		<div class= "card-body category3">
			
				<p class="card-text">I have a clear plan for maintaining and developing my guidance skills</p>
				<label for="no">Completely disagree</label>

				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range"  step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>
				<lable for="checkbox9"> Does not concern </label>
				    <input type="checkbox" id="checkbox9" name="NoConcern" value="true"> 
		</div>
		<div class= "card-body category3">
			
				<p class="card-text">I regularly organize career guidance for my students</p>
				<label for="no">Completely disagree</label>

				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range"  step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>
				<lable for="checkbox10"> Does not concern </label>
				    <input type="checkbox" id="checkbox10" name="NoConcern" value="true"> 
		</div>
<!-- Button trigger modal -->
<div class="text-right">
<button type="button" id="calculate" class="btn btn-primary" data-toggle="modal" data-target="#submitModal">
  Submit
</button>

<!-- Modal -->
<div class="modal fade" id="submitModal" tabindex="-1" role="dialog" aria-labelledby="submitModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
	  <h5 class="modal-title" id="result">Your points</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        placeholder
      </div>
      <div class="modal-footer">
	  	<a class="btn btn-primary" href="End.php" role="button">Chart</a>
      </div>
    </div>
  </div>
</div>
</div>

</div>
		</form>	
		</div>
	</div>
	<script src="calculator.js"></script>
</body>
</html>