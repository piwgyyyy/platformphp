<?php
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "platfromdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lihat Jadwal Kelas</title>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Pilih Hari:</td>
                <td>
                    <select name="hari" id="hari">
                        <option value="none">Pilih Hari</option>
                    <?php
                        foreach ($hari as $i) {
                            echo "<option value= ". $i. "> ". $i. "</option>";
                        }
                    ?>
                </select>
                </td>
                <td><input type="submit" name="okee" value="Oke"></td>
            </tr>
        </table>
    </form>
    <br>
    <?php
        if(isset($_POST['hari'])){
            $temp = $_POST['hari'];
            $sql = "SELECT kode, namaMatkul, kelas, pengampu, hari, jamStart, jamFinish FROM jadwal_kuliah WHERE hari = '$temp' ORDER BY jamStart";
            $result = mysqli_query($conn, $sql);
            echo "<table border= 1px cellspacing = 0 cellpadding = 10>";
            echo "<tr>";
            echo "<th colspan = 5> Hari ". $temp. "</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>KODE MATA KULIAH</th>";
            echo "<th>NAMA MATA KULIAH</th>";
            echo "<th>KELAS</th>";
            echo "<th>DOSEN PENGAMPU</th>";
            echo "<th>JAM</th>";
            echo "</tr>";
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                        echo"<td>".$row['kode'] ."</td>";
                        echo"<td>".$row['namaMatkul'] ."</td>";
                        echo"<td>".$row['kelas'] ."</td>";
                        echo"<td>".$row['pengampu'] ."</td>";
                        echo"<td>".$row['jamStart'] ." - ". $row['jamFinish']. "</td>";
                    echo "</tr>";
                }   
            }
            echo"<br>";
        } else{
            foreach ($hari as $i){
                $sql = "SELECT kode, namaMatkul, kelas, pengampu, hari, jamStart, jamFinish FROM jadwal_kuliah WHERE hari = '$i'";
                $result = mysqli_query($conn, $sql);
                echo "<table border= 1px cellspacing = 0 cellpadding = 10>";
                echo "<tr>";
                echo "<th colspan = 5> Hari ". $i. "</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>KODE MATA KULIAH</th>";
                echo "<th>NAMA MATA KULIAH</th>";
                echo "<th>KELAS</th>";
                echo "<th>DOSEN PENGAMPU</th>";
                echo "<th>JAM</th>";
                echo "</tr>";
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                            echo"<td>".$row['kode'] ."</td>";
                            echo"<td>".$row['namaMatkul'] ."</td>";
                            echo"<td>".$row['kelas'] ."</td>";
                            echo"<td>".$row['pengampu'] ."</td>";
                            echo"<td>".$row['jamStart'] ." - ". $row['jamFinish']. "</td>";
                        echo "</tr>";
                    }   
                }
                echo"<br>";
            }
        }    
    mysqli_close($conn);
    ?>
</body>
</html>

