<?php

$data=date("d-m-Y H:i");
echo "Data i czas: $data ";

$servername = "localhost";
$username = "user";
$password = "a";
$dbname = "user";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id, imie, dzial, zarobki)
VALUES (null, 'Kacper', 1, 25)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>