<?php

include_once __DIR__ . "/MaterialeBibliotecario.php";
include_once __DIR__ . "/Dvd.php";
include_once __DIR__ . "/Libro.php";

// echo "<h1>Libri</h1>";
$libro1 = new Libro('Buonasera', 2020, 'Luigi');
$libro2 = new Libro('Buonasera 2', 2022, 'Luigi');
$libro3 = new Libro('Buonasera 3', 2023, 'Luigi');
// echo $libro->titolo;
// echo "<br>";
// echo $libro->annoPubblicazione;
// echo "<br>";
// echo $libro->autore;
// echo "<br>";



// echo "<h1>DVD</h1>";
$dvd1 = new Dvd('Il signore degli anelli', 2004, 'fsgasf');
$dvd2 = new Dvd('Il signore degli anelli 2', 2008, 'fsgasf');
$dvd3 = new Dvd('Il signore degli anelli 3', 2014, 'fsgasf');
// echo $dvd->titolo;
// echo "<br>";
// echo $dvd->annoPubblicazione;
// echo "<br>";
// echo $dvd->regista;
// echo "<br>";
// echo "<br>";

echo "Numero di materiali: ".MaterialeBibliotecario::contaMateriali(). "<br>";


// echo "Libri Prestati: ";
// $libro->presta();
// echo "<br>";
// echo "<br>";

// echo "Dvd Prestati: ";
// $dvd->presta();
// echo "<br>";
// echo "<br>";
 

echo "<h1>Totale Materiali</h1>";
echo "Numero di libri: ".Libro::contaLibri(). "<br>";
echo "Numero di DVD: ".Dvd::contaDvd(). "<br>";
echo "Numero di materiali: ".MaterialeBibliotecario::contaMateriali(). "<br>";