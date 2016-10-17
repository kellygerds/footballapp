<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "idd-632";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully <br>";

?>