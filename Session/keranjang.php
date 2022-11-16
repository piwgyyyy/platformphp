<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Keranjang</title>
    <style>
        .isi
        {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="isi">
        <h1>Isi Keranjang</h1>
        <a href='logout.php'>[logout]</a>

    </div>
    
    <?php 
        if (isset($_SESSION["Keranjang"])) {
            $keranjang = $_SESSION['Keranjang'];

            echo "<h2>Barang yang sudah anda pilih</h2>";
                echo "<ol>";
                foreach($keranjang as $k){
                    echo "<li>$k</li>";
                }
                echo "</ol>";
        }
        echo "<a href='menuUtama.php'>Kembali Memilih barang</a>";
    ?>
</body>
</html>