<?php
//    array
//    variabel yang dapat memiliki banyak nilai
    $nama="Wira";
    $hari=array("Senin", "Selasa","Rabu");
    $bulan=["Januari","Februari","Maret"];
    $arr1=[123,"tulisan",false];

    var_dump($hari);
    echo $hari;
    echo "<br>";
    print_r($bulan);

    echo $arr1[0];
    echo "<br>";
    echo $bulan[1];

    var_dump($hari);
    $hari[]="Kamis";
    echo "<br>";
    var_dump($hari);
?>
