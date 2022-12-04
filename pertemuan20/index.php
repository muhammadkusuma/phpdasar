<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<html>

<head>
    <title>Halaman Admin</title>
    <style>
        .loader{
            width:50px;
            position: absolute;
            top: 125px;
            left: 350px;
            z-index: -1;
            display: none;
        }
    </style>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/script.js"></script>

</head>

<body>
    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data Mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian.." autocomplete="off" id="keyword">
        <button type="submit" name="cari" name="cari" id="tombol-cari">Cari!</button>
        <img src="img/loading.gif" alt="" class="loader">
    </form>
    <br>
    <div id="container">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin');">hapus</a>
                    </td>
                    <td><img src="img/<?php echo $row["gambar"] ?>" width="50" alt=""></td>
                    <td><?= $row["nrp"] ?></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["email"] ?></td>
                    <td><?= $row["jurusan"] ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach;; ?>
        </table>
    </div>

</body>

</html>