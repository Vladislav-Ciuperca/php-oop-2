<?php

require_once __DIR__ . "/models/Product.php";
require_once __DIR__ . "/models/Item.php";
require_once __DIR__ . "/models/Cuccia.php";
require_once __DIR__ . "/models/Cibo.php";
require_once __DIR__ . "/models/Gioco.php";

$prodotti = [
    new Cuccia(
        new Item("cuccia per doggo", "bla bla lorem"),
        "cane",
        12.50,
        120
    ),

    new Gioco(
        new Item("cuccia per doggo", "bla bla lorem"),
        "cane",
        12.50,
        120
    ),

    new Cibo(
        new Item("cuccia per doggo", "bla bla lorem"),
        "cane",
        12.50,
        120,
        "pollo e manzo",
    ),

    new Product(
        new Item("cuccia per doggo", "bla bla lorem"),
        "cane",
        12.50,
        120
    ),
];
