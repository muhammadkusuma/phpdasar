<?php
// $conn=mysqli_connect("localhost","admin","!Password123","phpdasar");

$host="localhost";
$port=3306;
$database="phpdasar";
$username="admin";
$password="!Password123";

$conn=new PDO("mysql:host=$host;port=$port;dbname=$database",$username,$password);

function query($query){
//     global $conn;
//     $result=mysqli_query($conn,$query);
//     $rows=[];
//     while($row = mysqli_fetch_assoc($result) ){
//         $rows[]=$row
//     }

//     return $rows;
    global $conn;
    $result=$conn->query($query);
    $rows=[];
    while($row = $result->fetch(PDO::FETCH_ASSOC) ){
        $rows[]=$row;
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

function tambah($data){
    global $conn;
    $nrp= htmlspecialchars($data["nrp"]) ;
    $nama=htmlspecialchars($data["nama"]) ;
    $email=htmlspecialchars($data["email"]) ;
    $jurusan=htmlspecialchars($data["jurusan"]) ;
    $gambar=htmlspecialchars($data["gambar"]) ;

    $query="INSERT INTO mahasiswa (nama, nrp, email, jurusan, gambar) VALUES ('$nama','$nrp','$email','$jurusan','$gambar')";
    $conn->exec($query);
    // mysqli_query($conn, $query);

    return $conn->lastInsertId(); 
}


function hapus($id){
    // global $conn;
    // mysqli_query($conn,"DELETE FROM mahasiswa WHERE id=$id");

    // return mysqli_affected_rows($conn);
    global $conn;
    $sql="DELETE FROM mahasiswa WHERE id=:id";
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->execute();

    return $stmt->rowCount();

}


?>