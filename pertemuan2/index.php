<?php
// ini adalah komentar
/* multiline 
komentar*/

// sintaks php
// echo, print
// print_r
// var_dump

echo "Wira";
echo 123;
echo true;
echo false;
echo "Jum'at";
print_r ("Wira");
var_dump ("Wira");

// penulisan sintaks php
// 1. PHP didalam HTML
// 2. HTML di dalam PHP

// variable dan tipe data
// variable
echo "variable dan tipe data".PHP_EOL;
$nama="Wira";

// operator
// aritmatika
// + - * / %
echo "operator aritmatika".PHP_EOL;
$x=10;
$y=20;
echo $x+$y;

// penggabung string/concat
// .
echo "penggabungan string".PHP_EOL;
$nama_depan="M. Wira";
$nama_belakang="Ade Kusuma";
echo $nama_depan." ".$nama_belakang;

// operator assigment
// = += -= *= /= %= .= 
echo "operator assigment".PHP_EOL;
$a=1;
$a +=5;
echo $a;

// perbandingan
// > < <= >= == !=
echo "operator perbandingan".PHP_EOL;
var_dump(1 < 2);


// identitas
// === !==
echo "operator identitas".PHP_EOL;
var_dump(1 === "1");

// logika
// && || !
echo "operator logika".PHP_EOL;
var_dump($xl < 20 || $x % 2 ==0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo "Wira";?></h1>
    <h1>Halo, Selamat Datang <?php echo $nama;?></h1>
    <?php
        echo "<h2>Hai $nama</h2>"
    ?>
</body>
</html>