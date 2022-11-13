<?php
    function salam($waktu = "Datang", $nama = "Admin"){
        return "Selamat $waktu, $nama!";
    }
?>
<html>
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi","Wira");?></h1>
</body>
</html>
