<?php
$hostname     = "remotemysql.com"; // Enter Your Host Name
$username     = "9XB4cDcWZX";      // Enter Your Table username
$password     = "uXSTTqdJSc";          // Enter Your Table Password
$databasename = "9XB4cDcWZX"; // Enter Your database Name


$conn = new mysqli($hostname, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>

