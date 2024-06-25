<?php

class Cibo extends Product
{
    private $peso;
    private $composizione;

    public function __construct(item $item, $animale, $prezzo, $peso, $composizione)
    {
        $this->item = $item;
        $this->animale = $animale;
        $this->prezzo = $prezzo;

        $this->peso = $peso;
        $this->composizione = $composizione;
    }


    public function descrizione()
    {
        return "Animale " . $this->animale .
            " nome:" . $this->item->nome .
            " Prezzo " . $this->prezzo .
            " desc: " . $this->item->desc. 
            " grandezza " . $this->peso.
            " composizione " . $this->composizione;
    }
}
