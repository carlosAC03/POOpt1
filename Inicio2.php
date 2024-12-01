<?php
include_once "CintaVideo.php";
include_once "Dvd.php";
include_once "Juego.php";
include_once "Cliente.php";

$cliente = new Cliente("Bruce Wayne", 1);

$soporte1 = new CintaVideo("Los Cazafantasmas", 1, 3.5, 120);
$soporte2 = new Dvd("Origen", 2, 4.5, "es,en,fr", "16:9");
$soporte3 = new Juego("The Last of Us Part II", 3, 49.99, "PS4", 1, 2);

// Alquilar soportes
$cliente->alquilar($soporte1);
$cliente->alquilar($soporte2);
$cliente->alquilar($soporte3);

// Listar alquileres
$cliente->listarAlquileres();

// Devolver un soporte
$cliente->devolver(2);

// Listar alquileres nuevamente
$cliente->listarAlquileres();
?>
