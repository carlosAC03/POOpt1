<?php
include_once "Videoclub.php";

$vc = new Videoclub("Videoclub Severo 8A");

// Incluir productos
$vc->incluirCintaVideo("Los Cazafantasmas", 1, 3.5, 120);
$vc->incluirDvd("Origen", 2, 4.5, "es,en,fr", "16:9");
$vc->incluirJuego("The Last of Us Part II", 3, 49.99, "PS4", 1, 2);

// Incluir socios
$vc->incluirSocio("Bruce Wayne");
$vc->incluirSocio("Clark Kent");

// Listar productos y socios
$vc->listarProductos();
$vc->listarSocios();

// Alquilar productos a socios
$vc->alquilarSocioProducto(1, 1); // Bruce Wayne alquila "Los Cazafantasmas"
$vc->alquilarSocioProducto(1, 2); // Bruce Wayne alquila "Origen"

// Intentar alquilar un producto ya alquilado
$vc->alquilarSocioProducto(1, 1); // No debería permitirlo

// Listar socios y sus alquileres
$vc->listarSocios();
?>
