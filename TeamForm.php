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

<h1> <a href="http://localhost/football/index.php">NFL Football</a></h1>

<form action="SuccessTeam.php" method="post">
    <div>
        <label for="Team">Team:</label>
        <input type="text" id="" name="Team" / required>
    </div>
    <div>
        <label for="Uniform_Color">Uniform Color:</label>
        <input type="text" id="" name="Uniform_Color" / required>
    </div>
    <div>
        <label for="State">State:</label>
        <input type="text" id="" name="State" / required>
    </div>
        <div>
        <label for="Division">Division:</label>
        <input type="text" id="" name="Division" / required>
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