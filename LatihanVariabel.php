<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Latihan Variabel PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307028">
    <meta name="author" content="Tria Wilujeng Rahayu">
</head>
<body>
    <h1>Halaman PHP Ajeng</h1>

    <?php
    // Membuat array yang berisi nama-nama hari
    $hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

    // Menampilkan nama hari menggunakan looping
    foreach ($hari as $index => $nama) {
        echo "Hari ke-" . ($index+1) . ": " . $nama . "<br>";
    }
    ?>
</body>
</html>