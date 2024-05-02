<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Latihan 9</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307028">
    <meta name="author" content="Tria Wilujeng Rahayu">
</head>
<body>
    <h1>Halaman PHP Ajeng</h1>

    <?php

     // contoh fungsi
     function writeMsg($nama) {
        echo "selamat datang " . $nama." <br> ";
     }
     writeMsg(nama:"Ahmad"); // pemanggilan fungsi

     // fungsi dengan mengirim nilai balik
     function tambah(int $angka1, int $angka2) {
        $a= $angka1+$angka2;
        return $a; // mengirim nilai $a ke pemanggil
     }

    $hasil=tambah(angka1:5, angka2:5);
    echo ($hasil);
    ?>
</body>
</html>