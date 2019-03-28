<!DOCTYPE html>
<html>
<head>
	<title>Insert Questions</title>
</head>
<body>
<form action="./insertquest.php" method="POST">
<textarea name="quest"></textarea><br>
<label>a)</label>
<input type="text" name="opt[]"><br> <br>
<label>b)</label>
<input type="text" name="opt[]"><br> <br>
<label>c)</label>
<input type="text" name="opt[]"> <br><br>
<label>d)</label>
<input type="text" name="opt[]"><br><br>
<label>Correct Answer:</label>
<input type="radio" name="cans" value="0"> A
<input type="radio" name="cans" value="1"> B
<input type="radio" name="cans" value="2"> C
<input type="radio" name="cans" value="3"> D <br> <br>
<input type="submit" value="Submit">
</form>
</body>
</html>