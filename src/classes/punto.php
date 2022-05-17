<?php
namespace ITEC\PRESENCIAL\DAW\PROG\puntos;

class punto{
    private int $positionx;
    private int $positiony;

    private function __construct(int $positionx, int $positiony){
        $this-> positionx = $positionx;
        $this-> positiony = $positiony;
    }

    public function getPunto(int $positionx, int $positiony):punto{
        return new punto($positionx, $positiony); 
    }
    //+= establece el valor de la variable a otro
    public function newposition(int $positionx, int $positiony){
        $this-> positionx += $positionx;
        $this-> positiony += $positiony;
    }
        
    public function toString(){
        return $this->getPunto();
    }

    public function moveTo($positionx, $positiony){

    }

    public function distanceTo(punto $punto){

    }

    public function copy(){

    }
}

?>
