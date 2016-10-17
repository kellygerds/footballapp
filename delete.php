<?php

include 'dbConnection.php';
$Player_id = $_GET['id'];
$sql = "DELETE FROM players WHERE id=$Player_id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>#</title>

  </head>
  <ul>
  <li><a href="http://localhost/football/index.php">Home</a></li>
  <li><a href="http://localhost/football/TeamForm.php">Teams</a></li>
  <li><a href="http://localhost/football/PlayerForm.php">Players</a></li>
</ul>


  <body>


    <?php
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
    ?>
   
   <h1><a href="index.php">Back to Team and Player Info</a></h1>
  </body>
</html>