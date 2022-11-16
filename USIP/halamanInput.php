<!DOCTYPE html>
<html>
    <body>
        <h1>Pesan Makanan dan Minuman</h1>
        <form action="halamanTampil.php" method="POST">
            <table border="0">
                <tr>
                    <td>Nama Pesanan</td>
                    <td><input type="text" name="nama" /></td>
                </tr>
                <tr>
                    <td>Makanan</td>
                    <td><input type="checkbox" name="makanan[]" value="Nasi Goreng">Nasi Goreng</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="makanan[]" value="Mie Goreng">Mie Goreng</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="makanan[]" value="Mie Godog">Mie Godog</td>
                </tr>
                <tr>
                    <td>Minuman</td>
                    <td><input type="checkbox" name="minuman[]" value="Es Teh Manis">Es Teh Manis</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="minuman[]" value="Es Jeruk">Es Jeruk</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="minuman[]" value="Teh Panas">Teh Panas</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="minuman[]" value="Jeruk Panas">Jeruk Panas</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="submit"></td>
                </tr>
    </body>
</html>
