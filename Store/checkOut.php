<?php
$servername = "localhost";
$username = "www";
$password = "student";
$dbname = "beslaDB";

$conn=new mysqli($servername,$username,$password,$dbname);
//my understanding is that the below is me inserting my information from my form into a table titled checkOut, and then for values im passing in the id of each text window.
$sql= "INSERT INTO
checkOut(customer_fname,customer_lname, customer_cc#,customer_email,customer_phone,customer_street,customer_city,
customer_state,customer_country,customer_zip)
VALUES('$_POST[fname]','$_POST[lname]','$_POST[Credit card #]','$_POST[email]','$_POST[phone]','$_POST[Street Address]',
'$_POST[city]','$_POST[state]','$_POST[country]','$_POST[zip]')";
if($conn->query($sql) == TRUE) 
{
  echo("One record added!");
}
else 
{
  die("Error: ".$conn->error);
}

$conn->close();
?>
