<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jadwal";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
// sql to delete a record
// $sql = "DELETE FROM MyGuests WHERE id=3";
 
if(isset($_POST['submit'])){
    $Kode = $_POST['Kode Matkul'];
    $Matkul = $_POST['Matakuliah'];
    $Kelas = $_POST['Kelas'];
    $Dosen= $_POST['Dosen Pengampu'];
    $hari = $_POST['Hari/Tanggal'];
    $Jam = $_POST['Jam'];
 
    // sql to insert
    $sql = "INSERT INTO jadwal(Kode Matkul, Matakuliah, Kelas, Dosen Pengampu, Hari/Tanggal, Jam) VALUES ('$Kode','$Matkul','$Kelas','$Dosen','$hari','$Jam')";
    mysqli_query($conn, $sql);
 
    echo "data telah disimpan";
}
if(isset($_POST['update'])){
    $Kode = $_POST['Kode Matkul'];
    $Matkul = $_POST['Matakuliah'];
    $Kelas = $_POST['Kelas'];
    $Dosen= $_POST['Dosen Pengampu'];
    $hari = $_POST['Hari / Tanggal'];
    $Jam = $_POST['Jam'];
 
    //  sql to update
    $sql = "UPDATE jadwal SET kode='$Kode',matkul='$Matkul',kelas='$Kelas',dosen='$Dosen',hari='$hari',jam='$Jam' WHERE kode='$Kode'";
 
    mysqli_query($conn, $sql);
 
    echo "Data telah di update";
}
if(isset($_POST['delete'])){
    $Kode = $_POST['Kode Matkul'];
    $Matkul = $_POST['Matakuliah'];
    $Kelas = $_POST['Kelas'];
    $Dosen= $_POST['Dosen Pengampu'];
    $hari = $_POST['Hari / Tanggal'];
    $Jam = $_POST['Jam'];
 
    //  sql to update
    $sql = "DELETE FROM jadwal WHERE kode='$Kode'";
 
    mysqli_query($conn, $sql);
 
    echo "data dihapus";
}
$conn->close();
?>