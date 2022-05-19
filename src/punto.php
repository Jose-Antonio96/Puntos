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
    //+= para ir sumandole y asi dar una nueva posicion
    public function moveposition(int $positionx, int $positiony){
        $this-> positionx += $positionx;
        $this-> positiony += $positiony;
    }

    public function moveto($positionx, $positiony){
        $this-> positionx = $positionx;
        $this-> positiony = $positiony;
        }
    public function copyto(interfacepunto $punto){

    }   

    public function getpositionx():int{
        return $this->positionx;
    }

    public function getpositiony():int{
        return $this->positiony;
    }  

    public function copy($positionx, $positiony, $newpositionx, $newpositiony){
        $punto = createPunto($positionx, $positiony);
        $newpunto = array(0 => $newpositionx, 1=> $newpositiony);
        $resultado = array_replace($punto, $newpunto);
        
            return $resultado;
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
