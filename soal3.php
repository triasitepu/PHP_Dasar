<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Soal 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307028">
    <meta name="author" content="Tria Wilujeng Rahayu">
</head>
<body>
    <h1>Halaman PHP Ajeng</h1>

    <?php
    // Data siswa
    $siswa = array(
        array("No Urut" => 1, "Poin" => 75, "Siswa" => "Adi"),
        array("No Urut" => 2, "Poin" => 80, "Siswa" => "Joni"),
        array("No Urut" => 3, "Poin" => 65, "Siswa" => "Jihan"),
        array("No Urut" => 4, "Poin" => 70, "Siswa" => "Aya"),
        array("No Urut" => 5, "Poin" => 85, "Siswa" => "Ita"),
        array("No Urut" => 6, "Poin" => 90, "Siswa" => "Budi"),
        array("No Urut" => 7, "Poin" => 95, "Siswa" => "Tini"),
        array("No Urut" => 8, "Poin" => 65, "Siswa" => "Sari")
    );

    // a) Tampilkan poin siswa dengan nomor urut 5
    echo "Poin siswa dengan nomor urut 5 = " . $siswa[4]["Poin"] . "<br>";

    // b) Tampilkan semua nama siswa yang memiliki poin >= 90
    echo "Nama siswa dengan poin 90 = ";
    foreach ($siswa as $data) {
        if ($data["Poin"] == 90) {
            echo $data["Siswa"] . "<br>";
        }
    }

    // c) Tampilkan semua nama siswa yang memiliki poin = 100 (hasil: tidak ada)
    echo "Nama siswa yang memiliki poin 100 = ";
    $found = false;
    foreach ($siswa as $data) {
        if ($data["Poin"] == 100) {
            echo $data["Siswa"] . "<br>";
            $found = true;
        }
    }
    if (!$found) {
        echo "Tidak ada";
    }
    ?>

</body>
</html>