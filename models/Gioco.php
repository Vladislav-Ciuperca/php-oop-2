<?php

class Gioco extends Product
{
    private $materiale;

    public function __construct(item $item, $animale, $prezzo, $materiale)
    {
        $this->item = $item;
        $this->animale = $animale;
        $this->prezzo = $prezzo;

        $this->materiale = $materiale;
    }


    public function descrizione()
    {
        return "Animale " . $this->animale .
            " nome:" . $this->item->nome .
            " Prezzo " . $this->prezzo .
            " desc: " . $this->item->desc. 
            " grandezza " . $this->materiale;
    }
}
