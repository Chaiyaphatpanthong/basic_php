<?php
$servername = "localhost";//hosting/127.0.0.1
$user = "chaiyaphat"; //userdatabass
$password = "52140"; //user password
$dbname = "db_basic_php"; // database name

//create connection
$conn = new mysqli($servername, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
  echo "Connnect Successfully!";
  }

?>