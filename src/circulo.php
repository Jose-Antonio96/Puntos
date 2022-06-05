<?php
namespace ITEC\DAW\PROG\puntospoligono;
use ITEC\DAW\PROG\puntospoligono\poligono;
use ITEC\DAW\PROG\puntospoligono\punto;
use Exception;
class circulo extends poligono{

    private const MAXPOINTS = 2;
    /**
     * new circulo([p1,p2])
     * Esto crea un cículo con dos puntos, que son los radios
     *
     * @param $array array
     */
    public function __construct(){
        $this->puntos;
    }

    public function create(array $puntos){
        $circulo = new circulo($puntos);
        foreach($puntos as $punto){
            $circulo->addPoint($punto);
        }
        if (!self::validate($puntos)){
            throw new Exception("Esto no es un circulo");
        }
    }

    public function getMaxPoints():int{
        return count($this->puntos);
    }

    public function getArea(){
        return pi()*($this->punto(0)->getDistance($this->punto(1)))*2;
    }

    public function validateNewPoint(punto $punto):bool{
        return $this->getNumPoints()<=2;
    }

    private static function validate(array $puntos){
        return count($puntos) == circulo::MAXPOINTS;
    }

    public function calcularArea(): float
    {
        return pi()*($this->punto(0)->getDistance($this->punto(1)))*2;
    }

}

?>
