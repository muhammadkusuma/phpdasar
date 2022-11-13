<?php
//date
    echo date("l");
    echo "<br>";
    echo date("d");
    echo "<br>";
    echo date("M");
    echo "<br>";
    echo date("l. d-M-Y");
    echo "<br>";
//    time
//unix timestamp / expoch time
//detik yang sudah berlalu dari 1 januari 1970
    echo time();
    echo "<br>";
    echo date("l",time()+60*60*100);
    echo "<br>";

//    mktime
//membuat sendiri detik
//jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0,0,0,4,10,2003));
echo "<br>";

// strtotime
echo strtotime("10 april 2003");
echo "<br>";
echo date("l",strtotime("10 april 2003"));
?>