<?php

include_once __DIR__ . "/MaterialeBibliotecario.php";

class Libro extends MaterialeBibliotecario
{
    static protected $contatoreMateriali = 0;
    protected $autore;

    function __construct($titolo, $annoPubblicazione, $autore)
    {
        parent::__construct($titolo, $annoPubblicazione);
        $this->autore = $autore;
        self::$contatoreMateriali++;
    }

    public static function contaLibri()
    {
        return self::$contatoreMateriali;
    }

  
}