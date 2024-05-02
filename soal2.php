<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Soal 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307028">
    <meta name="author" content="Tria Wilujeng Rahayu">
</head>
<body>
    <h1>Halaman PHP Ajeng</h1>
    <?php
    // Jumlah uang yang akan diambil
    $jumlahUang = 1387500;

    // Daftar pecahan uang
    $pecahanUang = array(
        100000, 50000, 20000, 10000, 5000, 2000, 500
    );

    // Inisialisasi array untuk menyimpan jumlah masing-masing pecahan
    $jumlahPecahan = array();

    // Iterasi untuk menghitung jumlah masing-masing pecahan
    foreach ($pecahanUang as $pecahan) {
        $jumlah = floor($jumlahUang / $pecahan);
        $jumlahPecahan[$pecahan] = $jumlah;
        $jumlahUang -= $jumlah * $pecahan;
    }

    // Menampilkan hasil
    foreach ($jumlahPecahan as $pecahan => $jumlah) {
        echo "Pecahan Rp. " . number_format($pecahan, 0, ',', '.') . " sebanyak $jumlah lembar<br>";
    }
    ?>

</body>
</html>