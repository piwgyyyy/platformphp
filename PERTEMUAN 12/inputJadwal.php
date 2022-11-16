<?php
$kelas = array("A", "B", "C", "D", "E", "F");
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Input Jadwal Kelas</title>
</head>
<body>
    <h1>Input Jadwal Kuliah</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Kode Mata Kuliah</td>
                <td><input type="text" name="kodeMatkul"></td>
            </tr>
            <tr>
                <td>Nama Mata Kuliah</td>
                <td><input type="text" name="namaMatkul"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>
                    <select name="nmKelas" id="kelas">
                        <?php
                            foreach ($kelas as $i) {
                                echo "<option value= ". $i. "> ". $i. "</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pengampu</td>
                <td><input type="text" name="dosenMatkul"></td>
            </tr>
            <tr>
                <td>Hari</td>
                <td>
                    <select name="hariKelas" id="day">
                        <?php
                            foreach ($hari as $i) {
                                echo "<option value= ". $i. "> ". $i. "</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jam Mulai</td>
                <td><input type="text" name="jamMulai"></td>
            </tr>
            <tr>
                <td>Jam Selesai</td>
                <td><input type="text" name="jamSelesai"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php 
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

    if (isset($_POST['submit'])) {
            $simpanKode = $_POST['kodeMatkul'];
            $simpanNama = $_POST['namaMatkul'];
            $simpanKelas = $_POST['nmKelas'];
            $simpanPengampu = $_POST['dosenMatkul'];
            $simpanHari = $_POST['hariKelas'];
            $simpanJamMulai = $_POST['jamMulai'];
            $simpanJamSelesai = $_POST['jamSelesai'];
            
            $sql = "INSERT INTO jadwal_kuliah (kode, namaMatkul, kelas, pengampu, hari, jamStart, jamFinish) 
                    VALUES ('$simpanKode', '$simpanNama', '$simpanKelas', '$simpanPengampu', '$simpanHari', '$simpanJamMulai', '$simpanJamSelesai')";

            if (mysqli_query($conn, $sql)) {
                echo '<script type="text/javascript">
                    alert("Berhasil Menyimpan Data");
                    </script>'; 
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        
    }
    mysqli_close($conn);
?>