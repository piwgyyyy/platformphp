<?php 
$nimNama = ["101" => "BUDI",
        "102" => "SARI",
        "103" => "LOCO", 
        "104" => "JIMMY",
        "105" => "RACHEL"];
$terpilih= $_GET["nim"];

echo "<h1> Detil Mahasiswa</h1>";
echo "<table border='1'>";
echo "<tr><td>NIM</td><td>Nama</td></tr>";
echo "<tr><td>$terpilih</td><td>$nimNama[$terpilih]</td></td>";
echo "</table>";
?>