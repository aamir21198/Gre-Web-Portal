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
					<a href="" class="nav-link bg-secondary text-light rounded mx-2">Leaderboard</a>
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
<hr>	
<div class="card">
	<div class="card-header">
		<h3 class="heading my-2 mx-2">Universities</h3>
	</div>
	<div class="card-body"> 
		<div class="container mx-2 my-2">
			<table class="universities_ranking" border=1 frame=void rules=rows>
				<tbody> 
					<tr class="table_header">
						<th width="5%"> Rank </th>
						<th width="40%" class="heading_name"> Name </th>
						<th width="42%" class="heading_review"> Reviews </th>
						<th width="30%"></th>
					</tr>
					
					<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "Gre_portal";

					$conn = mysqli_connect($servername, $username, $password, $dbname);

					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					} 
						//echo "Connected successfully<br>";

					$query = "SELECT * FROM Universities ORDER BY rank";
					$result = mysqli_query($conn, $query);

					if (mysqli_num_rows($result) > 0) {
    				// output data of each row
						$counter = 1;
						while($row = mysqli_fetch_assoc($result)) {
							$first_break = strrpos($row["review"], '\n');
							$first_line = substr($row["review"], 0, $first_break);
							$rem = substr($row["review"], $first_break);
							echo 
							" <tr class='row_$counter' style='overflow: visible;'>
							<td>" . $row['rank'] . "</td>
							<td>
								<p><strong>" . $row['name'] . "</strong></p>
								<p>" . $row['address'] . "</p>
							</td>
							<td>
								<p class='review'></p>
								$first_line	
								<p id='more$counter' class='review' style='display:none;'>
								$rem
								</p>
								<a href='javascript:showMore($counter)' id='link$counter'>  Read More >></a>
							</td>
							<td>
							<a class='px-4' href='" . $row['website'] . "'>Learn more</a>
							</td>
							</tr>"
							;
							$counter = $counter + 1;
						}
					} else {
						echo "0 results";
					}
					?>

				</tbody>
				  			</table>
				  			</div>
				  			</div>	
				  			</div>
				  			<hr>
				  			<div class="card">
				  			<div class="card-header">
				  			<h3 class="heading my-2 mx-2">Courses</h3>
				  			</div>
				  			<div class="card-body"> 
				  			<div class="container mx-2 my-2">
				  			<table class="universities_ranking" border=1 frame=void rules=rows>
				  			<tbody> 
				  			<tr class="table_header">
				  			<th width="5%"> Rank </th>
				  			<th width="40%" class="heading_name"> Name </th>
				  			<th width="42%" class="heading_review"> Overview of the Course </th>
				  			<th width="30%"></th>
				  			</tr>
				  			<tr class="row_1" style="overflow: visible;">
				  			<td>1.</td>
				  			<td>
				  			<p><strong>Computer Science</strong></p>
				  			<hr>
				  			<p>- Massachusetts</p>
				  			<p>- Standford</p>
				  			<p>- Ontario</p>
				  			</td>
				  			<td>
				  			<p class="overview">
				  			Computer science is the study of the theory, experimentation, and engineering that form the basis for the design and use of computers.
				  			</p>
				  			<p id="more_of_overview1" class="overview" style="display:none;">
				  			It is the scientific and practical approach to computation and its applications and the systematic study of the feasibility, structure, expression, and mechanization of the methodical procedures (or algorithms) that underlie the acquisition, representation, processing, storage, communication of, and access to, information. 
				  			</p>
				  			<a href="javascript:showMoreOverview(1);" id="link_overview1">  Read More >></a>
				  			</td>
				  			<td>
				  			<a class="px-4" href="#">Learn more</a>
				  			</td>
				  			</tr>
				  			<tr class="row_2" style="overflow: visible;">
				  			<td>2.</td>
				  			<td>
				  			<p><strong>Computer Science</strong></p>
				  			<hr>
				  			<p>- Massachusetts</p>
				  			<p>- Standford</p>
				  			<p>- Ontario</p>
				  			</td>
				  			<td>
				  			<p class="overview">
				  			Computer science is the study of the theory, experimentation, and engineering that form the basis for the design and use of computers.
				  			</p>
				  			<p id="more_of_overview2" class="overview" style="display:none;">
				  			It is the scientific and practical approach to computation and its applications and the systematic study of the feasibility, structure, expression, and mechanization of the methodical procedures (or algorithms) that underlie the acquisition, representation, processing, storage, communication of, and access to, information. 
				  			</p>
				  			<a href="javascript:showMoreOverview(2);" id="link_overview2">  Read More >></a>
				  			</td>
				  			<td>
				  			<a class="px-4" href="#">Learn more</a>
				  			</td>
				  			</tr>
				  			<tr class="row_3" style="overflow: visible;">
				  			<td>3.</td>
				  			<td>
				  			<p><strong>Computer Science</strong></p>
				  			<hr>
				  			<p>- Massachusetts</p>
				  			<p>- Standford</p>
				  			<p>- Ontario</p>
				  			</td>
				  			<td>
				  			<p class="overview">
				  			Computer science is the study of the theory, experimentation, and engineering that form the basis for the design and use of computers.
				  			</p>
				  			<p id="more_of_overview3" class="overview" style="display:none;">
				  			It is the scientific and practical approach to computation and its applications and the systematic study of the feasibility, structure, expression, and mechanization of the methodical procedures (or algorithms) that underlie the acquisition, representation, processing, storage, communication of, and access to, information. 
				  			</p>
				  			<a href="javascript:showMoreOverview(3);" id="link_overview3">  Read More >></a>
				  			</td>
				  			<td>
				  			<a class="px-4" href="#">Learn more</a>
				  			</td>
				  			</tr>
				  			<tr class="row_4" style="overflow: visible;">
				  			<td>4.</td>
				  			<td>
				  			<p><strong>Computer Science</strong></p>
				  			<hr>
				  			<p>- Massachusetts</p>
				  			<p>- Standford</p>
				  			<p>- Ontario</p>
				  			</td>
				  			<td>
				  			<p class="overview">
				  			Computer science is the study of the theory, experimentation, and engineering that form the basis for the design and use of computers.
				  			</p>
				  			<p id="more_of_overview4" class="overview" style="display:none;">
				  			It is the scientific and practical approach to computation and its applications and the systematic study of the feasibility, structure, expression, and mechanization of the methodical procedures (or algorithms) that underlie the acquisition, representation, processing, storage, communication of, and access to, information. 
				  			</p>
				  			<a href="javascript:showMoreOverview(4);" id="link_overview4">  Read More >></a>
				  			</td>
				  			<td>
				  			<a class="px-4" href="#">Learn more</a>
				  			</td>
				  			</tr>
				  			</tbody>
				  			</table>
				  			</div>
				  			</div>	
				  			</div>
				  			</body>
				  			</html>
