<?php

require_once __DIR__ . "/models/Product.php";
require_once __DIR__ . "/models/Item.php";

$prodotti = [
    new Product(
        "cane",
        12.50,
        new Item("cuccia per doggo", "bla bla lorem")
    )
];
