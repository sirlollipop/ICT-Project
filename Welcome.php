
<?php
session_start();
?>
<?php
if (empty($_SESSION["myusername"])) {
    header("location: login.php");
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
	 <a class="navbar-brand" href="quiz.php"><img src="NextSteps_at_TechVET_logo.png" width="100" class="d-inline-block align-top" alt=""></a>
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
			$score1 = $row["AVG(score1)"];
			$score2 = $row["AVG(score2)"];
			$score3 = $row["AVG(score3)"];
			$score4 = $row["AVG(score4)"];
			$score5 = $row["AVG(score5)"];
			$score6 = $row["AVG(score6)"];
			$score7 = $row["AVG(score7)"];
			$score8 = $row["AVG(score8)"];
			$score9 = $row["AVG(score9)"];
			$score10 = $row["AVG(score10)"];

			echo "<table class='table'> <tr>";
			echo " <th>Category</th>";
			echo " <th>Communication</th>";
			echo " <th>Analysis</th>";
			echo " <th>Synthesis</th>";
			echo " <th>Valuing</th>";
			echo " <th>Execution</th>";
			echo "</tr>";
			echo "<tr><td> Substance </td>";
			echo "<td>" . $score1 + $score2 . "</td>";
			echo "<td>" . $score3 + $score4 . "</td>";
			echo "<td>" . $score5 + $score6 . "</td>";
			echo "<td>" . $score7 + $score8 . "</td>";
			echo "<td>" . $score9 + $score10 . "</td> </tr>";
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