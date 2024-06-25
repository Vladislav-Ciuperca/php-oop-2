<?php
require_once __DIR__ . "/data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>hellp OOP 2</h1>

    <ul>
        <?php foreach ($prodotti as $prodotto) {
            echo  "<li>" .   $prodotto->descrizione() . "</li>";
        } ?>
    </ul>

    <div class="container">


        <!-- ----------------------------------------------------------------- -->
        <div class="card">
            <!-- immagine -->
            <div class="img_container">
                img placeholder
            </div>
            <!-- info prodotto -->
            <div class="product_info">
                <div>
                    <i class="fa-solid fa-cat"></i>
                    cuccia per catto
                </div>
                <span class="linetru">$12.40</span>
                <div>cuccia per il vero padrone della casa</div>
            </div>
            <!-- badje di "extend" -->
            <div class="badje">
                <div class="badje_info">Grandezza 120x30x30</div>
                <div class="sconto">- 13%</div>
            </div>
        </div>
        <!-- ----------------------------------------------------------------- -->

        <?php foreach ($prodotti as $prodotto) { ?>

            <div class="card">
            <!-- immagine -->
            <div class="img_container">
                img placeholder
            </div>
            <!-- info prodotto -->
            <div class="product_info">
                <div>
                    <i class="fa-solid fa-cat"></i>
                    <?php echo $prodotto->item->nome ?>
                </div>
                <div>
                        <?php echo $prodotto->getPrezzo(). $prodotto->getDiscount()?>
                </div>
                <div><?php echo $prodotto->item->desc ?></div>
            </div>
            <!-- badje di "extend" -->
            <div class="badje">
                <div class="badje_info"><?php  ?></div>
                <div class="sconto">- 13%</div>
            </div>
        </div>

        <?php } ?>

        
    </div>
</body>

</html>