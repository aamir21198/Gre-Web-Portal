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
</head>
<body>
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
<div class="bg">
<div class="container">
		<header>
			<div class="pull-center">GRE PRACTISE TEST</div>
		</header>
		<main>
			<div class="verbal">VERBAL</div>
			<form class="questionForm" id="v_q1" data-question="1">
				<h5>One element, which may not justify violence itself but which __________ its use, is the belief 					that death in a sacred cause is the proper end of life.</h3>
				<ul>
					<li><input name="v_q1" type="radio" value="a" />incriminates</li>
					<li><input name="v_q1" type="radio" value="b" />valorizes</li>
					<li><input name="v_q1" type="radio" value="c" />indicts</li>
					<li><input name="v_q1" type="radio" value="d" />abrogates</li>
				</ul>

			</form>
			<form class="questionForm" id="v_q2" data-question="2">
				<h5>One element, which may not justify violence itself but which __________ its use, is the belief 					that death in a sacred cause is the proper end of life.</h3>
				<ul>
					<li><input name="v_q2" type="radio" value="a" />incriminates</li>
					<li><input name="v_q2" type="radio" value="b" />valorizes</li>
					<li><input name="v_q2" type="radio" value="c" />indicts</li>
					<li><input name="v_q2" type="radio" value="d" />abrogates</li>
				</ul>

			</form>
			<form class="questionForm" id="v_q3" data-question="3">
				<h5>One element, which may not justify violence itself but which __________ its use, is the belief 					that death in a sacred cause is the proper end of life.</h3>
				<ul>
					<li><input name="v_q3" type="radio" value="a" />incriminates</li>
					<li><input name="v_q3" type="radio" value="b" />valorizes</li>
					<li><input name="v_q3" type="radio" value="c" />indicts</li>
					<li><input name="v_q3" type="radio" value="d" />abrogates</li>
				</ul>

			</form>
			<form class="questionForm" id="v_q4" data-question="4">
				<h5>One element, which may not justify violence itself but which __________ its use, is the belief 					that death in a sacred cause is the proper end of life.</h3>
				<ul>
					<li><input name="v_q4" type="radio" value="a" />incriminates</li>
					<li><input name="v_q4" type="radio" value="b" />valorizes</li>
					<li><input name="v_q4" type="radio" value="c" />indicts</li>
					<li><input name="v_q4" type="radio" value="d" />abrogates</li>
				</ul>

			</form>
			<form class="questionForm" id="v_q4" data-question="5">
				<h5>One element, which may not justify violence itself but which __________ its use, is the belief 					that death in a sacred cause is the proper end of life.</h3>
				<ul>
					<li><input name="v_q4" type="radio" value="a" />incriminates</li>
					<li><input name="v_q4" type="radio" value="b" />valorizes</li>
					<li><input name="v_q4" type="radio" value="c" />indicts</li>
					<li><input name="v_q4" type="radio" value="d" />abrogates</li>
				</ul>

			</form>


		<div class="quants">QUANTS</div>
			<form class="questionForm" id="q_q1" data-question="1">
				<h5>If −1&lt;h&lt;0, which of the following has the greatest value?</h3>
				<ul>
					<li><input name="q_q1" type="radio" value="a" />1+h</li>
					<li><input name="q_q1" type="radio" value="b" />1-h</li>
					<li><input name="q_q1" type="radio" value="c" />1+h^2</li>
					<li><input name="q_q1" type="radio" value="d" />1-1/h</li>
				</ul>

			</form>
			<form class="questionForm" id="q_q2" data-question="2">
				<h5>If −1&lt;h&lt;0, which of the following has the greatest value?</h3>
				<ul>
					<li><input name="q_q2" type="radio" value="a" />1+h</li>
					<li><input name="q_q2" type="radio" value="b" />1-h</li>
					<li><input name="q_q2" type="radio" value="c" />1+h^2</li>
					<li><input name="q_q2" type="radio" value="d" />1-1/h</li>
				</ul>

			</form>
			<form class="questionForm" id="q_q3" data-question="3">
				<h5>If −1&lt;h&lt;0, which of the following has the greatest value?</h3>
				<ul>
					<li><input name="q_q3" type="radio" value="a" />1+h</li>
					<li><input name="q_q3" type="radio" value="b" />1-h</li>
					<li><input name="q_q3" type="radio" value="c" />1+h^2</li>
					<li><input name="q_q3" type="radio" value="d" />1-1/h</li>
				</ul>

			</form>

			<form class="questionForm" id="q_q4" data-question="4">
				<h5>If −1&lt;h&lt;0, which of the following has the greatest value?</h3>
				<ul>
					<li><input name="q_q4" type="radio" value="a" />1+h</li>
					<li><input name="q_q4" type="radio" value="b" />1-h</li>
					<li><input name="q_q4" type="radio" value="c" />1+h^2</li>
					<li><input name="q_q4" type="radio" value="d" />1-1/h</li>
				</ul>

			</form>
			<form class="questionForm" id="q_q5" data-question="5">
				<h5>If −1&lt;h&lt;0, which of the following has the greatest value?</h3>
				<ul>
					<li><input name="q_q5" type="radio" value="a" />1+h</li>
					<li><input name="q_q5" type="radio" value="b" />1-h</li>
					<li><input name="q_q5" type="radio" value="c" />1+h^2</li>
					<li><input name="q_q5" type="radio" value="d" />1-1/h</li>
				</ul>

			</form>

		

			<button id="submit"">SUBMIT</button>
			<div id="results"></div>
			<br>
			
		</main>
		<footer class="pull-left">TOTAL 2 Questions</div>
		<script src="../js/jquery.js"></script>
		<script scr="../js/quiz.js"></script>

	</div>
</div>	
</body>
</html>


