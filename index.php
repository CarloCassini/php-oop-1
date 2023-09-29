<?php
include __DIR__ . "./db.php";

// var_dump($movie_1);
// var_dump($movie_2)
var_dump($categoria_1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>stampo il titolo del primo film</h1>
    <h3>
        <?php echo $movie_1->title ?>
    </h3>
    <h1>stampo il titolo dopo aver chiamato il metodo per le lettere maiuscole</h1>

    <h3>
        <?php
        $movie_1->TitleUpperCase();
        echo $movie_1->title ?>
    </h3>
</body>

</html>