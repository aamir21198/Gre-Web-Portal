<?php
session_start();
require 'connect.inc.php'; 

if (isset($_POST['email']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['uname']) && isset($_POST['psw'])) {
	if(!empty($_POST['uname']) && !empty($_POST['psw']))
	{
		$user_name = strtolower($_POST['uname']);
		$password = md5($_POST['psw']);

		$first_name = $_POST['fname'];
		$last_name = $_POST['lname'];
		$email = $_POST['email'];

		$university = $_POST['c_university'];
		$course = $_POST['c_course'];
		$degree = $_POST['c_degree'];
		$college = $_POST['c_college'];

		$query = "SELECT user_name FROM Users WHERE user_name='$user_name'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) > 0) {
			echo 'Username already taken';
		}
		else {
			$query = "INSERT INTO Users VALUES ('$user_name', '$password', '$first_name', '$last_name', '$email', '$university', '$course', '$degree', '$college')";

			if (mysqli_query($conn, $query)) {
				$_SESSION["uname"] = $_POST['uname'];
				echo "<script> location.href='LoggedInHome.php'; </script>";
        		exit;
			}
			else {
				echo "Registration unsuccessful";
			}
		}
		
		echo "<br> &nbsp <a href='/WD/templates/home.html'>Home</a>";

		mysqli_close($conn);
	}
}

?>
