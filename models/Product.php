<?php

class animale
{

    public $item;
    public $animale;
    public $prezzo;

    public function __construct($animale,  $prezzo, Item $item)
    {
        $this->item = $item;
        $this->animale = $animale;
        $this->prezzo = $prezzo;
    }
}
