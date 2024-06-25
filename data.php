<?php

require_once __DIR__ . "/models/Product.php";
require_once __DIR__ . "/models/Item.php";
require_once __DIR__ . "/models/Cuccia.php";
require_once __DIR__ . "/models/Cibo.php";
require_once __DIR__ . "/models/Gioco.php";

$prodotti = [
    new Cuccia(
        new Item("cuccia per doggo", "bla bla cane"),
        "cane",
        12.99,
        120
    ),

    new Gioco(
        new Item("cuccia per katzen", "bla bla gatto"),
        "gatto",
        12.99,
        120
    ),

    new Cibo(
        new Item("cibo per falchi cacciaotri di bambini", "bla bla pollo"),
        "pennuto",
        12.99,
        120,
        "pollo e manzo",
    ),

    new Cuccia(
        new Item("cuccia per canguri boh", "bla bla canguro"),
        "canarino",
        12.99,
        120
    ),
];
