<?php
$servername = "localhost";
$username = "www";
$password = "student";
$dbname = "beslaDB";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}
else {
    echo "Connected to server" + "<br>";
}

$sql = "INSERT INTO faqForm(questionInput)
VALUES('$_POST[qField]')";

$result = $conn->query($sql);

if($result == TRUE) {
    echo "Response added to DB";
}
else {
    die("Error: ".$conn->mysqli_errno);
}


$conn->close();
?>