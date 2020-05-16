<?php
$servername = "localhost";
$username = "www";
$password = "student";
$dbname = "beslaDB";

$conn = new mysqli($servername,$username,$password,$dbname);



$sql = "INSERT INTO homeForm(person_name,person_email,person_phone)
VALUES('$_POST[name]','$_POST[email]','$_POST[phone]')";

if($conn->query($sql) == TRUE) {
  echo("One record added!");
}
else {
  die("Error: ".$conn->error);
}

$conn->close();
?>