<?php
namespace ITEC\DAW\PROG\puntospoligono;
use ITEC\DAW\PROG\puntospoligono\punto;

abstract class poligono{
    /**
     * $puntos contendrá los puntos que definen el polígono
     * @var array $puntos
     */
    protected array $puntos = [];

    /**
     * Undocumented function
     *
     * @return float
     */
    protected int $numPuntos = 0;
    abstract public function calcularArea():float;
    abstract static function create(array $puntos);
    abstract public function validateNewPoint(punto $punto):bool;
    abstract public function getmaxpoints():int;

    public function getNumPoints():int{
        return count($this->puntos);
    }
    
    protected function addPoint(punto $punto){ //Esta clase solo puede ser heredada por sus hijos
       if (!$this->validateNewPoint($punto))
       throw new \Exception("No puedo añadir un nuevo punto: Max Points" . $this->getmaxpoints() );
       $this->puntos[] = $punto;
       $this->numPuntos++;
    }
}

?>
