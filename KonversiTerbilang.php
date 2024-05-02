<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Konversi Terbilang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307028">
    <meta name="author" content="Tria Wilujeng Rahayu">
</head>
<body>
    <h1>Halaman PHP Ajeng</h1>
    <h2>Konversi Nilai Angka ke Terbilang</h2>
    <form action="KonversiTerbilang.php" method="get">
        Masukkan angka (1-9): 
        <input type="number" name="angka" min="1" max="9" required>
        <input type="submit" value="Konversi">
    </form>

    <?php
    if (isset($_GET["angka"])) {
        // Ambil nilai dari URL
        $angka = $_GET["angka"];

        function KonversiTerbilang($angka) {
        switch ($angka) {
            case 1:
                return "satu";
                break;
            case 2:
                return "dua";
                break;
            case 3:
                return "tiga";
                break;
            case 4:
                return "empat";
                break;
            case 5:
                return "lima";
                break;
            case 6:
                return "enam";
                break;
            case 7:
                return "tujuh";
                break;
            case 8:
                return "delapan";
                break;
            case 9:
                return "sembilan";
                break;
            default:
                return "Angka tidak valid";
                break;
            }
        }

        // Memanggil fungsi KonversiTerbilang dan menampikan hasil
        $terbilang = KonversiTerbilang($angka);
        echo "<br>===========================================";
        echo "<br>Angka <b>$angka</b> dalam terbilang adalah <b>$terbilang</b>";
        echo "<br>===========================================";
    }
    ?>
</body>
</html>