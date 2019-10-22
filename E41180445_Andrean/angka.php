<?php


    $bulan = [1, 23, 45, 3, 99, 45, 2, 6];

    $bg = count($bulan) / 2;

    $k = count($bulan);

    $maks1 = "";
    $maks2 = "";
    $min1 = "";
    $min2 = "";
    echo "bagian 1 <br>";
    for ($i=0; $i < $bg ; $i++) { 
        if($maks1 == "" && $min1 == ""){
            $maks1 = $bulan[$i];
            $min1 = $bulan[$i];
        }
        if($bulan[$i] >= $maks1){
            $maks1 = $bulan[$i];
        }
        if($bulan[$i] <= $min1){
            $min1 = $bulan[$i];
        }
        echo $bulan[$i]." ";
    }
    echo "<br>Maks - ".$maks1." Min - ".$min1." <br>";

    echo "<br>bagian 2 <br>";
    for ($i=$bg; $i < $k ; $i++) { 
        if($maks2 == "" && $min2 == ""){
            $maks2 = $bulan[$i];
            $min2 = $bulan[$i];
        }
        if($bulan[$i] >= $maks2){
            $maks2 = $bulan[$i];
        }
        if($bulan[$i] <= $min2){
            $min2 = $bulan[$i];
        }
        echo $bulan[$i]." ";
    }
    echo "<br>Maks - ".$maks2." Min - ".$min2." <br>";


?>