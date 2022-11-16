<!DOCTYPE html>
<html>
    <body>
    <?php

$suhu = [23, 45, 36, 27, 33, 32, 30, 28, 35, 32];
$Data = 0;

echo "<table border=1>";
foreach($suhu as $s){
    echo "<tr>";
    echo "<td>Hari Ke-", $Data += 1;
    echo "<td>$s";
}
echo "</table>";

?>
    </body>
</html>