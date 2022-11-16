<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1A</title>
    <style>
        table {
            border: black solid 3px;
        }
        .input1 {
            margin-left: 87px;
        }
        .input2 {
            margin-left: 70px;
        }
        form {
            margin: 20px;
            padding: 20px;
        }
        select {
            margin-left: 10px;
        }
        .tombol {
            margin-left: 100px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form action="latihan1b.php" method="POST">
        <table>
            <tr>
                <td>
                    <pre>NIM : <input type="string" name="NIM" value=""/></pre>
                    <pre>Nama : <input type="text" name="Nama" value=""/></pre>
                    <pre>Status Kelulusan : <select name="opt">
                        <option value="Tidak Memuaskan"> TIDAK MEMUASKAN </option>
                        <option value="Tidak Memuaskan"> CUKUP MEMUASKAN </option>
                        <option value="Tidak Memuaskan"> MEMUASKAN </option>
                        <option value="Tidak Memuaskan"> SANGAT MEMUASKAN </option>
                        </select></pre>
                    <input type="submit" value="Submit Data"/>
                </td>
            </tr>
        </table>
    </form>
    </body>
</html>
