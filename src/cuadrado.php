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
    public function __construct(array $puntos){
        if (!$this->validate($puntos)){
            throw new Exception("No se corresponde con un cuadrado");
            foreach($puntos as $punto){
                $this->addPoint($punto);
                }
            }
        }
    private static function validate(array $puntos):bool{
        if (count($puntos)>CUADRADO::MAXPOINTS) return false;
        if (!self::validardistanciaEntrePuntos($puntos)) return false;
    }
    
    private static function validardistanciaEntrePuntos($puntos):bool{
        $lado1 = $puntos[0]->getDistance($puntos[1]);
        $lado2 = $puntos[1]->getDistance($puntos[2]);  
        $lado3 = $puntos[2]->getDistance($puntos[3]);
        $lado4 = $puntos[3]->getDistance($puntos[0]);
        return ($lado1 == $lado2 && $lado2==$lado3 && $lado3 == $lado4);
    }

}



?>
