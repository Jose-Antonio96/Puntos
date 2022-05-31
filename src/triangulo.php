<?php
namespace ITEC\DAW\PROG\puntospoligono;
use ITEC\DAW\PROG\puntospoligono\poligono;
use Exception;


class triangulo extends poligono{
    private const MAXPOINTS = 3;
    /**
     * new triangulo([p1,p2,p3])
     * Los puntos deben venir dados Izquierda Arriba, Derecha Arriba, Derecha Abajo, Izquierda Abajo
     *
     * @param array $puntos
     */
    public function __construct(){
        $this->puntos = [];
        }
    
    public static function create(array $puntos){
        $cuadrado = new triangulo($puntos);
            foreach($puntos as $punto){
                $cuadrado->addPoint($punto);
                }
            if (!self::validate($puntos)){
                throw new Exception("No es un " . self::class);
            }
        
        }
    
    private static function validate(array $puntos):bool{
        if (count($puntos)!=self::MAXPOINTS) return false;
        if (!self::validarPosicionesRelativas($puntos)) return false;
        if (!self::validardistanciaEntrePuntos($puntos)) return false;
    }
    
    private static function validardistanciaEntrePuntos($puntos):bool{
        $lado1 = $puntos[0]->getDistance($puntos[1]);
        $lado2 = $puntos[1]->getDistance($puntos[2]);  
        $lado3 = $puntos[2]->getDistance($puntos[3]);
        $lado4 = $puntos[3]->getDistance($puntos[0]);
        return ($lado1 == $lado2 && $lado2==$lado3 && $lado3 == $lado4);
    }

    public static function validarPosicionesRelativas(array $puntos):bool{
        return (($puntos[0]->getpositionx() != $puntos[1]->getpositionx() &&
                $puntos[1]->getpositionx() != $puntos[2]->getpositionx() &&
                $puntos[2]->getpositionx() != $puntos[0]->getpositionx() 
        ) || (
                $puntos[0]->getpositiony() != $puntos[1]->getpositiony() &&
                $puntos[1]->getpositiony() != $puntos[2]->getpositiony() &&
                $puntos[2]->getpositiony() != $puntos[0]->getpositiony()
        ));
    }

    public function validateNewPoint(punto $punto):bool //Esto nos sirve para ir incluyendo los puntos de uno en uno
    {
        if($this->getNumPoints()==0)
            return true;
            //Si hay 1, este debe quedar a la izquierda del 2
        if ($this->getNumPoints()==1)
            return $this->puntos[0]->isLeft($punto);
        if ($this->getNumPoints()==2)
            return $this->puntos[1]->isUpper($punto);
        if ($this->getNumPoints()==3)
            return $this->puntos[2]->isRight($punto) && $this->puntos[0]->isUpper($punto);
        return false;
        //Si el primero que entra es true, va comprobando de uno en uno, si es true, va añadiendo el punto, si es false, no lo añade
        
    }

    public function getArea():float{
        return $this->calcularArea();
    }

    public function calcularArea(): float
    {
        $lado1 = $this->puntos[0]->getDistance($this->puntos[1]);
        return $lado1*$lado1;
    }

    public function getMaxPoints():int{
        return count($this->puntos);
    }



}



?>
