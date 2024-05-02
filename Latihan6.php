<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Latihan 6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307028">
    <meta name="author" content="Tria Wilujeng Rahayu">
</head>
<body>
    <h1>Halaman PHP Ajeng</h1>
    <?php
    // While loop
    echo "while loop<br>";
    $x = 10;
    while ($x > 5) {
        echo "Nomor : $x<br>";
        $x--;
    }

    // Do while
    echo "<br>do while<br>";
    $x = 1;
    do {
        echo "Nomor : $x <br>";
        $x++;
    } while ($x <= 5);

    // Foreach
    echo "<br>foreach<br>";
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        echo "$value <br>";
    }

    // For 
    echo "<br>for<br>";
    for ($x = 0; $x < 10; $x++) {
        echo "Nomor : $x <br>";
    }

    // For loop dengan break
    echo "<br>for loop dengan break<br>";
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            break;
        }
        echo "Nomor : $x <br>";
    }
    ?>
</body>
</html>