<?php
class Cliente {
    private $nombre;
    private $numero;
    private $soportesAlquilados = [];
    private $numSoportesAlquilados = 0;
    private $maxAlquilerConcurrente;

    public function __construct($nombre, $numero, $maxAlquilerConcurrente = 3) {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function tieneAlquilado($soporte) {
        return in_array($soporte, $this->soportesAlquilados);
    }

    public function alquilar($soporte) {
        if ($this->tieneAlquilado($soporte)) {
            echo "El soporte ya está alquilado por este cliente.<br>";
            return false;
        }
        if (count($this->soportesAlquilados) >= $this->maxAlquilerConcurrente) {
            echo "No se puede alquilar más soportes. Límite alcanzado.<br>";
            return false;
        }
        $this->soportesAlquilados[] = $soporte;
        $this->numSoportesAlquilados++;
        echo "Soporte alquilado con éxito.<br>";
        return true;
    }

    public function devolver($numSoporte) {
        foreach ($this->soportesAlquilados as $key => $soporte) {
            if ($soporte->getNumero() == $numSoporte) {
                unset($this->soportesAlquilados[$key]);
                echo "Soporte devuelto con éxito.<br>";
                return true;
            }
        }
        echo "El soporte no estaba alquilado.<br>";
        return false;
    }

    public function listarAlquileres() {
        echo "Cliente {$this->nombre} tiene alquilados:<br>";
        foreach ($this->soportesAlquilados as $soporte) {
            $soporte->muestraResumen();
        }
    }

    public function muestraResumen() {
        echo "Cliente: {$this->nombre}, Número: {$this->numero}, Alquileres actuales: " . count($this->soportesAlquilados) . "<br>";
    }
}
?>
