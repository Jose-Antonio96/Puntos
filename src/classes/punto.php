<?php
namespace ITEC\PRESENCIAL\DAW\PROG\puntos;

class punto{
    private int $positionx;
    private int $positiony;

    private function __construct(int $positionx, int $positiony){
        $this-> positionx = $positionx;
        $this-> positiony = $positiony;
    }

    public function getPunto(int $positionx, int $positiony){
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
    
        for($ix=0; $ix<11; $ix++){ //Lo de abajo
            for($iy=0; $iy<11; $iy++){ //Queremos que nos de todas las tablas de multiplicar del 1 al 10
                $array[$ix][$iy]=$ix*$iy; //Con los for anteriores,
                                          // se va incrementando uno por uno cada multiplicación
            }
        }
        return $array;
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
