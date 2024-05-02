<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Latihan 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307028">
    <meta name="author" content="Tria Wilujeng Rahayu">
</head>
<body>
    <h1>Halaman PHP Ajeng</h1>

    <?php
    /* Operator logika yang bisa digunakan
    * ==  Sama Dengan       $x == $y
    * === Identical         $x === $y
    * !=  Tidak sama dengan $x != $y
    * <>  Tidak sama dengan $x <> $y
    * !== Not identical     $x !== $y
    * >   Lebih Besar dari  $x > $y
    * <   Kurang Dari       $x < $y
    * >=  Lebih besar atau Sama dengan $x >= $y
    * <=  Kurang dari atau sama dengan $x <= $y
    * <=> Spaceship $x <=> $y
    */

    $t = date(format:"H"); // mendapatkan jam dengan format 1-24
    echo "If <br>";
    if ($t < 16) {
        echo "Selamat siang!";
    }

    // Tambahkan kode dibawah ini untuk if else
    $t = date(format: "H"); // mendapatkan jam dengan format 1-24
    echo "<br> If dan Else <br>";
    if ($t < 20) {
        echo "Selamat siang!";
    } else {
        echo "Selamat malam!";
    }

    // Tambahkan kode dibawah ini untuk nested if
    $t = date(format: "H"); // mendapatkan jam dengan format 1-24
    echo "<br> Nested If <br>";
    if ($t < 12) {
        echo "Selamat pagi!";
    } elseif ($t < 16) {
        echo "Selamat sore!";
    } else {
        echo "Selamat malam!";
    }
    ?>
</body>
</html>
