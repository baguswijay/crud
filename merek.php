<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sorum";

$id = 5;
$nama = 'Delta Unisa III';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to insert a record
$sql = "UPDATE Merek SET nama = '$nama' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  echo "Record Inserted successfully";
} else {
  echo "Error inserted record: " . $conn->error;
}

$conn->close();
?>