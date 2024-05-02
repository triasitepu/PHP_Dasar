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
function hariIndo ($hariInggris) {
  switch ($hariInggris) {
    case 'Sunday':
      return 'Minggu';
    case 'Monday':
      return 'Senin';
    case 'Tuesday':
      return 'Selasa';
    case 'Wednesday':
      return 'Rabu';
    case 'Thursday':
      return 'Kamis';
    case 'Friday':
      return 'Jumat';
    case 'Saturday':
      return 'Sabtu';
    default:
      return 'hari tidak valid';
  }
}

$hariBahasaInggris = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
foreach ($hariBahasaInggris as $hari) {
  $hariBahasaIndonesia = hariIndo($hari);
  echo "$hari <br>";
  echo "Bahasa Indonesia: $hariBahasaIndonesia <br><br>";
}
?>
</body>
</html>