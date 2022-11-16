<!DOCTYPE html>
<html>
    <body>
        <head> PESAN MAKANAN DAN MINUMAN </head>
        <form action="latihan3b.php" method="POST">
            <pre> Nama Pemesan <input type="string" name="UserName" value=""/><pre>
            <pre> Makanan </pre>
            <?php
                $daftarMakanan = [  "Nasi Goreng",
                                    "Mie Goreng",
                                    "Mie Godong",
                                ];
            echo "<form action='latihan3b.php' method='POST'>";
            foreach($daftarMakanan as $dh){
                echo "<input name='makanan[]' value='$dh' type='checkbox'/>$dh";
                echo "<br>";
            }
            
            ?>
            <pre> Minuman <input type="checkbox" name="minuman" value=""/><pre>
            <?php
                $daftarMakanan = [  "Es Teh Panas",
                                    "Es Jeruk",
                                    "teh Panas",
                                    "jeruk Panas",
                                ];
                echo "<form action='latihan3b.php' method='POST'>";
                foreach($daftarMakanan as $dh){
                    echo "<input name='hobi[]' value='$dh' type='checkbox'/>$dh";
                    echo "<br>";
                }

            ?>
<!-- $namaPemesan =
    $daftarHobi = ["Sepakbola",
                    "Renang",
                    "Nonton Bioskop",
                    "Main Game",
                    "Shopping"];

    echo "<h1>DAFTAR HOBI</h1>";
    echo "<form action='latihan3b.php' method='POST'>";

    foreach($daftarHobi as $dh){
        echo "<input name='hobi[]' value='$dh' type='checkbox'/>$dh";
        echo "<br>";
    }

    echo "<input type='submit'/>";
    echo "</form>"; -->
