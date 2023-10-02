<?php
include __DIR__ . "./db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"
        defer></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($all_production as $product): ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <?php echo $product->GetDetails() ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>




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