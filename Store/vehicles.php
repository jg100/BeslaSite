<?php
$servername = "localhost";
$username = "student";
$password = "student";
#dbname = "vehicles";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE vehicles (
  id int(9) not null PRIMARY KEY AUTO_INCREMENT,
  img_dir   varchar(128) not null,
  img_name1 varchar(128) not null,
  img_name2 varchar(128) not null,
  year      varchar(128) not null,
  make      varchar(128) not null,
  model     varchar(128) not null,
  mpg       varchar(128) not null,
  price     varchar(128) not null,
  description TEXT not null
)";

if ($conn->querry($sql) === TRUE {
  echo "Table vehicles created successfully.";
} else {
  echo "Error creating table vehicles: " . $conn->error;
}

$sql = "INSERT INTO vehicles (img_dir, img_name1, img_name2, year, make, model, mpg, price, description)

VALUES ("/var/www/html/Besla/Store/V1",
"car1.jpg", "car1w.jpg", "2016", "Besla", "Compensator", "25 City/35 Highway", "$35,000",
"The Besla Compensator is a truck that tells everyone that your the biggest guy around and there's nothing that you're insecure about at all.  It has a truck bed so you can put all your cool dirt bikes and ATVs on so that people know you do cool things.  We can also add flames or stripes to it to up the coolness factor by a million.")

VALUES ("/var/www/html/Besla/Store/V2",
"car2.jpg", "car2b.jpg", "1774", "Besla", "Classic", "10 City/15 Highway", "$40,000",
"The Besla Classic the car you want if you looking to relive the glory days of the 1770's.  This is the first car ever created by Besla and we've remade it so that you can relive the nostalgia of the revolutionary war together.  It's made exactly the same way it was before except this time it has a personal assistant AI named Jeeves who will make sarcastic remarks at your requests.");

VALUES ("/var/www/html/Besla/Store/V3",
"car3.jpg", "car3b.jpg", "2120", "Besla", "Hover", "20 City/35 Highway", "$120,000",
"The Besla Hover is our brand new car from the future.  Its designs were sent back by our engineers from the future Besla so that we'd be the first to offer this ever.  Its sleek and simple design is so aerodynamic there is virtually no drag.  It also doesn't have wheels so you don't have to worry about flat tires and replacing them.  You'll also notice that it has no fuel tank, this is because it's solar powered.  These solar panels are so advanced that they get enough energy to power the car for a week with only an hour of exposure to the sun.");

VALUES ("/var/www/html/Besla/Store/V4",
"car4.jpg", "car4.jpg", "2019", "Besla", "Jetbike", "35 City/45 Highway", "$60,000",
"The Besla Jetbike is the first flying motocycle available for public purchase.  With two large jet engines strapped to its sides you're able to fly at lightning speed to cut your morning commute time in half.  Its wheels are more for show and so that it'll stand up when it's on the ground, they also don't spin but why would you want them to if you're gonna be flying it everywhere?");

VALUES ("/var/www/html/Besla/Store/V5",
"car5.jpg", "car5.jpg", "2013", "Besla", "Dark-Optimus", "20 City/30 Highway", "$40,000",
"The Besla Dark-Optimus is the perfect addition to your transformers themed fleet of cars.  While we could've just made a regular optimus we thought it was cooler to make it dark.  This vehicle only comes in colors black, dark gray, shadow and void; perfect for hiding you cars when it's dark out and no one shines a light at it or goes near.");

VALUES ("/var/www/html/Besla/Store/V6",
"car6.jpg", "car6.jpg", "2016", "Besla", "Adventurer", "25 City/40 Highway", "$45,000",
"The Besla Adventurer is a high performance all terrain vehicle, designed to be used in all sorts of locations, road, off-read, on-water, under-water, in-air, underground and it outer space.  This car can really go anywhere.  With 3 sets of wheels to make sure you get where you need to go and also because it just seemed like a cool thing to put on a car.  The Adventurer ensures fun for the whole family when on camping trips to the bottom of the ocean.");

VALUES ("/var/www/html/Besla/Store/V7",
"car7.jpg", "car7.jpg", "2010", "Besla", "Carrier", "20 City/30 Highway", "$20,000",
"The Besla Carrier is the perfect car to transport people, goods or other cargo.  The spacious cargo area is ideal for families of 12, with enough room for the kids to play a board game while enjoying th climate controlled interior.  Or if you need lots of storage room to transport you goods to and from locations the seats can be removed for easy access to the empty inside.");

VALUES ("/var/www/html/Besla/Store/V8",
"car8.jpg", "car8.jpg", "2015", "Besla", "Zoom Zoom", "10 City/15 Highway", "$1,000,000",
"The Besla Zoom Zoom was created specifically to show off to your friends and enemies.  This car comes equipped with all sorts of bells and whistles to brag about to others.  If you've too much money and don't know what to do with it, this is the perfect car for you.  It's also pretty fast too.");

VALUES ("/var/www/html/Besla/Store/V9",
"car9.jpg", "car9.jpg", "2018", "Besla", "Monocycle", "5 City/5 Highway(not Recomended)", "$1,000",
"The Besla Monocycle is the first of its kind, is able to stand on its own and has a USB adapter so you can charge all of you devices on the go.  Our team of engineers created this for short commute trips that can get you around a dense urban area in no time while enjoying your ride.");

";

if ($conn->query($sql) === TRUE {
  echo "New record(s) created successfully";
} else {
  echo "Error(s): " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>









