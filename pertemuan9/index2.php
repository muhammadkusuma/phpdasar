<?php
    $conn=mysqli_connect("localhost","admin","!Password123","phpdasar");

    $result=mysqli_query($conn, "SELECT * FROM mahasiswa");

//    ambil data (fecth) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // memngembalikan array asosiatif
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object() //
//    while ($row=mysqli_fetch_row($result)){
//
//    }


    ?>

<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

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
        <?php $i=1;?>
        <?php while ($row =mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?= $i;?></td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td><img src="img/<?php echo $row["gambar"]?>" width="50" alt=""></td>
            <td><?= $row["nrp"]?></td>
            <td><?= $row["nama"]?></td>
            <td><?= $row["email"]?></td>
            <td><?= $row["jurusan"]?></td>
        </tr>
        <?php $i++;?>
        <?php endwhile;?>
    </table>
</body>
</html>