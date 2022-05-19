<?php
namespace ITEC\DAW\PROG\puntospoligono;
use ITEC\DAW\PROG\puntospoligono\interfacepunto;

class punto implements interfacepunto{
    private int $positionx;
    private int $positiony;
    
    private function __construct(int $positionx, int $positiony){
        $this-> positionx = $positionx;
        $this-> positiony = $positiony;
    }

    static public function createPunto(int $positionx, int $positiony){
        return new punto($positionx, $positiony); 
    }
    //+= para ir sumandole y asi dar una nueva posicion. Mueve de forma absoluta
    /**
     * Undocumented function
     * 
     * @param array $dimension un array [x,y]
     * @return void
     */
    public function moveposition(array $dimension){
        $this-> positionx += $dimension[0];
        $this-> positiony += $dimension[1];
    }
    /**
     * Undocumented function
     * 
     * @param array $dimension un array [x,y]
     * @return void
     */
    public function moveto(array $dimension){
        $this-> positionx = $dimension[0];
        $this-> positiony = $dimension[1];
        }
    //Mueve el punto de forma relativa  

    public function getpositionx():int{
        return $this->positionx;
    }

    public function getpositiony():int{
        return $this->positiony;
    }  

    public function getPosition():array{
        return [$this->positionx, $this->positiony];
    }

    /**
     * MoveToPoint: Mueve el punto a la posición del $p
     * 
     * $param punto $punto
     */
    public function moveToPoint(punto $punto){
        [$positionx, $positiony] = $punto->getPosition(); 
        //Destructuracion de arrays. Lo asignamos asi para que cada elemento vaya a una variable
        //Esto significa que coloca cada variable en su posicion. De getPosition tenemos
        //lo siguiente, [$this->positionx, $this->positiony], que se pondrian en [$positionx, $positiony]
        $this->moveto($positionx, $positiony);
    }
}

?>
