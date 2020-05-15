<?php
$servername = "localhost";
$username = "www";
$password = "student";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


//CREATE BESLA DATABASE 
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS beslaDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully!";
} else {
  echo "Error creating database: " . $conn->error;
}

//CREATE TABLES
$dbname = "beslaDB";
$conn = new mysqli($servername,$username,$password,$dbname);
$tableName = homeForm;
$formTableQuery = "CREATE TABLE IF NOT EXISTS homeForm(
person_name VARCHAR(50) NOT NULL,
person_email VARCHAR(50) NOT NULL,
person_phone VARCHAR NOT NULL
)";

if($conn->query($formTableQuery) == TRUE) {
    echo "The table has been created";
}
else {
    echo "Error creating table: " . $conn->error; 
}

$conn->close();
?>