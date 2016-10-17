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

<?php
//COMPARE THIS TO KRYSTAS!!!///

include 'dbConnection.php';

$sql = "SELECT id, Team FROM nfl_football_teams";

$teams = $conn->query($sql);


if (isset($_GET['id'])) {

  $Player_id = $_GET['id'];

  //Query DB for details 
  $PlayerSQL = "SELECT * FROM players where id = $Player_id"; 
  $Player =  $conn->query($PlayerSQL)->fetch_assoc();

}

?>



<h1> <a href="http://localhost/football/index.php">Add/Update a Player</a></h1>

<form action="SuccessPlayer.php" method="post">

     <?php if(isset($Player_id)) echo "<input type='hidden' name='Players_id' value=" . $Player_id .">"; ?>
    
    <div>  
        <label for="TeamID">Team name:</label>
        <select name="TeamID">

   

<?php
        if ($teams->num_rows > 0){

            while($row = $teams->fetch_assoc()) {
                echo "<option value='" . $row["id"]. "'" ; //change $row to our variable
                if (isset($Player) and $Player_id == $row["id"]) echo "selected";
                echo">" . $row["Team"] . "</option>";
            }
        }
        ?>

        
    </select>
    </div>

    <div>
        <label for="Player_Name">Player Name:</label>
        <input type="text" id="" name="Player_Name" <?php if (isset($Player['Player_Name'])) echo "value='" . $Player['Player_Name'] . "'"; ?> / required>
    </div>

    <div>
        <label for="Position">Position:</label>
        <input type="text" id="" name="Position" <?php if (isset($Player['Position'])) echo "value='" . $Player['Position']  . "'"; ?> / required>
    </div>
        <div>
        <label for="Number">Number:</label>
        <input type="number" id="" name="Number" <?php if (isset($Player['Number'])) echo "value='" . $Player['Number']  . "'"; ?> / required>
    </div>

<br>
<br>
<br>
    <div class="button">
        <button type="submit">Submit</button>
    </div>
    
</form>
</body>
</html>