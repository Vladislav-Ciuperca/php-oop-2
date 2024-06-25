<?php

class Cuccia extends Product
{
    private $grandezza;

    public function __construct(item $item, $animale, $prezzo, $grandezza)
    {
        $this->item = $item;
        $this->animale = $animale;
        $this->prezzo = $prezzo;

        $this->grandezza = $grandezza;
    }


    public function descrizione()
    {
        return "Animale " . $this->animale .
            " nome:" . $this->item->nome .
            " Prezzo " . $this->prezzo .
            " desc: " . $this->item->desc. 
            " grandezza " . $this->grandezza;
    }
}
