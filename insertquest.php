<?php

$con = mysqli_connect("localhost","root","","quiz");


$query = "INSERT INTO `questions`(`question`, `options`, `answer`) VALUES ('".$_POST['quest']."','".implode(",", $_POST['opt'])."','".$_POST['opt'][$_POST['cans']]."')";

echo $query;

$res = mysqli_query($con,$query);

header("location: ./iquest.php");

?>