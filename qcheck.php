<?php 

session_start();
$_SESSION['username'] = 28;
$marks = 0;
print_r($_POST);

$con = mysqli_connect("localhost","root","","quiz");
$res = mysqli_query($con,"select * from questions");
$res = mysqli_fetch_all($res);

$ans = array();

foreach ($res as $val)
{
	$ans[$val[0]] = $val[3];
}
foreach($_POST as $v => $val )
{
	if($val == $ans[$v])
	{
		$marks+=1;
	}
}
echo "Marks: ".$marks;
$query = "INSERT INTO `result`(`rollnumber`, `marks`) VALUES ('".$_SESSION['username']."','".$marks."')";
$r = mysqli_query($con,$query);
?>