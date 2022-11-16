<!DOCTYPE html>
<html>

<head>
    <title> Latihan 1B </title>
</head>

<body>
    <h1>STATUS KELULUSAN MAHASISWA</h1>
    Mahasiswa dengan nama <?php echo $_POST["Nama"];  ?> 
    <pre>Nim <?php echo $_POST["NIM"] ?><pre> 
    berhasil menyelesaikan studi S1 dengan predikat <?php echo $_POST["opt"]; ?>
    <?php  ?>
</body>

</html>