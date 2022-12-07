
<?php
session_start();
?>
<?php
include "Config.php";
$str_json = file_get_contents('php://input');

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
	 <a class="navbar-brand" href="#"><img src="NextSteps_at_TechVET_logo.png" width="100" class="d-inline-block align-top" alt=""></a>
	</nav>
	
	<!-- Navigointi palkki pohjalla jossa Erasmus logo -->
	<nav class="navbar fixed-bottom navbar-dark bg-primary justify-content-between">
	 <a class="navbar-brand" href="#"><img src="logosbeneficaireserasmusleft_en_0.jpg" width="200" class="d-inline-block align-top" alt=""></a>
	 <a id="loginlink" href="Login.php" style="color:black;">Admin login</a>
	</nav>
	
<div class="container">
	
		<div class="progress" style="background-color:lightgray !important;">
			<div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
		</div>
	
        <div class="col-12 d-flex justify-content-center">
            <h2>Result</h2>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <h3>Final Score:&nbsp;</h3>
            <h3 id="result"></h3>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <p>Place holder for text which tells user that can he or she go forward to learning ambassador test</p>
        </div>
        <div class="row">
            <div class="col-6 d-flex justify-content-center">
                <p>My working life orientation is strong</p>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <p>My school life orientation is strong</p>
            </div>
        </div>
        <div class="col- d-flex justify-content-center">
            <canvas id="myChart"></canvas>
        </div>
        <div class="row">
            <div class="col-6 d-flex justify-content-center">
                <p>Teacher who has had a long career working in private enterprises</p>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <p>Teacher who has had a long career working in schools</p>
            </div>
        </div>
	</div>
    <script>
        const ctx = document.getElementById('myChart');
        var workingTotal = 0;
        workingTotal -= parseInt(sessionStorage.getItem("Total1")) + parseInt(sessionStorage.getItem("Total2"));
        var schoolTotal = parseInt(sessionStorage.getItem("Total3")) + parseInt(sessionStorage.getItem("Total4"));

        let numero1 = workingTotal + schoolTotal;
        var category1 = sessionStorage.getItem("All1");
        var category2 = sessionStorage.getItem("All2");
        var category3 = sessionStorage.getItem("All3");
        var category4 = sessionStorage.getItem("All4");

        var question1_1 = parseInt(category1[0]);
        var question1_2 = parseInt(category1[1]);
        var question1_3 = parseInt(category1[2]);
        var question1_4 = parseInt(category1[3]);
        var question1_5 = parseInt(category1[4]);
        var question1_6 = parseInt(category1[5]);
        var question1_7 = parseInt(category1[6]);
        var question1_8 = parseInt(category1[7]);
        var question1_9 = parseInt(category1[8]);
        var question1_10 = parseInt(category1[9]);

        var question2_1 = parseInt(category2[0]);
        var question2_2 = parseInt(category2[1]);
        var question2_3 = parseInt(category2[2]);
        var question2_4 = parseInt(category2[3]);
        var question2_5 = parseInt(category2[4]);
        var question2_6 = parseInt(category2[5]);
        var question2_7 = parseInt(category2[6]);
        var question2_8 = parseInt(category2[7]);
        var question2_9 = parseInt(category2[8]);
        var question2_10 = parseInt(category2[9]);
        
        var question3_1 = parseInt(category3[0]);
        var question3_2 = parseInt(category3[1]);
        var question3_3 = parseInt(category3[2]);
        var question3_4 = parseInt(category3[3]);
        var question3_5 = parseInt(category3[4]);
        var question3_6 = parseInt(category3[5]);
        var question3_7 = parseInt(category3[6]);
        var question3_8 = parseInt(category3[7]);
        var question3_9 = parseInt(category3[8]);
        var question3_10 = parseInt(category3[9]);

        var question4_1 = parseInt(category4[0]);
        var question4_2 = parseInt(category4[1]);
        var question4_3 = parseInt(category4[2]);
        var question4_4 = parseInt(category4[3]);
        var question4_5 = parseInt(category4[4]);
        var question4_6 = parseInt(category4[5]);
        var question4_7 = parseInt(category4[6]);
        var question4_8 = parseInt(category4[7]);
        var question4_9 = parseInt(category4[8]);
        var question4_10 = parseInt(category4[9]);
        

        let numero2 = parseInt(sessionStorage.getItem("FullScore"));



            new Chart(ctx, {
                type: 'scatter',
                data: {
                datasets: [{
                    label: 'Result',
                    data: [{x: numero1, y: numero2}],
                    backgroundColor: 'rgb(255, 99, 132)'
                    
                }]
                },
                options: {
                    responsive: true,
                    elements:{
                        line: {
                        backgroundColor: "red",
                        borderWidth: 4,
                    },
                    },
                    scales: {
                y: {
                    ticks: {
                        display: false,
                    },
                    grid: {
                        color: (context) => {
                            if(context.tick.value == 0){
                                return "black";
                            }
                            else{
                                return "rgb(179, 179, 179)";
                            }
                        }
                        
                        
                    },
 
                    position:"center",
                    min: 0,
                    max: 161,
                    
                    },
                x: {
                    ticks: {
                        display: false,
                    },
                    grid: {
                        color: (context) => {
                            if(context.tick.value == 0){
                                return "black";
                            }
                            else{
                                return "rgb(102, 204, 255)";
                            }
                        }
                        
                        
                    },
                    
                    min: -100,
                    max: 100,
                    
                    }
                }
                
            }
            }
            );
</script>
<script>
    function finalScore(){
        totalScore = sessionStorage.getItem("FullScore");
        document.getElementById('result').innerHTML =
                              totalScore;
}
    finalScore();
</script>

</body>
</html>