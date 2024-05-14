<?php

include_once __DIR__ . "/MaterialeBibliotecario.php";

class Dvd extends MaterialeBibliotecario {

    protected $regista;
    static protected $contatoreMateriali = 0;
    


    function __construct($titolo, $annoPubblicazione, $regista)
    {
        parent::__construct($titolo, $annoPubblicazione);
        $this->regista = $regista;
        self::$contatoreMateriali++;
    }

    public static function contaDvd(){
        return self::$contatoreMateriali;

    }

}