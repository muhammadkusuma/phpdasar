<html>
<head>
    <title>POST</title>
</head>
<body>
<?php if (isset($_POST["submit"])) : ?>
<h1>Selamat Datang, <?= $_POST["provinsi"]?></h1>
<?php endif;?>
<form action="" method="post">
    Masukan Provinsi:
    <input type="text" name="provinsi">
    <br>
    <button type="submit" name="submit">Kirim!</button>
</form>
<form action="latihan4.php" method="post">
    Masukan nama:
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim!</button>
</form>
</body>
</html>