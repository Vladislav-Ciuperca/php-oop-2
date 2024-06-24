<?php

class animale
{

    public $cane;
    public $gatto;
    public $pennuto;

    public function __construct(Item $item,  $animale,  $prezzo,)
    {
        $this->item = $item;
        $this->animale = $animale;
        $this->prezzo = $prezzo;
    }
}
