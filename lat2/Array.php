<?php
    $nilai = [3,2,5,3,7];
    $total = 0;
    foreach($nilai as $x){
        $total = $total+$x;
    }
    $rata2=$total/count($nilai);
    echo "rata-rata=$rata2";
?>

 <!-- ->
    // $data = [3, 2, 5, 3, 7];
    // $jmlhData = count($nilai);
    // $jumNilai = array_sum($nilai);
    // $rata_rata = $jumNilai/$jmlhData;
    // $a = 3;
    // $b = 2;
    // $c = 5;
    // $d = 3;
    // $e = 7;

    // $tot = $a+$b+$c+$d+$e;
    // $rata = $tot / 5 ;

    // echo "Nilai Rata-Ratanya adalah $rata_rata";
?> -->


