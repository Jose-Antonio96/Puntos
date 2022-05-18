<?php
namespace ITEC\DAW\PROG\classes\punto;

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
