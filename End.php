<?php
session_start();
include "Config.php";
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
$str_json = file_get_contents('php://input');

$str = str_replace("quiz=", "", $str_json);
$firstarray = explode("&", $str);
//var_dump($firstarray);

for($i = 0; $i < count($firstarray); $i++)
{
	if($firstarray[$i] == 0)
	{
		$firstarray[$i] = 1;
	}
	elseif($firstarray[$i] == 25)
	{
		$firstarray[$i] = 2;
	}
	elseif($firstarray[$i] == 75)
	{
		$firstarray[$i] = 3;
	}
	elseif($firstarray[$i] == 100)
	{
		$firstarray[$i] = 4;
	}
	elseif($firstarray[$i] == 50)
	{
		$firstarray[$i] = 0;
	}
}

$q4_1 = intval($firstarray[0]);
$q4_2 = intval($firstarray[1]);
$q4_3 = intval($firstarray[2]);
$q4_4 = intval($firstarray[3]);
$q4_5 = intval($firstarray[4]);
$q4_6 = intval($firstarray[5]);
$q4_7 = intval($firstarray[6]);
$q4_8 = intval($firstarray[7]);
$q4_9 = intval($firstarray[8]);
$q4_10 = intval($firstarray[9]);

$q1_1 = $_SESSION["s1_1"];
$q1_2 = $_SESSION["s1_2"];
$q1_3 = $_SESSION["s1_3"];
$q1_4 = $_SESSION["s1_4"];
$q1_5 = $_SESSION["s1_5"];
$q1_6 = $_SESSION["s1_6"];
$q1_7 = $_SESSION["s1_7"];
$q1_8 = $_SESSION["s1_8"];
$q1_9 = $_SESSION["s1_9"];
$q1_10 = $_SESSION["s1_10"];

$q2_1 = $_SESSION["s2_1"];
$q2_2 = $_SESSION["s2_2"];
$q2_3 = $_SESSION["s2_3"];
$q2_4 = $_SESSION["s2_4"];
$q2_5 = $_SESSION["s2_5"];
$q2_6 = $_SESSION["s2_6"];
$q2_7 = $_SESSION["s2_7"];
$q2_8 = $_SESSION["s2_8"];
$q2_9 = $_SESSION["s2_9"];
$q2_10 = $_SESSION["s2_10"];

$q3_1 = $_SESSION["s3_1"];
$q3_2 = $_SESSION["s3_2"];
$q3_3 = $_SESSION["s3_3"];
$q3_4 = $_SESSION["s3_4"];
$q3_5 = $_SESSION["s3_5"];
$q3_6 = $_SESSION["s3_6"];
$q3_7 = $_SESSION["s3_7"];
$q3_8 = $_SESSION["s3_8"];
$q3_9 = $_SESSION["s3_9"];
$q3_10 = $_SESSION["s3_10"];

$sql = "INSERT INTO category1 (Score1, Score2, Score3, Score4, Score5, Score6, Score7 ,Score8, Score9, Score10)
 VALUES ('$q1_1', '$q1_2', '$q1_3', '$q1_4', '$q1_5', '$q1_6', '$q1_7', '$q1_8', '$q1_9', '$q1_10');";
 
 $sql .= "INSERT INTO category2 (Score1, Score2, Score3, Score4, Score5, Score6, Score7 ,Score8, Score9, Score10)
 VALUES ('$q2_1', '$q2_2', '$q2_3', '$q2_4', '$q2_5', '$q2_6', '$q2_7', '$q2_8', '$q2_9', '$q2_10');";
 
 $sql .= "INSERT INTO category3 (Score1, Score2, Score3, Score4, Score5, Score6, Score7 ,Score8, Score9, Score10)
 VALUES ('$q3_1', '$q3_2', '$q3_3', '$q3_4', '$q3_5', '$q3_6', '$q3_7', '$q3_8', '$q3_9', '$q3_10');";
 
 $sql .= "INSERT INTO category4 (Score1, Score2, Score3, Score4, Score5, Score6, Score7 ,Score8, Score9, Score10)
 VALUES ('$q4_1', '$q4_2', '$q4_3', '$q4_4', '$q4_5', '$q4_6', '$q4_7', '$q4_8', '$q4_9', '$q4_10');";
 
// echo $sql;
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
	 <a class="navbar-brand" href="StartPage.php"><img src="NextSteps_at_TechVET_logo.png" width="100" class="d-inline-block align-top" alt=""></a>
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
            <p id="valiPalaute">Place holder for text which tells user that can he or she go forward to learning ambassador test</p>
        </div>
        <div class="row">
            <div class="col-xl-2 col-6  d-flex justify-content-center" id="casve1">Place holder for text which tells user that can he or she go forward to learning ambassador test</div>
            <div class="col-xl-2 col-6 d-flex justify-content-center" id="casve2">Place holder for text which tells user that can he or she go forward to learning ambassador test</div>
            <div class="col-xl-2 col-6 d-flex justify-content-center" id="casve3">Place holder for text which tells user that can he or she go forward to learning ambassador test</div>
            <div class="col-xl-2 col-6 d-flex justify-content-center" id="casve4">Place holder for text which tells user that can he or she go forward to learning ambassador test</div>
            <div class="col-xl-2 col-6 d-flex justify-content-center" id="casve5">Place holder for text which tells user that can he or she go forward to learning ambassador test</div>
        </div>
        <div class="row mt-3">
        <div class="col-xl-6 col-12">
        <div class="row">
            <div class="col-6 d-flex justify-content-center">
                <p>My working life orientation is strong</p>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <p>My school life orientation is strong</p>
            </div>
        </div>
            <canvas id="myChart"></canvas>
            <div class="row">
            <div class="col-6 d-flex justify-content-center">
                <p>Teacher who have long career from working in workplace</p>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <p>Teacher who have long career from working in school</p>
            </div>
        </div>
        </div>

        
        <div class="col-xl-6 col-12">
            <canvas id="myChart2"></canvas>
        </div>
        </div>
	</div>
    <script>
        const ctx = document.getElementById('myChart');
        const ctx2 = document.getElementById('myChart2');
        var workingTotal = 0;
        workingTotal -= parseInt(sessionStorage.getItem("Total1")) + parseInt(sessionStorage.getItem("Total2"));
        var schoolTotal = parseInt(sessionStorage.getItem("Total3")) + parseInt(sessionStorage.getItem("Total4"));

        let numero1 = workingTotal + schoolTotal;
        var category1 = sessionStorage.getItem("All1");
        var category2 = sessionStorage.getItem("All2");
        var category3 = sessionStorage.getItem("All3");
        var category4 = sessionStorage.getItem("All4");
        
        let score1 ='<?php echo ($q1_1+$q1_2+ $q2_1 + $q2_2 + $q3_1 + $q3_2 + $q4_1 + $q4_2);?>';
    let score2 ='<?php echo ($q1_3 + $q1_4 + $q2_3 + $q2_4 + $q3_3 + $q3_4 + $q4_3 + $q4_4);?>';
    let score3 ='<?php echo ($q1_5 + $q1_6 + $q2_5 + $q2_6 + $q3_5 + $q3_6 + $q4_5 + $q4_6);?>';
    let score4 ='<?php echo ($q1_7 + $q1_8 + $q2_7 + $q2_8 + $q3_7 + $q3_8 + $q4_7 + $q4_8);?>';
    let score5 ='<?php echo ($q1_9 + $q1_10 + $q2_9 + $q2_10 + $q3_9 + $q3_10 + $q4_9 + $q4_10);?>';

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
            new Chart(ctx2, {
                type: 'radar',
                data:  {
                    labels: [
                        'Communication',
                        'Analysis',
                        'Synthesis',
                        'Valuing',
                        'Executing',
                         ],
                    datasets:[{
                        label: 'Average CASVE scores',
                        data: [score1, score2, score3, score4, score5],
                        fill: true,
                        backgroundColor: 'rgb(255, 99, 132)'
                    }]
                } ,
                options: {
                    responsive: true

                }
            });
</script>
<script>
    function finalScore(){
        totalScore = sessionStorage.getItem("FullScore");
        document.getElementById('result').innerHTML =
                              totalScore;
}
    finalScore();
</script>
<script>
function finalResult()
{
    var number = (sessionStorage.getItem("FullScore"))
    var palaute = ''
    if (number <=160) {
            palaute = 'Final1'
    } if (number <=120){
            palaute = 'Final2 '
    } if (number <=80){
            palaute = 'Final3'
        }
        document.getElementById('valiPalaute').innerHTML =
        "Feedback: "+ palaute;
};
finalResult();
</script>
<script>
function casveScore()
{
    let score1 ='<?php echo ($q1_1+$q1_2+ $q2_1 + $q2_2 + $q3_1 + $q3_2 + $q4_1 + $q4_2);?>';
    let score2 ='<?php echo ($q1_3 + $q1_4 + $q2_3 + $q2_4 + $q3_3 + $q3_4 + $q4_3 + $q4_4);?>';
    let score3 ='<?php echo ($q1_5 + $q1_6 + $q2_5 + $q2_6 + $q3_5 + $q3_6 + $q4_5 + $q4_6);?>';
    let score4 ='<?php echo ($q1_7 + $q1_8 + $q2_7 + $q2_8 + $q3_7 + $q3_8 + $q4_7 + $q4_8);?>';
    let score5 ='<?php echo ($q1_9 + $q1_10 + $q2_9 + $q2_10 + $q3_9 + $q3_10 + $q4_9 + $q4_10);?>';

    document.getElementById('casve1').innerHTML =
        "Communication: "+ score1 + "   ";
    document.getElementById('casve2').innerHTML =
        "Analysis: "+ score2 + "   ";
    document.getElementById('casve3').innerHTML =
        "Synthesis: "+ score3+ "   ";
    document.getElementById('casve4').innerHTML =
        "Valuing: "+ score4+ "   ";
    document.getElementById('casve5').innerHTML =
        "Execution: "+ score5+ "   ";
};
casveScore();
</script>
</body>
</html>
