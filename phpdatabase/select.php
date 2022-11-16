<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "platformdb";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

$sql = "SELECT nim, nama FROM mahasiswa";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Nim: " . $row["nim"]. " - Nama: " . $row["nama"]. " <br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>