<?php
	if(!isset($_SESSION['name2']))
	{
		unset($_SESSION['name2']);
	}
	header("location: student_login.php");

?>