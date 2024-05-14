<?php

include_once __DIR__ . "/interfaces/Prestito.php";
// include_once __DIR__ . "/Libro.php";
// include_once __DIR__ . "/Dvd.php";


abstract class MaterialeBibliotecario implements Prestito
{

    public static $contatoreMateriali = 0;

    
    public $titolo;
    public $annoPubblicazione;

   function __construct($titolo, $annoPubblicazione)
   {
    $this->titolo = $titolo;
    $this->annoPubblicazione = $annoPubblicazione;
    self::$contatoreMateriali++;
   }

   public function presta()
   {
       echo self::$contatoreMateriali--;
   }

   public function restituisci()
    {
        echo self::$contatoreMateriali++;
    }
}