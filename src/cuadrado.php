<?php
namespace ITEC\DAW\PROG\puntospoligono;
use ITEC\DAW\PROG\puntospoligono\poligono;
use Exception;


class cuadrado extends poligono{
    private const MAXPOINTS = 4;
    /**
     * new cuadrado([p1,p2,p3,p4])
     * Los puntos deben venir dados Izquierda Arriba, Derecha Arriba, Derecha Abajo, Izquierda Abajo
     *
     * @param array $puntos
     */
    public function __construct(){
        $this->puntos = [];
        }
    
    public static function create(array $puntos){
        $cuadrado = new cuadrado($puntos);
            foreach($puntos as $punto){
                $cuadrado->addPoint($punto);
                }
            if (!self::validate($puntos)){
                throw new Exception("No se corresponde con un cuadrado");
            }
        
        }
    
    private static function validate(array $puntos):bool{
        if (count($puntos)!=CUADRADO::MAXPOINTS) return false;
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
        return ($puntos[0]->isUpperLeft($puntos[1]) &&
                $puntos[1]->isUpper($puntos[2]) &&
                $puntos[2]->isLeft($puntos[3]) &&
                $puntos[3]->isUnder($puntos[0])
            );
    }

    public function validateNewPoint(punto $punto):bool //Esto nos sirve para ir incluyendo los puntos de uno en uno
    {
        if($this->getNumPoints()==0)
            return true;
        elseif ($this->getNumPoints()==1)
            return $this->puntos[0]->isLeft($punto);
        elseif ($this->getNumPoints()==2)
            return $this->puntos[1]->isUpper($punto);
        elseif ($this->getNumPoints()==3)
            return $this->puntos[2]->isRight($punto) && $this->puntos[0]->isUpper($punto);
        
    }

}



?>
