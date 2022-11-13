<?php
//$mahasiswa=[
//    ["M. Wira Ade Kusuma","12150311480", "Sistem Informasi", "12150311480@students.uin-suska.ac.id"],
//    ["Agung Hapsah","12198340394", "Sistem Informasi", "12198340394@students.uin-suska.ac.id"]];

//array asosiatif
$mahasiswa=[
    ["gambar"=>"ryan.png",
        "nama"=> "Ryan Proto",
        "nim"=> "12150311480",
        "jurusan"=>"Sistem Informasi",
        "email"=>"12150311480@students.uin-suska.ac.id",
        ],
    ["gambar"=>"agung.png",
        "nama"=> "Agung Hapsah",
        "nim"=> "3209430432",
        "jurusan"=>"DKV",
        "email"=>"3209430432@students.uin-suska.ac.id",
    ]
]
?>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs):?>
    <ul>
        <li>
            <img src="img/<?=$mhs["gambar"]?>" alt="">
        </li>
        <li>Nama : <?=$mhs["nama"]?></li>
        <li>NIM : <?=$mhs["nim"]?></li>
        <li>Jurusan : <?=$mhs["jurusan"]?></li>
        <li>Email : <?=$mhs["email"]?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>
