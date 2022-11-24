
<?php
session_start();
?>
<?php
$_SESSION["Score1"] = 40;
$_SESSION["Score2"] = 50;
?>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, score1, score2 FROM test_table";	
$result =mysqli_query($conn, $sql);

$user_num = "SELECT MAX(id) FROM test_table";
$user_result = mysqli_query($conn, $user_num);







if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - X: " . $row["score1"]. " Y: " . $row["score2"]. "<br>";
  }
} else {
  echo "0 results";
}



  
   while($row1 = $user_result->fetch_assoc()) {
	$id_num = $row1["id"];
	 echo "This quiz has been answered " . $id_num . " times";
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
	 <a class="navbar-brand" href="#"><img src="NextSteps_at_TechVET_logo.png" width="100" class="d-inline-block align-top" alt=""></a>
	</nav>
	
	<!-- Navigointi palkki pohjalla jossa Erasmus logo -->
	<nav class="navbar fixed-bottom navbar-dark bg-primary">
	 <a class="navbar-brand" href="#"><img src="logosbeneficaireserasmusleft_en_0.jpg" width="200" class="d-inline-block align-top" alt=""></a>
	</nav>
	<div class="container">
	  <div class="col-12 d-flex justify-content-center">
            <h2>Average results</h2>
        </div>
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
		<?php
		$users = 60;
		
		print "This quiz has been answered " . $users . " times";
		?>
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