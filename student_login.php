


<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "quiz";

	$con = new mysqli($servername, $username, $password, $dbname);

	if($con->connect_error)
	{
		die("Connection Failed".$con->connect_error);
	}

	if(isset($_POST['s_username']))
	{
		$name1 = $_POST['s_username'];
		$pass1 = $_POST['s_password'];

		$sql = "select * from login where username='".$name1."' and password = '".$pass1."' and type = 't';";
		$result = $con->query($sql);

		if($result -> num_rows > 0)
		{
			if(isset($_POST['f_username']))
			{
				session_start();
				$_SESSION['name2'] = $_POST['s_username'];
				header("location: faculty.php");
			}	
		}
		else
		{
			echo "user not available";
		}
	}			
?>


<!DOCTYPE html>
<html>
<head>
	<title>Student Login Page</title>
</head>
<body>
	<center><h1>Student</h1></center>
	<form action="student.php" method="POST">
		Username : <input type="text" name="s_username" placeholder="username"><br/><br/><br/>
		Password : <input type="password" name="s_password" placeholder="password">
		<input type="submit" name="s_submit" value="submit">
 	</form>
</body>
</html>