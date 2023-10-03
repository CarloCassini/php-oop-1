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
                        <?php echo $product->GetDetails();
                            // scrivi hurrà solo se si tratta di un film
                            if (get_class($product) == 'Movie') {

                                $product->SayHurra();
                            }
                            ?>
                    </div>

                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>

</body>

</html>