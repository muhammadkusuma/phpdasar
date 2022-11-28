<?php
require 'functions.php';

$id=$_GET["id"];

$mhs=query("SELECT * FROM mahasiswa WHERE id=$id")[0];




if (isset($_POST["submit"])){
    // var_dump(ubah($_POST));

    if (ubah($_POST)==0){
        echo "
            <script>
               alert('data berhasil diubah');
               document.location.href='index.php';
            </script>
        ";
    }else {
        echo "
            <script>
               alert('data gagal diubah');
               document.location.href='index.php';
            </script>
        ";
    }
}
?>

<html>
<head>
    <title>TUbah Data Mahasiswa</title>
</head>
<body>
<h1>Ubah Data Mahasiswa</h1>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mhs["id"];?>">
    <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]?>">
    <ul>
        <li>
            <label for="nrp">NRP : </label>
            <input type="text" name="nrp" id="nrp" value="<?= $mhs["nrp"] ?>">
        </li>
        <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" value="<?= $mhs["nama"] ?>">
        </li>
        <li>
            <label for="email">Email : </label>
            <input type="email" name="email" id="email" value="<?= $mhs["email"] ?>">
        </li>
        <li>
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"] ?>">
        </li>
        <li>
            <label for="gambar">Gambar : </label>
            <br>
            <img src="img/<?= $mhs["gambar"]?>" width="100px" height="auto" alt="">
            <br>
            <input type="file" name="gambar" id="gambar" >
        </li>
        <li>
            <button type="submit" name="submit">Ubah Data</button>
        </li>
    </ul>
</form>
</body>
</html>