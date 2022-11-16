<!DOCTYPE html>
<html>
    <body>
        <h1>Tampilkan Pesanan</h1>
        <?php
        echo $_POST['nama'];
        echo "memesan <br>";
        echo "Makanan";
        if(isset($_POST['makanan'])){
            $makan=$_POST['makanan'];
            for ($i=0; $i < count($makan); $i++){
                echo $makan[$i]."<br>";
            }
        }
        
        echo "Minuman";
        echo "<br>";
        if(isset($_POST['minuman'])){
            $minum=$_POST['minuman'];
            for ($j=0; $j < count($minum); $j++){
                echo $minum[$j]."<br>";
            }
        }
        ?>
    </body>
</html>


