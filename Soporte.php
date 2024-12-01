<?php
interface Resumible {
    public function muestraResumen();
}

abstract class Soporte implements Resumible {
    public $titulo;
    private $numero;
    protected $precio;
    private static $IVA = 0.21;

    public function __construct($titulo, $numero, $precio) {
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getPrecioConIVA() {
        return $this->precio * (1 + self::$IVA);
    }

    public function getNumero() {
        return $this->numero;
    }

    // Método abstracto que obliga a los hijos a implementarlo
    abstract public function muestraResumen();
}
?>