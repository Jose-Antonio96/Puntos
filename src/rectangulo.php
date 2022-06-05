<?php
namespace ITEC\DAW\PROG\puntospoligono;
use ITEC\DAW\PROG\puntospoligono\poligono;
use ITEC\DAW\PROG\puntospoligono\punto;

use Exception;


class rectangulo extends poligono{
    private const MAXPOINTS = 4;
    /**
     * new rectangulo([p1,p2,p3,p4])
     * Los puntos deben venir dados Izquierda Arriba, Derecha Arriba, Derecha Abajo, Izquierda Abajo
     *
     * @param array $puntos
     */

    public function __construct(){
        $this->puntos=[];
    }

    public static function create(array $puntos){
        $rectangulo = new rectangulo($puntos);
        foreach($puntos as $punto){
            $rectangulo->addPoint($punto);
        }
        if (!self::validate($puntos)){
            throw new Exception("No se corresponde con un rectangulo");
        return $rectangulo;
        }
    }

    private static function validate(array $puntos):bool{
        if (count($puntos)!=rectangulo::MAXPOINTS) return false;
        if (!self::validarPosicionesRelativas($puntos)) return false;
        if (!self::validardistanciaEntrePuntos($puntos)) return false;
        return true;
    }

    private static function validardistanciaEntrePuntos($puntos):bool{
        $lado1 = $puntos[0]->getDistance($puntos[1]);
        $lado2 = $puntos[1]->getDistance($puntos[2]);  
        $lado3 = $puntos[2]->getDistance($puntos[3]);
        $lado4 = $puntos[3]->getDistance($puntos[0]);
        return ($lado1 == $lado2 && $lado2==$lado3 && $lado3 == $lado4);
    }

    public static function validarPosicionesRelativas(array $puntos):bool{
        return ($puntos[0]->isUpperLeft($puntos[1]) &&
                $puntos[1]->isUpper($puntos[2]) &&
                $puntos[2]->isRight($puntos[3]) &&
                $puntos[3]->isUnder($puntos[0])
            );
    }

    public function validateNewPoint(punto $punto):bool //Esto nos sirve para ir incluyendo los puntos de uno en uno
    {   
        //Si el punto es 0, cualquiera retornado nos sirve
        if($this->getNumPoints()==0) return true;
        //si hay 1, este debe quedar a la izquierda del punto 2
        if($this->getNumPoints()==1)
            return $this->puntos[0]->isLeft($punto);
        //si hay 2,este debe quedar encima del punto 3
        if($this->getNumPoints()==2)
            return $this->puntos[1]->isUpper($punto);
        //si hay 3, este debe quedar a la derecha del numero 4 y el 4 debajo del punto 1
        if($this->getNumPoints()==3)
            return $this->puntos[2]->isRight($punto) && $this->puntos[0]->isUpper($punto);
        return false;
    }

    public function getMaxPoints():int{
        return count($this->puntos);
    }

    public function calcularArea():float{
        $lado1 = $this->puntos[0]->getDistance($this->puntos[1]);
        $lado2 = $this->puntos[1]->getDistance($this->puntos[2]);
        return $lado1*$lado2;
    }
} 

?>
