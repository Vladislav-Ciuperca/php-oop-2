<!-- prodotto dove sta la funzione che stampa in pagina -->
<?php

class Product
{
    public $item;
    public $animale;
    public $prezzo;

    public function __construct(Item $item, $animale, $prezzo)
    {
        $this->item = $item;
        $this->animale = $animale;
        $this->prezzo = $prezzo;
    }

    public function descrizione()
    {
        return "Animale " . $this->animale .
            " nome:" . $this->item->nome .
            " Prezzo " . $this->prezzo .
            "desc:" . $this->item->desc;
    }

    public function getPrezzo(){
        return "$ " . $this->prezzo;
    }
    
    public function getDiscount(){}
    
}
