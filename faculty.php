<?php
		session_start();
		if(!isset($_SESSION['name']))
		{
			header("location: faculty.php");
		}
		$name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Faculty</title>
</head>
<body>	
	<h1>Welcome<?php echo " $name sir";?></h1>	
	<a href="./iquest.php" title="">Insert Question</a><br>
	<a >Marks</a><br>
	<a href="logout_faculty.php">Logout</a>
</body>
</html>