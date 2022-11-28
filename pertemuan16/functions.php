<?php
// $conn=mysqli_connect("localhost","admin","!Password123","phpdasar");

$host = "localhost";
$port = 3306;
$database = "phpdasar";
$username = "admin";
$password = "!Password123";

$conn = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);

function query($query)
{
    //     global $conn;
    //     $result=mysqli_query($conn,$query);
    //     $rows=[];
    //     while($row = mysqli_fetch_assoc($result) ){
    //         $rows[]=$row
    //     }

    //     return $rows;
    global $conn;
    $result = $conn->query($query);
    $rows = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $rows[] = $row;
    }

    return $rows;
}

// if (isset($_POST["submit"])){
//     // global $conn;

//     // $nrp= htmlspecialchars($data["nrp"]) ;
//     // $nama=htmlspecialchars($data["nama"]) ;
//     // $email=htmlspecialchars($data["email"]) ;
//     // $jurusan=htmlspecialchars($data["jurusan"]) ;
//     // $gambar=htmlspecialchars($data["gambar"]) ;

//     // $query="INSERT INTO mahasiswa VALUES ('','$nrp','$nama','$email','$jurusan','$gambar')";
//     // $conn->exec($query);
//     // mysqli_query($conn, $query);

//     // return mysqli_affected_rows($conn);  
// }

function tambah($data)
{
    global $conn;
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // $gambar=htmlspecialchars($data["gambar"]) ;
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO mahasiswa (nama, nrp, email, jurusan, gambar) VALUES ('$nama','$nrp','$email','$jurusan','$gambar')";
    $conn->exec($query);
    // mysqli_query($conn, $query);

    return $conn->lastInsertId();
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error == 4) {
        echo "<script>
            alert('pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
            alert('file yang diupload bukan gambar');
        </script>";
        return false;
    }

    if ($ukuranFile > 5000000) {
        echo "<script>
            alert('ukuran gambar terlalu besar, dibawah 5Mb');
        </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}


function hapus($id)
{
    // global $conn;
    // mysqli_query($conn,"DELETE FROM mahasiswa WHERE id=$id");

    // return mysqli_affected_rows($conn);
    global $conn;
    $sql = "DELETE FROM mahasiswa WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->rowCount();
}


function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


    $query = "UPDATE mahasiswa SET nama='$nama',nrp='$nrp',email='$email',jurusan='$jurusan',gambar='$gambar' WHERE id=$id";
    $conn->exec($query);
    // mysqli_query($conn, $query);

    return $conn->lastInsertId();
}

function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nrp LIKE '%$keyword%' OR email LIKE '%$keyword%' OR jurusan LIKE '%$keyword%'";

    return query($query);
}

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    // $password = mysqli_real_escape_string($conn, $data["password"]);
    // $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $password= $data["password"];
    $password2= $data["password2"];

    // mysqli_query($conn, "SELECT user VALUES ('','$username','$password' WHERE username='$username'");
    $query = "SELECT user VALUES ('','$username','$password' WHERE username='$username')";
    // if (mysqli_affected_rows($conn) > 0) {
    //     echo "<script>
    //         alert('username sudah terdaftar');
    //     </script>";
    //     return false;
    // }

    if($conn->lastInsertId()){
        echo "<script>
            alert('username sudah terdaftar');
        </script>";
        return false;
    }

    if ($password !== $password2) {
        echo "<script>
            alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql="INSERT INTO user (username, password) VALUES ('$username','$password')";
    $conn->exec($sql);

    return $conn->lastInsertId();
}
