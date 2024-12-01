<?php
include_once "Soporte.php";

class CintaVideo extends Soporte {
    private $duracion;

    public function __construct($titulo, $numero, $precio, $duracion) {
        parent::__construct($titulo, $numero, $precio);
        $this->duracion = $duracion;
    }

    public function muestraResumen() {
        echo "<strong>Título:</strong> {$this->titulo}<br>";
        echo "<strong>Número:</strong> {$this->getNumero()}<br>";
        echo "<strong>Precio:</strong> {$this->getPrecio()} euros<br>";
        echo "<strong>Precio con IVA:</strong> {$this->getPrecioConIVA()} euros<br>";
        echo "<strong>Duración:</strong> {$this->duracion} minutos<br>";
    }
}
?>
