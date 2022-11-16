<?php

use Psy\CodeCleaner\IssetPass;

    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Session</title>
    <style>
        body
        {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Barang sudah di masukan ke dalam Keranjang</h2>
    <?php 
          if (isset($_POST["keranjang"])) {
            if(!isset($_SESSION['keranjang'])){
                $_SESSION['keranjang']=array();
            }
            $keranjang = $_POST['keranjang'];
            foreach($keranjang as $item){
                array_push($_SESSION['keranjang'],$item);
            }
        }
        echo "<a href='isiKeranjang.php'>[Lihat Keranjang]</a>";
        echo "<br>";
    
        echo "<a href='MenuUtama.php'>[Pilih Barang]</a>";
    ?>
</body>
</html>
