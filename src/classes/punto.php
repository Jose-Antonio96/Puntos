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

    public function getpositionx():int{
        return $this->positionx;
    }

    public function getpositiony():int{
        return $this->positiony;
    }  

    public function copy(){
        ArrayObject::exchangeArray — Intercambia el array por otro
Descripción ¶
public ArrayObject::exchangeArray(mixed $input): array
    }

    public function calcularDistancia(int $positionx, int $positiony, int $newpositionx, int $newpositiony){
        $distancia=createPunto($positionx, $positiony);
        $newpositionx = 0;
        $newpositiony = 0;
        $distancia = sqrt($positionx, $positiony) - sqrt($newpositionx, $newpositiony);

        return $distancia;
      }

}

?>
