<!DOCTYPE html>
<html>
<head>
  <title>QUIZ</title>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>
<body>
  <?php 
  $servername= "localhost";
  $username = "root";
  $password = "";
  $dbname = "quiz";

  $con = new mysqli($servername,$username,$password,$dbname);

  $sql = "select sr,rollnumber,marks from result;";
  $result = $con->query($sql);


  if($result -> num_rows > 0)
  {
      echo "<table>";
      while($row = $result->fetch_assoc())
      {

        echo "<tr><td>".$row['sr']."</td><td>".$row['rollnumber']."</td><td>".$row['marks']."</td></tr>";

      }
      echo "</table>";
  }
  else
  {
    echo "0 results";
  }

  ?>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">RollNumber</th>
      <th scope="col">Marks</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>7</td>
      <td>0</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>3</td>
      <td>0</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>6</td>
      <td>0</td>
    </tr>
  </tbody>
</table>

</body>
</html>