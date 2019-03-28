<?php 

	session_start();
	/*if(!($_SESSION['type']=='s' && isset($_SESSION['username'])))
	{
		header("loaction:./index.php");
	}*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>Questions</title>
	<style type="text/css" media="screen">
		*
		{

			margin: 10px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>
<body>
	<h1>Questions:</h1>
	<?php 
		$con = mysqli_connect("localhost","root","","quiz");
		$res = mysqli_query($con,"select * from questions");
		$res = mysqli_fetch_all($res);
		$arr = [1,2,3,4,5];
		echo json_encode($arr);
		//print_r($res);
	?>
<form action="./qcheck.php" method="POST">
	
	<div class="row">
		<?php foreach ($res as $val) 
	{ echo "<div class='col'>"; ?>
		<label><?php 
		echo $val['0'].") ".$val['1'];	
		$options = explode(",", $val['2']);
	?></label> <br>
	<input type="radio" name="<?php echo $val['0']; ?>" value="<?php echo $options[0] ?>" >  <?php echo $options[0] ?> <br>
	<input type="radio" name="<?php echo $val['0']; ?>" value="<?php echo $options[1] ?>" >  <?php echo $options[1] ?><br>
	<input type="radio" name="<?php echo $val['0']; ?>" value="<?php echo $options[2] ?>">  <?php echo $options[2] ?> <br>
	<input type="radio" name="<?php echo $val['0']; ?>" value="<?php echo $options[3] ?>">  <?php echo $options[3] ?> <br>
<?php
echo "</div>";
}
?>
	</div>
	<input type="submit" class="btn btn-primary" value="Submit">
</form>
</body>
</html>