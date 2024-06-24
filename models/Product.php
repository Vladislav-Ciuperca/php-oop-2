<?php
require_once __DIR__ . "/Item.php";

class Product
{
    public $item;
    public $animale;
    public $prezzo;

    public function __construct($animale, $prezzo, Item $item)
    {
        $this->item = $item;
        $this->animale = $animale;
        $this->prezzo = $prezzo;
    }

    public function descrizione()
    {
        return "Animale " . $this->animale . " Prezzo " . $this->prezzo . " nome:" . $this->item->nome . "desc:" . $this->item->desc; 
    }
}
