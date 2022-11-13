<?php
    if (!isset($_GET["nama"])){
        header("Location : latihan1.php");
        exit();
    }
?>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
<ul>
    <li><img src="img/<?= $_GET["gambar"]?>" alt=""></li>
    <li>Nama : <?= $_GET["nama"]?></li>
    <li>NIM : <?= $_GET["nim"]?></li>
    <li>Jurusan : <?= $_GET["jurusan"]?></li>
    <li>Email : <?= $_GET["email"]?></li>
</ul>
<a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>