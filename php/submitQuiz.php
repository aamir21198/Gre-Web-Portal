<?php
session_start();
require 'connect.inc.php';

if(isset($_POST['score']) && !empty($_POST['score'])) {
	
	$query_fun = "Delimiter $$
					CREATE FUNCTION scale(score INT)
					RETURN INT AS
					BEGIN
						RETURN score*340/6;
					END $$
					Delimiter ;";
	mysqli_query($conn, $query_fun);

	$query = " Delimiter $$ 
				Create Trigger score_update Before Update on Users for each row 
				DECLARE new_score INT;
				begin 
				new_score := scale(new.score);
				if new_score>old.score then 
					UPDATE Users SET old.score=new_score;
				End if
				End $$
				Delimiter ;";
	mysqli_query($conn,$query);
	
	$query2 ="UPDATE Users SET score='" . $_POST['score'] . "' WHERE user_name = '" . $_SESSION['uname']. "'";
	mysqli_query($conn, $query2);
		
}
?>