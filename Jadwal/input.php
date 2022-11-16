
<!DOCTYPE html>
<html>
    <head>
        <title> Jadwal Kuliah </title>
    </head>
    <body>
        <h1> JADWAL KULIAH </h1>
        <form action="jadwal.php" method="POST"></form>
        <table>
            <tr>
                <td> Kode Matkul </td>
                <td> <input type="text" value=""/></td>
            </tr>
            <tr>
                <td> Matakuliah </td>
                <td> <input type="text" value=""/></td>
            </tr>
            <tr>
                <td> Kelas </td>
                <td> <select name="opt">
					<option value="Kelas A">Kelas A</option>
					<option value="Kelas B">Kelas B </option>
					<option value="Kelas C">Kelas C </option>
					<option value="Kelas D">Kelas D </option>
					<option value="Kelas E">Kelas E </option>
					</select></td>	
            </tr>
            <tr>
                <td> Dosen Pengampu </td>
                <td> <input type="text" value=""/></td>
            </tr>
            <tr>
                <td> Hari / Tgl </td>
                <td> <select name="bln">
                    <option selected="selected"> Hari </option>
                    <?php
                    $hari=array("Senin","Selasa","Rabu","Kamis","Jumad","Sabtu");
                    $jlh_hari=count($hari);
                    for($c=0; $c<$jlh_hari; $c+=1){
                        echo"<option value=$hari[$c]> $hari[$c] </option>";
                    }
                    ?>
                    </select> 
                </td>
            </tr>
            <tr>
                <td> Jam </td>
                <td> <input type="text" value=""/></td>
            </tr>
            <tr>
                <td><input type="submit" value="simpan"/></td>
            </tr>
        </table>
    </body>
</html>