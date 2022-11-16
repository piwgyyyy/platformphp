<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "platformdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE siswa(
nim INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table mahasiswa created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>