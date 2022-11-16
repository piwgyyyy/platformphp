<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Menyimpan Array ke dalam Session </title>
    </head>
    <body>
        <?php
            $daftarBuah = array("Apel", "jeruk", "Semangka", "Jambu", "Mangga", "Durian");

            $_SESSION['listBuah'] = $daftarBuah;
            echo "<h1> Daftar Buah Sudah Disimpan ke Dalam Sessionn </h1>";
        ?>
    </body>
</html>
