<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/quiz.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/quiz.js"></script>
</head>
<body style="background-color: #DCDCDC">
	<nav class="navbar navbar-dark bg-dark">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div>
					<a href="../templates/home.html" class="nav-link bg-secondary text-light rounded mx-2">Home</a>
				</div>
				<div class="dropdown" style="display:none">
					<button type="button" class="btn btn-secondary dropdown-toggle mx-2 my-2" data-toggle="dropdown">
						Test Preparation
					</button>
					<div class="dropdown-menu bg-light justify-content-center">
						<a class="dropdown-item text-success" href="https://www.w3schools.com/bootstrap4/bootstrap_dropdowns.asp">Easy</a>
						<a class="dropdown-item text-warning" href="#">Medium</a>
						<a class="dropdown-item text-danger" href="#">Hard</a>
						<a class="dropdown-item text-primary" href="#">Mock Test</a>
					</div>
				</div>
				<div>
					<a href="Universities-Courses.php" class="nav-link bg-secondary text-light rounded mx-2">Universities/Courses</a>
				</div>
				<div>
					<a href="" class="nav-link bg-secondary text-light rounded mx-2">Leaderboard</a>
				</div>
				<div class="sign_or_log">
					Hello
					<strong class="or">
						<?php
							// Echo session variables that were set on previous page
							echo $_SESSION["uname"];
						?>
					</strong>
					<button 
						<?php
							session_unset(); 
							session_destroy();
						?>
					onclick="document.location.href='../templates/home.html'" type="button" class="btn btn-secondary signup_button" 
					data-toggle="dropdown">
					Log-out
					</button>
				</div>
			</div>
		</nav>
</nav>
<div class="container" style="width: 90%">
	<div class="card">
					<div class="pull-center">GRE PRACTISE TEST</div>
		</header>
		<main>
			<div class="card">
				<div class="verbal">VERBAL</div>
				<?php
					require 'connect.inc.php';
					$query = "SELECT question, A, B, C, D, E FROM Questions WHERE type='Verbal' ORDER BY RAND() LIMIT 3";
					$result = mysqli_query($conn, $query);
	 				if (mysqli_num_rows($result) > 0) {
	 					$counter = 1;
						while($row = mysqli_fetch_assoc($result)) {
							echo "
								<div class='card shadow-lg p-3 mb-5 bg-white rounded'>
									<form class='questionForm' id='question_$counter' data-question='1'>
									<h5>" . $row['question'] . "</h5>
									<ul>
										<li><input name='question_options_$counter' type='radio' value='A' />" . $row["A"] . "</li>
										<li><input name='question_options_$counter' type='radio' value='B' />" . $row["B"] . "</li>
										<li><input name='question_options_$counter' type='radio' value='C' />" . $row["C"] . "</li>
										<li><input name='question_options_$counter' type='radio' value='D' />" . $row["D"] . "</li>
										<li><input name='question_options_$counter' type='radio' value='E' />" . $row["E"] . "</li>
									</ul>
									</form>
								</div>
							";
							$counter = $counter + 1;
						}
					}
				?>
			</div>
	
			<div class="card">
				<div class="quants">QUANTS</div>
					<?php
					require 'connect.inc.php';
					$query = "SELECT question, A, B, C, D, E FROM Questions WHERE type='Quants' ORDER BY RAND() LIMIT 3";
					$result = mysqli_query($conn, $query);
	 				if (mysqli_num_rows($result) > 0) {
	 					$counter = 1;
						while($row = mysqli_fetch_assoc($result)) {
							echo '
								<div class="card shadow-lg p-3 mb-5 bg-white rounded">
									<form class="questionForm" id="question_$counter" data-question="1">
									<h5>' . $row['question'] . '</h5>
									<ul>
										<li><input name="question_$counter_options" type="radio" value="A" />' . $row["A"] . '</li>
										<li><input name="question_$counter_options" type="radio" value="B" />' . $row["B"]. '</li>
										<li><input name="question_$counter_options" type="radio" value="C" />' . $row["C"]. '</li>
										<li><input name="question_$counter_options" type="radio" value="D" />' . $row["D"]. '</li>
										<li><input name="question_$counter_options" type="radio" value="E" />' . $row["E"]. '</li>
									</ul>
									</form>
								</div>
							';
						}
					}
				?>
				</div>
			</div>
		

			<button id="submit" class="btn-primary" style="margin-left: 50%; margin-top: 1%" onclick="submitQuiz()">SUBMIT</button>
			<div id="results"></div>
			<br>
			
		</main>
		<footer class="pull-left">TOTAL 6 Questions</div>
	</div>	
</div>
</body>
</html>


<header>

