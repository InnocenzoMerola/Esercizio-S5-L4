<?php

include_once __DIR__ . "/MaterialeBibliotecario.php";

class Dvd extends MaterialeBibliotecario {

    public $regista;
    public static $nTotaliDvd = 0;


    function __construct($titolo, $annoPubblicazione, $regista)
    {
        parent::__construct($titolo, $annoPubblicazione);
        $this->regista = $regista;
        self::$nTotaliDvd++;
    }

    public static function contaDvd(){
        return self::$nTotaliDvd;
    }

}