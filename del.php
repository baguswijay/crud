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

// sql to delete a record
$sql = "DELETE FROM Merek WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleted record: " . $conn->error;
}

$conn->close();
?>

