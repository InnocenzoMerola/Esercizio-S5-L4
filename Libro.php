<?php

include_once __DIR__ . "/MaterialeBibliotecario.php";

class Libro extends MaterialeBibliotecario
{
    public $autore;
    public static $nTotaleLibri = 0;

    function __construct($titolo, $annoPubblicazione, $autore)
    {
        parent::__construct($titolo, $annoPubblicazione);
        $this->autore = $autore;
        self::$nTotaleLibri++;
    }

    public static function contaLibri(){
        return self::$nTotaleLibri;
    }


  
}