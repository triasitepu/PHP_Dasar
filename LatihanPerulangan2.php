<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Latihan Perulangan 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307028">
    <meta name="author" content="Tria Wilujeng Rahayu">
</head>
<body>
    <h1>Halaman PHP Ajeng</h1>

    <?php
    $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

    foreach ($angka as $nomor) {
        if ($nomor % 2 == 0) {
            echo "Nomor : $nomor Genap<br>";
        } else {
            echo "Nomor : $nomor Ganjil<br>";
        }
    }
    ?>

</body>
</html>