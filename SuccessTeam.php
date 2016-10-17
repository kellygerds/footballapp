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

$name = $_POST["Team"];
$uniform = $_POST["Uniform_Color"];
$state = $_POST["State"];
$division = $_POST["Division"];

//creating a query

$sql = "INSERT INTO nfl_football_teams (Team, Uniform_Color, State, Division) 
VALUES ('$name', '$uniform', '$state', '$division')"; //php variable names, first one (above this) needs to match column names

if ($conn->query($sql) === TRUE) {

	echo "Success! <br>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

<!--
<p>
Team: <?php echo $name ?><br>
Uniform Color: <?php echo $uniform ?><br>
State: <?php echo $state ?><br>
Division: <?php echo $division ?><br>
</p>
-->

<!--you call echo what the method is, in this case it it POST. Then in the quotes you pull the section from POST that you want to call.-->

<ul>
  <li><a href="http://localhost/football/index.php">Home</a></li>
  <li><a href="http://localhost/football/TeamForm.php">Teams</a></li>
  <li><a href="http://localhost/football/PlayerForm.php">Players</a></li>
</ul>

<body>
<h3><a href="index.php">Back to Team and Player Info</a></h3>

</body>
</head>
</html>