<?php
session_start();
require 'connect.inc.php';

if(isset($_POST['score']) && !empty($_POST['score'])) {
	$query = "UPDATE Users SET score='" . $_POST['score'] . "' WHERE user_name = '" . $_SESSION['uname']. "'";
	if (mysqli_query($conn, $query)) {
		echo "Completed";
	}
}
?>