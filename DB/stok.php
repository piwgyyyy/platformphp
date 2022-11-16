<!DOCTYPE html>
<html>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inventaris";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM stok_barang";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<h1>Daftar Stok Barang</h1>";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td width='50px'>Kode</td>";
        echo "<td width='120px'>Nama</td>";
        echo "<td width='120px'>Jenis</td>";
        echo "<td width='80px'>Lokasi</td>";
        echo "<td width='80px'>Harga</td>";
        echo "<td width='80px'>Jumlah</td>";
        echo "</tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td> " . $row["Kode"] . "</td>";   
            echo "<td>" . $row["Nama"] . "</td>"; 
            echo "<td>".$row["Jenis"] . "</td>";
            echo "<td>" . $row["Lokasi"] . "</td>";
            echo "<td>" . $row["Harga"] . "</td>"; 
            echo "<td>". $row["Jumlah"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>
    <a href="inputgudang.php">kembali</a>
</body>

</html>