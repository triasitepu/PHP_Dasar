<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Latihan 7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307028">
    <meta name="author" content="Tria Wilujeng Rahayu">
</head>
<body>
    <h1>Halaman PHP Ajeng</h1>

    <?php
    $namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
    echo "saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ". <br>";

    // tampilkan Mangga
    echo "saya suka " . $namaBuah[1] . "<br>";
    // tampilkan Jeruk
    echo "saya suka " . $namaBuah[2] . "<br>";
    // tampilkan Apel
    echo "saya suka " . $namaBuah[3] . "<br>";
    // tampilkan Melon
    echo "saya suka " . $namaBuah[4] . "<br>";

    // array dengan spesifik index
    $umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"90 Tahun");
    $umur['ahmad']="50 tahun";
    echo "Umur andi adalah " . $umur['Andi'] . "<br>";

    //tampilkan semua umur
    echo "Umur ben adalah " . $umur['Ben'] . "<br>";
    echo "Umur joe adalah " . $umur['Joe'] . "<br>";
    echo "Umur ahmad adalah " . $umur['ahmad'] . "<br>";
    ?>

</body>
</html>