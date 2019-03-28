<?php
		session_start();
		/*if(!isset($_SESSION['name2']))
		{
			header("location: student_login.php");
		}*/
		$name = $_SESSION['name2'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Faculty</title>
</head>
<body>	
	<h1>Welcome<?php echo " $name sir";?></h1>	
	<a href="logout_student.php">Logout</a>
</body>
</html>