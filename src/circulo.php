<?php
namespace ITEC\DAW\PROG\classes\punto;
use ITEC\DAW\PROG\classes\punto\poligono;
use ITEC\DAW\PROG\classes\punto\punto;
class circulo extends poligono{


    public function __construct(){
        $this->puntos;
    }

    public function getMaxPoints():int{
        return count($this->puntos);
    }

    public function getArea(){
        return pi()*($this->puntos(0)->getDistance($this->puntos(1)))*2;
    }

    public function validateNewPoint(punto $punto):bool{
        return $this->getNumPoints()==2;
    }

}

?>
