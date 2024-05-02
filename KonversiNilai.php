<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Konversi Nilai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307028">
    <meta name="author" content="Tria Wilujeng Rahayu">
</head>
<body>
    <h1>Halaman PHP Ajeng</h1>
    <h2>Konversi Nilai Angka ke Huruf</h2>
    <form action="KonversiNilai.php" method="get">
        Masukkan nilai angka: 
        <input type="number" name="nilai" required>
        <input type="submit" value="Konversi">
    </form>

    <?php
    if (isset($_GET["nilai"])) {
        // Ambil nilai dari URL
        $nilai = $_GET["nilai"];

        // Fungsi untuk mengonversi nilai angka ke huruf
        function KonversiNilai($nilai) {
            if ($nilai >= 0 && $nilai <= 56) {
                return "C";
            } elseif ($nilai >= 60 && $nilai <= 69) {
                return "BC";
            } elseif ($nilai >= 70 && $nilai <= 79) {
                return "B";
            } elseif ($nilai >= 80 && $nilai <= 89) {
                return "AB";
            } elseif ($nilai >= 90 && $nilai <= 100) {
                return "A";
            } else {
                return "Nilai tidak valid";
            }
        }

        // Memanggil fungsi KonversiNilai dan menampilkan hasil
        $nilaiHuruf = KonversiNilai($nilai);
        echo "<br>===========================================";
        echo "<br>Range dari nilai angka <b>$nilai</b> setara dengan nilai huruf: <b>$nilaiHuruf</b>";
        echo "<br>===========================================";
    }
    ?>
</body>
</html>
