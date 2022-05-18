<?php
namespace ITEC\PRESENCIAL\DAW\PROG\puntos;

class punto{
    private int $positionx;
    private int $positiony;

    private function __construct(int $positionx, int $positiony){
        $this-> positionx = $positionx;
        $this-> positiony = $positiony;
    }

    public function createPunto(int $positionx, int $positiony){
        return new punto($positionx, $positiony); 
    }
    //+= establece el valor de la variable a otro
    public function newposition(int $positionx, int $positiony){
        $this-> positionx += $positionx;
        $this-> positiony += $positiony;
    }

    public function moveposition($positionx, $positiony, $posicion){
        $movex = 0;
        $movey = 0;
        $posicion = [$positionx, $positiony];
        $newposicion = [];
        $this-> positionx = $positionx;
        $this-> positiony = $positiony;
        for($positionx=0; $positionx<$movex; $positionx++){ 
            for($positiony=0; $positiony<$movey; $positiony++){
                $newposicion == $posicion[$positionx][$positiony] = $posicion[$positionx++][$positiony++];
            }
            return $newposicion;
        }
    
    }
        

    public function distanceTo(punto $punto){

    }

    public calculoDistancia(){
        
    }

    public function copy(){

    }
}

?>
