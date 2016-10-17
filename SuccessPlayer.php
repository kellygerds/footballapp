<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="style.css">


<?php

include 'dbConnection.php';

$teamid = $_POST["TeamID"];
$name = $_POST["Player_Name"];
$position = $_POST["Position"];
$number = $_POST["Number"];


//creating a query
//Check if a artwork_id was provided if so, we're updating the artwork, otherwise we're inserting
  if (isset($_POST['Players_id']))
  {
    $Player_id = $_POST['Players_id'];
    $sql =  "UPDATE players SET Team_id='$teamid', Player_Name='$name', Position= '$position', Number='$number'
    WHERE id = $Player_id";
  } else {
   $sql = "INSERT INTO Players (Team_id, Player_Name, Position, Number) 
  VALUES ('$teamid','$name', '$position', '$number')"; //php variable names, first one (above this) needs to match column names

}




if ($conn->query($sql) === TRUE) {

  echo "Success! <br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<!--
<p>
Team Name: <?php echo $teamid ?><br>
Player Name: <?php echo $name ?><br>
Position: <?php echo $position ?><br>
Number: <?php echo $number ?><br>
</p>
-->

<ul>
  <li><a href="http://localhost/football/index.php">Home</a></li>
  <li><a href="http://localhost/football/TeamForm.php">Teams</a></li>
  <li><a href="http://localhost/football/PlayerForm.php">Players</a></li>
</ul>


<body>
<h3><a href="index.php">Back to Team and Player Info</a></h3>


<!--you call echo what the method is, in this case it it POST. Then in the quotes you pull the section from POST that you want to call.-->

</body>
</head>
</html>