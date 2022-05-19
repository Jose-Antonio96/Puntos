<?php
namespace ITEC\DAW\PROG\puntospoligono;
use ITEC\DAW\PROG\puntospoligono\punto;

abstract class poligono{

    protected array $puntos = [];
    protected int $numPuntos = 0;
    abstract public function calcularArea():float;
    public function getNumPoints():int{
        return count($this->puntos);
    }
    
    abstract static function create(array $puntos);
    protected function addPoint(punto $punto){ //Esta clase solo puede ser heredada por sus hijos
        $this-> puntos[] = $punto;
    }
}

?>
