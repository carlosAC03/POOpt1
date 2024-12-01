<?php
include_once "Soporte.php";
include_once "CintaVideo.php";
include_once "Dvd.php";
include_once "Juego.php";
include_once "Cliente.php";

class Videoclub {
    private $nombre;
    private $productos = [];
    private $socios = [];

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    private function incluirProducto($producto) {
        $this->productos[] = $producto;
    }

    public function incluirCintaVideo($titulo, $numero, $precio, $duracion) {
        $this->incluirProducto(new CintaVideo($titulo, $numero, $precio, $duracion));
    }

    public function incluirDvd($titulo, $numero, $precio, $idiomas, $formatoPantalla) {
        $this->incluirProducto(new Dvd($titulo, $numero, $precio, $idiomas, $formatoPantalla));
    }

    public function incluirJuego($titulo, $numero, $precio, $consola, $minNumJugadores, $maxNumJugadores) {
        $this->incluirProducto(new Juego($titulo, $numero, $precio, $consola, $minNumJugadores, $maxNumJugadores));
    }

    public function incluirSocio($nombre, $maxAlquilerConcurrente = 3) {
        $this->socios[] = new Cliente($nombre, count($this->socios) + 1, $maxAlquilerConcurrente);
    }

    public function listarProductos() {
        echo "Productos disponibles en {$this->nombre}:<br>";
        foreach ($this->productos as $producto) {
            $producto->muestraResumen();
        }
    }

    public function listarSocios() {
        echo "Socios de {$this->nombre}:<br>";
        foreach ($this->socios as $socio) {
            $socio->muestraResumen();
        }
    }

    public function alquilarSocioProducto($numeroCliente, $numeroSoporte) {
        $socio = $this->socios[$numeroCliente - 1] ?? null;
        $soporte = $this->productos[$numeroSoporte - 1] ?? null;

        if ($socio && $soporte) {
            $socio->alquilar($soporte);
        } else {
            echo "Socio o producto no encontrado.<br>";
        }
    }
}
?>
