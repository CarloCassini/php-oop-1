<?php
include __DIR__ . "./db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>

        <h1>stampo il titolo del primo film</h1>
        <h3>
            <?php var_dump($movie_1) ?>
        </h3>
        <h1>stampo il titolo dopo aver chiamato il metodo per le lettere maiuscole</h1>

        <h3>
            <?php
            $movie_1->TitleUpperCase();
            var_dump($movie_1) ?>
        </h3>
    </div>
    <div>
        <h1>stampo il titolo del secondo film</h1>
        <h3>
            <?php var_dump($movie_2) ?>
        </h3>
        <h1>stampo il titolo dopo aver chiamato il metodo per le lettere maiuscole</h1>

        <h3>
            <?php
            $movie_1->TitleUpperCase();
            var_dump($movie_2) ?>
        </h3>
    </div>
</body>

</html>