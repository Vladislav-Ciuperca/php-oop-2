<?php
require_once __DIR__ . "/data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>hellp OOP 2</h1>

    <ul>
        <?php foreach ($prodotti as $prodotto) { ?>
            <li>
                <?php echo $prodotto->descrizione(); ?><br>
            </li>
        <?php } ?>
    </ul>

</body>

</html>