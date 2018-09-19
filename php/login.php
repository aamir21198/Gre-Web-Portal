<?php

// require connect.inc.php;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Gre_portal";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
//echo "Connected successfully<br>";

if (isset($_POST['uname']) && isset($_POST['psw'])) {
	if(!empty($_POST['uname']) && !empty($_POST['psw']))
	{
		$user_name = $_POST['uname'];
		$password = md5($_POST['psw']);

		$query = "SELECT user_name FROM Users WHERE user_name='$user_name' AND password='$password'";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) > 0) {
			echo 'Logged In<br>';
			echo "Welcome $user_name";
		}
		else {
			echo "Invalid login";
		}
		echo "<br> &nbsp <a href='/WD/templates/home.html'>Home</a>";

		mysqli_close($conn);
	}
}

?>