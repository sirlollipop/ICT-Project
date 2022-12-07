<?php
$str_json = file_get_contents('php://input');

//echo $str_json;

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
	<title>Quiz</title>
	
</head>
<body>
<script>
	sessionStorage.setItem("sivu", 2);
</script>
	<!-- Navigointi palkki sivun yläosassa jossa Techvet logo -->
	<nav class="navbar fixed-top navbar-dark bg-primary">
	 <a class="navbar-brand" href="StartPage.php"><img src="NextSteps_at_TechVET_logo.png" width="100" class="d-inline-block align-top" alt=""></a>
	</nav>
	
	<!-- Navigointi palkki pohjalla jossa Erasmus logo -->
	<nav class="navbar fixed-bottom navbar-dark bg-primary justify-content-between">
	 <a class="navbar-brand" href="#"><img src="logosbeneficaireserasmusleft_en_0.jpg" width="200" class="d-inline-block align-top" alt=""></a>
	 <a id="loginlink" href="Login.php" style="color:black;">Admin login</a>
	</nav>
	
	<div class="container">

		<div class="progress" style="background-color:lightgray !important;">
			<div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
		</div>
	

		<div class="card text-center border-0">
		<form name="form" action="Quiz3.php" method="POST">
    <h5 class="card-header border-0">Future skill needs and learning possibilities in companies</h5>

		<div class= "card-body category1">
			
				<p class="card-text">I know the competence needs of companies in my field in my area of operation</p>
				<label for="no">Completely disagree</label>

				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range"  step="25">
				<br class='d-md-none'/>
				<label for="yes">Completely agree</label>                
				<br>

				<label for="checkbox1"> Does not concern </label>

				    <input type="checkbox" id="checkbox1" name="NoConcern" value="true"> 
		</div>
		<div class= "card-body category1">
			
				<p class="card-text">I know what companies expect from working with educational institutions</p>
				<label for="no">Completely disagree</label>

				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range"  step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>

				<label for="checkbox2"> Does not concern </label>

				    <input type="checkbox" id="checkbox2" name="NoConcern" value="true"> 
			
		</div>
		<div class= "card-body category2">
			
				<p class="card-text">I know which companies offer quality on-the-job training places</p>
				<label for="no">Completely disagree</label>

				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range"  step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>

				<label for="checkbox3"> Does not concern </label>

				    <input type="checkbox" id="checkbox3" name="NoConcern" value="true"> 
		</div>
		<div class= "card-body category2">
			
				<p class="card-text">I have a system for mapping new on-the-job learning places</p>
				<label for="no">Completely disagree</label>

				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range" step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>

				<label for="checkbox4"> Does not concern </label>

				    <input type="checkbox" id="checkbox4" name="NoConcern" value="true"> 
		</div>
		<div class= "card-body category3">
			
				<p class="card-text">I can encourage jobs to see students as the future and to see the importance of workplace learning for the company</p>
				<label for="no">Completely disagree</label>
				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range" step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>

				<label for="checkbox5"> Does not concern </label>

				    <input type="checkbox" id="checkbox5" name="NoConcern" value="true"> 
		</div>
		<div class= "card-body category3">
			
				<p class="card-text">I seek to find new ways to guide learning in the workplace and to include it in the discussion in the workplace</p>
				<label for="no">Completely disagree</label>
				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range"  step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>

				<label for="checkbox6"> Does not concern </label>

				    <input type="checkbox" id="checkbox6" name="NoConcern" value="true"> 
		</div>
		<div class= "card-body category4">
			
				<p class="card-text">I know where my students who have graduated in the last three years are working or studying</p>
				<label for="no">Completely disagree</label>

				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range" step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>

				<label for="checkbox7"> Does not concern </label>

				    <input type="checkbox" id="checkbox7" name="NoConcern" value="true"> 
		</div>
		<div class= "card-body category4">
			
				<p class="card-text">I take into account the requirements of the world of work for each student</p>
				<label for="no">Completely disagree</label>

				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range" step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>

				<label for="checkbox8"> Does not concern </label>

				    <input type="checkbox" id="checkbox8" name="NoConcern" value="true"> 
		</div>
		<div class= "card-body category5">
			
				<p class="card-text">I create goals for on-the-job learning together with the student</p>
				<label for="no">Completely disagree</label>

				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range" step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>

				<label for="checkbox9"> Does not concern </label>

				    <input type="checkbox" id="checkbox9" name="NoConcern" value="true"> 
		</div>
		<div class= "card-body category5">
			
				<p class="card-text">I am well qualified to train workplace trainers</p>
				<label for="no">Completely disagree</label>
				<br class='d-md-none'/>
				<input type="range" name="quiz" class="form-range" step="25">
				<br class='d-md-none'/>

				<label for="yes">Completely agree</label>
				<br>

				<label for="checkbox10"> Does not concern </label>

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

      <div class="modal-body text-left">
	  <h5 class="modal-title">Feedback</h5>
	  <div class="modal-body" id="valiPalaute">feedback:</div>
      </div>
      <div class="modal-footer">

	  	<button type="submit" class="btn btn-primary" href="Quiz3.php" role="button">Next Page</button>

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