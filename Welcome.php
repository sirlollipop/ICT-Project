
<?php
session_start();
?>
<?php
if (empty($_SESSION["myusername"])) {
    header("location: Login.php");
}
include("config.php");

$conn = $db;

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT quizid, score1 FROM category1";	
$result =mysqli_query($conn, $sql);

$user_num = "SELECT MAX(quizid) FROM category1";
$user_result =mysqli_query($conn, $user_num);

$avg_xy = "SELECT AVG(score1), AVG(score2), AVG(score3), AVG(score4), AVG(score5), AVG(score6), AVG(score7), AVG(score8), AVG(score9), AVG(score10) FROM category1";
$avg_result =mysqli_query($conn, $avg_xy);

$avg_xy2 = "SELECT AVG(score1), AVG(score2), AVG(score3), AVG(score4), AVG(score5), AVG(score6), AVG(score7), AVG(score8), AVG(score9), AVG(score10) FROM category2";
$avg_result2 =mysqli_query($conn, $avg_xy2);

$avg_xy3 = "SELECT AVG(score1), AVG(score2), AVG(score3), AVG(score4), AVG(score5), AVG(score6), AVG(score7), AVG(score8), AVG(score9), AVG(score10) FROM category3";
$avg_result3 =mysqli_query($conn, $avg_xy3);

$avg_xy4 = "SELECT AVG(score1), AVG(score2), AVG(score3), AVG(score4), AVG(score5), AVG(score6), AVG(score7), AVG(score8), AVG(score9), AVG(score10) FROM category4";
$avg_result4 =mysqli_query($conn, $avg_xy4);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"]. " - X: " . $row["score1"]. " Y: " . $row["score2"]. "<br>";
  }
  while($row = $user_result->fetch_assoc()) {
	
    echo "This quiz has been answered " . $row['MAX(quizid)']. " times";
    }
} else {
  echo "0 results";
}

$conn->close();
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
	 <a class="navbar-brand" href="Quiz.php"><img src="NextSteps_at_TechVET_logo.png" width="100" class="d-inline-block align-top" alt=""></a>
	</nav>
	
	<!-- Navigointi palkki pohjalla jossa Erasmus logo -->
	<nav class="navbar fixed-bottom navbar-dark bg-primary">
	 <a class="navbar-brand" href="#"><img src="logosbeneficaireserasmusleft_en_0.jpg" width="200" class="d-inline-block align-top" alt=""></a>
	 <a id="loginlink" href="Logout.php" style="color:black;">Logout</a>
	</nav>
	
	<div class="container">
	  <div class="col-12 d-flex justify-content-center">
            <h2>Average results</h2>
        </div>
		<?php
		while($row = $avg_result->fetch_assoc()) {
			 //echo "Average score: "  . $row["AVG(score)"];
			$score1_1 = $row["AVG(score1)"];
			$score1_2 = $row["AVG(score2)"];
			$score1_3 = $row["AVG(score3)"];
			$score1_4 = $row["AVG(score4)"];
			$score1_5 = $row["AVG(score5)"];
			$score1_6 = $row["AVG(score6)"];
			$score1_7 = $row["AVG(score7)"];
			$score1_8 = $row["AVG(score8)"];
			$score1_9 = $row["AVG(score9)"];
			$score1_10 = $row["AVG(score10)"];

			echo "<table class='table'> <tr>";
			echo " <th>Category</th>";
			echo " <th>Communication</th>";
			echo " <th>Analysis</th>";
			echo " <th>Synthesis</th>";
			echo " <th>Valuing</th>";
			echo " <th>Execution</th>";
			echo "</tr>";
			echo "<tr><td> Substance </td>";
			echo "<td>" . $score1_1 + $score1_2 . "</td>";
			echo "<td>" . $score1_3 + $score1_4 . "</td>";
			echo "<td>" . $score1_5 + $score1_6 . "</td>";
			echo "<td>" . $score1_7 + $score1_8 . "</td>";
			echo "<td>" . $score1_9 + $score1_10 . "</td> </tr>";
			
			$_SESSION["Score1"] = $row["AVG(score1)"];
			$_SESSION["Score2"] = $row["AVG(score2)"]; 

		}
		
		while($row = $avg_result2->fetch_assoc()) {
			 //echo "Average score: "  . $row["AVG(score)"];
			$score2_1 = $row["AVG(score1)"];
			$score2_2 = $row["AVG(score2)"];
			$score2_3 = $row["AVG(score3)"];
			$score2_4 = $row["AVG(score4)"];
			$score2_5 = $row["AVG(score5)"];
			$score2_6 = $row["AVG(score6)"];
			$score2_7 = $row["AVG(score7)"];
			$score2_8 = $row["AVG(score8)"];
			$score2_9 = $row["AVG(score9)"];
			$score2_10 = $row["AVG(score10)"];

			echo "<tr><td> Future </td>";
			echo "<td>" . $score2_1 + $score2_2 . "</td>";
			echo "<td>" . $score2_3 + $score2_4 . "</td>";
			echo "<td>" . $score2_5 + $score2_6 . "</td>";
			echo "<td>" . $score2_7 + $score2_8 . "</td>";
			echo "<td>" . $score2_9 + $score2_10 . "</td> </tr>";
			
			$_SESSION["Score1"] = $row["AVG(score1)"];
			$_SESSION["Score2"] = $row["AVG(score2)"]; 

		}
		
		while($row = $avg_result3->fetch_assoc()) {
			 //echo "Average score: "  . $row["AVG(score)"];
			$score3_1 = $row["AVG(score1)"];
			$score3_2 = $row["AVG(score2)"];
			$score3_3 = $row["AVG(score3)"];
			$score3_4 = $row["AVG(score4)"];
			$score3_5 = $row["AVG(score5)"];
			$score3_6 = $row["AVG(score6)"];
			$score3_7 = $row["AVG(score7)"];
			$score3_8 = $row["AVG(score8)"];
			$score3_9 = $row["AVG(score9)"];
			$score3_10 = $row["AVG(score10)"];

			echo "<tr><td> Studification </td>";
			echo "<td>" . $score3_1 + $score3_2 . "</td>";
			echo "<td>" . $score3_3 + $score3_4 . "</td>";
			echo "<td>" . $score3_5 + $score3_6 . "</td>";
			echo "<td>" . $score3_7 + $score3_8 . "</td>";
			echo "<td>" . $score3_9 + $score3_10 . "</td> </tr>";

			$_SESSION["Score1"] = $row["AVG(score1)"];
			$_SESSION["Score2"] = $row["AVG(score2)"]; 

		}
		
		while($row = $avg_result4->fetch_assoc()) {
			 //echo "Average score: "  . $row["AVG(score)"];
			$score4_1 = $row["AVG(score1)"];
			$score4_2 = $row["AVG(score2)"];
			$score4_3 = $row["AVG(score3)"];
			$score4_4 = $row["AVG(score4)"];
			$score4_5 = $row["AVG(score5)"];
			$score4_6 = $row["AVG(score6)"];
			$score4_7 = $row["AVG(score7)"];
			$score4_8 = $row["AVG(score8)"];
			$score4_9 = $row["AVG(score9)"];
			$score4_10 = $row["AVG(score10)"];

			echo "<tr><td> Guidance </td>";
			echo "<td>" . $score4_1 + $score4_2 . "</td>";
			echo "<td>" . $score4_3 + $score4_4 . "</td>";
			echo "<td>" . $score4_5 + $score4_6 . "</td>";
			echo "<td>" . $score4_7 + $score4_8 . "</td>";
			echo "<td>" . $score4_9 + $score4_10 . "</td> </tr>";
			echo "</table>";
			
			$_SESSION["Score1"] = $row["AVG(score1)"];
			$_SESSION["Score2"] = $row["AVG(score2)"]; 

		}
		
		?>
        <div class="row">
            <div class="col-6 d-flex justify-content-center">
                <p>Teacher who have just arrived from working life</p>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <p>Teacher who have just graduated from teaching school </p>
            </div>
        </div>
        <div class="col- d-flex justify-content-center">
            <canvas id="myChart"></canvas>
        </div>
        <div class="row">
            <div class="col-6 d-flex justify-content-center">
                <p>Teacher who have long career from working in workplace</p>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <p>Teacher who have long career from working in school</p>
            </div>
        </div>
		
	</div>
	
	<script>
        const ctx = document.getElementById('myChart');
        let numero1 = '<?php echo $_SESSION['Score1']; ?>';
        let numero2 = '<?php echo $_SESSION['Score2']; ?>';
		


            new Chart(ctx, {
                type: 'scatter',
                data: {
                datasets: [{
                    label: 'Average placement of users',
                    data: [{x: numero1, y: numero2}],
                    backgroundColor: 'rgb(255, 99, 132)'
                    
                }]
                },
                options: {
                    responsive: true,
                    scales: {
                y: {
                    position:"center",
                    min: -100,
                    max: 100,
                    },
                x: {
                    position:"center",
                    min: -100,
                    max: 100,
                    }
                }
                
            }
            }
            );
</script>



</body>
</html>