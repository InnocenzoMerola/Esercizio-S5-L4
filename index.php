<?php

include_once __DIR__ . "/MaterialeBibliotecario.php";
include_once __DIR__ . "/Dvd.php";
include_once __DIR__ . "/Libro.php";

echo "<h1>Libri</h1>";
$libro = new Libro('Buonasera', 2022, 'Luigi');
echo $libro->titolo;
echo "<br>";
echo $libro->annoPubblicazione;
echo "<br>";
echo $libro->autore;
echo "<br>";


$libro = new Libro('agreg', 2012, 'sfagre');
echo "<br>";
echo $libro->titolo;
echo "<br>";
echo $libro->annoPubblicazione;
echo "<br>";
echo $libro->autore;
echo "<br>";
echo "<br>";
echo "Numero totale di libri: ";
echo $libro->contaLibri(); 
echo "<br>";
echo "<br>";

echo "Libri Prestati: ";
// echo $libro->presta();

echo "<h1>DVD</h1>";
$dvd = new Dvd('Il signore degli anelli', 2004, 'fsgasf');
echo $dvd->titolo;
echo "<br>";
echo $dvd->annoPubblicazione;
echo "<br>";
echo $dvd->regista;
echo "<br>";
echo "<br>";

$dvd = new Dvd('Il signore dei gioielli', 2024, 'ajeje');
echo $dvd->titolo;
echo "<br>";
echo $dvd->annoPubblicazione;
echo "<br>";
echo $dvd->regista;
echo "<br>";
echo "<br>";


echo "Numero totale di DVD: ";
echo $dvd->contaDvd();
echo "<br>";
echo "<br>";
echo "Dvd Prestati: ";
// echo $dvd->presta();
echo "<br>";
echo "Restituiti: ";
// $dvd->restituisci();

echo "<h1>Totale Materiali</h1>";
echo MaterialeBibliotecario::$contatoreMateriali;