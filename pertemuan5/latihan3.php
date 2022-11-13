<?php
    $mahasiswa=[
        ["M. Wira Ade Kusuma","12150311480", "Sistem Informasi", "12150311480@students.uin-suska.ac.id"],
        ["Agung Hapsah","12198340394", "Sistem Informasi", "12198340394@students.uin-suska.ac.id"],
        ["Agung Hapsah","12198340394", "Sistem Informasi", "12198340394@students.uin-suska.ac.id"]
    ];
?>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach ($mahasiswa as $mhs):?>
<ul>
    <li>Nama : <?=$mhs[0]?></li>
    <li>NIM :<?=$mhs[1]?></li>
    <li>Jurusan : <?=$mhs[2]?></li>
    <li>Email : <?=$mhs[3]?></li>
</ul>
<?php endforeach;?>
</body>
</html>
