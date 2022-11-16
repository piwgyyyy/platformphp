<?php
    echo "<h1> DAFTAR HOBI YANG KUPILIH</h1>";
    $hobbi = $_POST["hobi"];
    foreach ($hobbi as $hobi => $data){
        echo $hobi + 1, ". ";
        echo $data, "<br>";
    }
    echo "<a href='./latihan3a.php'>Kembali</a>";

    // echo "<h1>DAFTAR HOBI YG KUPILIH</h1>";

    // echo "<ol>";
    // foreach($_POST['hobi'] as $Hobi){
    //     echo "<li> $Hobi";
    // }
    
    // echo "</ol><br>";
    // echo "<a href='latihan3.php'>Kembali</a>";

?>