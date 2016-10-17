<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="style.css">


</head>

<ul>
  <li><a href="http://localhost/football/index.php">Home</a></li>
  <li><a href="http://localhost/football/TeamForm.php">Teams</a></li>
  <li><a href="http://localhost/football/PlayerForm.php">Players</a></li>
</ul>

<body>
<div class= "container">

<h1> NFL Football </h1>

<h2> <a href ="TeamForm.php">Add a Team</a></h2>
<h2> <a href ="PlayerForm.php">Add a Player</a></h2>


<?php

include 'dbConnection.php';


$sql = "SELECT 
players.id as Players_id, Player_Name, Team_id, Position, Number,
nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division
FROM players JOIN nfl_football_teams ON Players.Team_id = nfl_football_teams.id";

$result = $conn->query($sql);


if($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo 
        $row['TeamID'] . " | " .
        $row['Team'] . " | " . 
        $row['Uniform_Color'] . " | " . 
        $row['State'] . " | " . 
        $row['Division'] . " | " . 
        $row['Player_Name'] . " | " . 
        $row['Position'] . " | " . 
        $row['Number']  .
        " | <a href=delete.php?id=" . $row['Players_id']  ."> delete</a>" .
        " | <a href=PlayerForm.php?id=" . $row['Players_id']  . "> update</a>" . "<br>" ;
    }
}
?>
</div>
</body>
</html>