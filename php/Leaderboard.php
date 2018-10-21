<!DOCTYPE html>
<html>
<head>
	<title>Universities/Courses</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/Universities-Courses.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/Universities-Courses.js"></script>
</head>
<!-- <body>
	<button onclick="callAlert()">Hello</button>
</body> -->
<body>
	<nav class="navbar navbar-dark bg-dark">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div>
						<a href="" class="nav-link bg-secondary text-light rounded mx-2">Home</a>
					</div>
					<div class="dropdown">
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
					<div style="display: none">
						<a href="" class="nav-link bg-secondary text-light rounded mx-2">Universities/Courses</a>
					</div>
					<div>
						<a href="" class="nav-link bg-secondary text-light rounded">Universities/Courses</a>
					</div>
					<div class="sign_or_log">
						Already a member?
						<button onclick="document.getElementById('login').style.display='block'" type="button" class="btn btn-secondary login_button"               data-toggle="dropdown">
							Login
						</button>
						<strong class="or">OR</strong>
						<button onclick="document.getElementById('Sign-up').style.display='block'" type="button" class="btn btn-secondary signup_button" 
						data-toggle="dropdown">
						Sign-up
					</button>
				</div>
			</div>
		</nav>
	</nav>
	<div class="card">
		<table class="leaderboard_table" border=1 frame=void rules=rows>
			  	<tbody> 
			 		<tr class="table_header">
						<th width="70%"> Name </th>
					  	<th width="30%"> Score </th>
			  		</tr>
			  		<!-- <tr>
			  			<td>Dhruv Bhagadia</td>
			  			<td>340</td>
			  		</tr>
			  		<tr>
			  			<td>Aamir Darukhanawal</td>
			  			<td>330</td>
			  		</tr>
			  		<tr>
			  			<td>Varsha Chamaria</td>
			  			<td>320</td>
			  		</tr> -->
			  		<?php

			  		require 'connect.inc.php';

			  		$query = "SELECT user_name, score FROM Users ORDER BY score DESC";
					$result = mysqli_query($conn, $query);

					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							echo "<tr>
			  						<td>$row['user_name']</td>
			  						<td>$row['score']</td>
			  					</tr>";
						}
					}

			  		?>
				</tbody>

		</table>
	</div>
</body>
</html>
