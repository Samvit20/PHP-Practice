<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="iwp";

// Create connection
$db = new mysqli($servername, $username, $password, $db) or die ("\nUnable to connect\n");
echo "\nConnected successfully\n";

$sql = "INSERT INTO students (Fname, Lname, Regno) VALUES ('Samvit' , 'Swaminathan' , '19BCE0629')";
$sql1 = "INSERT INTO students (Fname, Lname, Regno) VALUES ('Grihit' , 'Budhiraja' , '19BCE2141')";

if ($db->query($sql) === TRUE) {
    echo "\nNew record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $db->error;
  }

if ($db->query($sql1) === TRUE) {
    echo "\nNew record created successfully";
  } else {
    echo "Error: " . $sql1 . "<br>" . $db->error;
  }

?>