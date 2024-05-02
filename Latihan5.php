<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Latihan 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307028">
    <meta name="author" content="Tria Wilujeng Rahayu">
</head>
<body>
    <h1>Halaman PHP Ajeng</h1>

    <?php 
    $warna = "merah"; // Jika ini hijau maka akan menjalankan perintah case "hijau", jika kuning maka case "kuning"
    switch ($warna) {
        case "merah":
            echo "warna adalah merah";
            break;
        case "kuning":
            echo "warna adalah kuning";
            break;
        case "hijau":
            echo "warna adalah hijau";
            break;
        default:
            echo "warna tidak dikenal!";
    }
    echo "<br>";
    ?>
</body>
</html>