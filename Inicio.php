<?php
include_once "Soporte.php";
include_once "CintaVideo.php";
include_once "Dvd.php";
include_once "Juego.php";

// Prueba de CintaVideo
$cinta = new CintaVideo("Los Cazafantasmas", 1, 3.5, 120);
$cinta->muestraResumen();

// Prueba de Dvd
$dvd = new Dvd("Origen", 2, 4.5, "es,en,fr", "16:9");
$dvd->muestraResumen();

// Prueba de Juego
$juego = new Juego("The Last of Us Part II", 3, 49.99, "PS4", 1, 2);
$juego->muestraResumen();
?>
