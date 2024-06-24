<?php

include __DIR__ . "/models/Product.php";
include __DIR__ . "/models/Item.php";

$prodotti = [
    new Product(
        "cane",
        12.50,
        new Item("cuccia per doggo", "bla bla lorem")

    )
];
