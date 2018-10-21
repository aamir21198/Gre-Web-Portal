<?php
session_start();
require 'connect.inc.php';

if (isset($_POST['uname']) && isset($_POST['psw'])) {
	if(!empty($_POST['uname']) && !empty($_POST['psw']))
	{
		$user_name = $_POST['uname'];
		$password = md5($_POST['psw']);

		$query = "SELECT user_name FROM Users WHERE user_name='$user_name' AND password='$password'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) > 0) {
			$_SESSION["uname"] = $_POST['uname'];
			echo "<script> location.href='LoggedInHome.php'; </script>";
        	exit;
		}
		else {
			echo "Invalid login";
		}
		echo "<br> &nbsp <a href='/WD/templates/home.html'>Home</a>";

		mysqli_close($conn);
	}
}

?>