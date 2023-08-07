<?php
$direction = $_POST['direction'];
$distance = $_POST['distance'];


$servername = "localhost";
$username = "Robot";
$password = "Hla0";
$dbname = "Movements";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO robotsbath (direction, distance) VALUES ('$direction', $distance)";

if ($conn->query($sql) === TRUE) {
   echo "Path saved successfully";
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>