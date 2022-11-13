<html>
<body>
<?php
echo "Wira";
echo "<br>";
echo 222;
echo "<br>";
echo true;
//echo false;
echo "<br>";
print_r("wira");
echo "<br>";
var_dump("wira");
echo "<br>";

// penulisan sintaks php
// 1. PHP didalam HTML
// 2. HTML di dalam PHP

// variable dan tipe data
// variable
echo "<br>";
echo "variable dan tipe data";
echo "<br>";
echo $nama="Wira";
echo "<br>";

// operator
// aritmatika
// + - * / %
echo "<br>";
echo "operator aritmatika</br>";
$x=10;
$y=20;
echo $x+$y;
echo "<br>";

// penggabung string/concat
// .
echo "<br>";
echo "penggabungan string</br>";
$nama_depan="M. Wira";
$nama_belakang="Ade Kusuma";
echo $nama_depan." ".$nama_belakang;
echo "<br>";

// operator assigment
// = += -= *= /= %= .=
echo "<br>";
echo "operator assigment</br>";
$a=1;
$a +=5;
echo $a;
echo "<br>";

// perbandingan
// > < <= >= == !=
echo "<br>";
echo "operator perbandingan</br>";
var_dump(1 < 2);
echo "<br>";


// identitas
// === !==
echo "<br>";
echo "operator identitas</br>";
var_dump(1 === "1");
echo "<br>";

// logika
// && || !
echo "<br>";
echo "operator logika</br>";
$xl=1;
$xy=10;
var_dump($xl < 20 || $xy % 2 ==0);
echo "<br>";
?>
</body>
</html>