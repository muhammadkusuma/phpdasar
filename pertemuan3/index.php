<?php
//     pengulangan for, while, do while, foreach
echo "for".PHP_EOL;
echo "<br>";
for ($i=0; $i <5 ; $i++) {
    echo "Hello World!".PHP_EOL;
    echo "<br>";
}
echo "while".PHP_EOL;
echo "<br>";
$a=0;
while ($a <= 10) {
    echo "Hello World!".PHP_EOL;
    echo "<br>";
    $a++;
}

echo "do while".PHP_EOL;
echo "<br>";
$b=0;
do {
    echo "Hello World!".PHP_EOL;
    echo "<br>";
    $b++;
} while ($b <= 10);
// pengkondisian if..else, if..else if..else, ternary, switch
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris{
            background-color:silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            // for ($i=1; $i <= 3; $i++) { 
                // echo "<tr>";
                // for ($j=0; $j <=5 ; $j++) { 
                    // echo "<td>$i,$j</td>";
                // }
                // echo "</tr>";
            // }
        // ?>
        <?php for ($i=1; $i<=5 ; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
            <tr class="warna-baris">
                <?php else :?>
                <tr></tr>
            <?php endif;?>
                <?php for ($j=1; $j<= 5 ; $j++) : ?> 
                    <td><?= "$i, $j";?></td>
                <?php endfor;?>
            </tr>
        <?php endfor; ?>

    </table>
</body>
</html>