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
            " Prezzo " . ($this->prezzo) - 10 .
            " desc: " . $this->item->desc .
            " grandezza " . $this->peso .
            " composizione " . $this->composizione;
    }

    public function getDiscount()
    {
        $discounted = $this->prezzo - (($this->prezzo)* 13 / 100);
        return " $ " . number_format($discounted,2);
    }

    public function getPrezzo()
    {
        return '<span class="discounted">' . " $ " . $this->prezzo . '</span>';
    }
}
