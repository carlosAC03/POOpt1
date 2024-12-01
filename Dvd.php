<?php
include_once "Soporte.php";

class Dvd extends Soporte {
    private $idiomas;
    private $formatoPantalla;

    public function __construct($titulo, $numero, $precio, $idiomas, $formatoPantalla) {
        parent::__construct($titulo, $numero, $precio);
        $this->idiomas = $idiomas;
        $this->formatoPantalla = $formatoPantalla;
    }

    public function muestraResumen() {
        echo "<strong>Título:</strong> {$this->titulo}<br>";
        echo "<strong>Número:</strong> {$this->getNumero()}<br>";
        echo "<strong>Precio:</strong> {$this->getPrecio()} euros<br>";
        echo "<strong>Precio con IVA:</strong> {$this->getPrecioConIVA()} euros<br>";
        echo "<strong>Idiomas:</strong> {$this->idiomas}<br>";
        echo "<strong>Formato de Pantalla:</strong> {$this->formatoPantalla}<br>";
    }
}
?>
