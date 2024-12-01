<?php
include_once "Soporte.php";

class Juego extends Soporte {
    private $consola;
    private $minNumJugadores;
    private $maxNumJugadores;

    public function __construct($titulo, $numero, $precio, $consola, $minNumJugadores, $maxNumJugadores) {
        parent::__construct($titulo, $numero, $precio);
        $this->consola = $consola;
        $this->minNumJugadores = $minNumJugadores;
        $this->maxNumJugadores = $maxNumJugadores;
    }

    public function muestraJugadoresPosibles() {
        if ($this->minNumJugadores == $this->maxNumJugadores) {
            echo "Para {$this->minNumJugadores} jugador(es)<br>";
        } else {
            echo "De {$this->minNumJugadores} a {$this->maxNumJugadores} jugadores<br>";
        }
    }

    public function muestraResumen() {
        echo "<strong>Título:</strong> {$this->titulo}<br>";
        echo "<strong>Número:</strong> {$this->getNumero()}<br>";
        echo "<strong>Precio:</strong> {$this->getPrecio()} euros<br>";
        echo "<strong>Precio con IVA:</strong> {$this->getPrecioConIVA()} euros<br>";
        echo "<strong>Consola:</strong> {$this->consola}<br>";
        $this->muestraJugadoresPosibles();
    }
}
?>
