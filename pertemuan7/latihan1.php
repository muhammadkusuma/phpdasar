<?php
//    $x=10;
//
//    function tampilX(){
//        global $x;
//        echo $x;
//    }
//
//    tampilX();
//    echo "<br>";
//    echo $x;
//$_GET["nama"]="Wira";
//$_GET["nim"]=12150311480;
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
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach ($mahasiswa as $mhs):?>
        <li><a href="latihan2.php?
        gambar=<?=$mhs["gambar"]?>
        &nama=<?=$mhs["nama"];?>
        &nim=<?=$mhs["nim"]?>
        &jurusan=<?=$mhs["jurusan"]?>
        &email=<?=$mhs["email"]?>
        "><?=$mhs["nama"];?></a></li>
    <?php endforeach;?>
</ul>

</body>
</html>
