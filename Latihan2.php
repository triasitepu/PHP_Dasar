<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2 PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307028">
    <meta name="author" content="Tria Wilujeng Rahayu">
</head>
<body>
    <?php
    // variabel dalam php
    $txt = "Selamat datang !";
    $txt2 = "Politeknik Negeri Madiun";
    $x = 5;
    $y = 10.5;

    echo "<p>isi Variabel txt adalah: $txt</p>";
    echo "<p>isi Variabel x adalah: $x</p>";
    echo "<p>isi Variabel y adalah: $y</p>";
    echo "Belajar PHP di " . $txt2 . "<br>";
    echo $x + $y;

    // PHP konstanta
    define("nama_konstanta", "{Ajeng}");
    echo "<br>".nama_konstanta;
    ?>
</body>
</html>