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

	if(isset($_POST['f_username']))
	{
		$name1 = $_POST['f_username'];
		$pass1 = $_POST['f_password'];

		$sql = "select * from login where username='".$name1."' and password = '".$pass1."' and type = 't';";
		$result = $con->query($sql);

		if(!$row)
		{
			if(isset($_POST['f_username']))
			{
				session_start();
				$_SESSION['name'] = $_POST['f_username'];
				header("location: faculty.php");
			}	
		}
		else
		{
			//echo "user not available";
		}
	}			
?>
<!DOCTYPE html>
<html>
<head>
	<title>Faculty Login Page</title>
</head>
<body>
	<center><h1>Faculty</h1></center>
	<form action="" method="POST">
		Username : <input type="text" name="f_username" placeholder="username"><br/><br/><br/>
		Password : <input type="password" name="f_password" placeholder="password"><br/><br/><br/>
		<input type="submit" name="f_submit" value="submit">
 	</form>
</body>
</html>