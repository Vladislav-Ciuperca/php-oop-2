<?php
class Item
{
    public $nome;
    public $desc;

    public function __construct($nome, $desc)
    {
        $this->nome = $nome;
        $this->desc = $desc;
    }
}
