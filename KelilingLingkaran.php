<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Keliling Lingkaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307028">
    <meta name="author" content="Tria Wilujeng Rahayu">
</head>
<body>
    <h1>Halaman PHP Ajeng</h1>

    <?php
    // Mendefinisikan nilai jari-jari lingkaran
    $jari_jari = 15;

    // Menghitung keliling lingkaran
    $keliling = 2 * pi() * $jari_jari;

    // Menampilkan hasil keliling lingkaran
    echo "Keliling lingkaran dengan jari-jari $jari_jari cm adalah: $keliling cm";
    ?>
    
</body>
</html>