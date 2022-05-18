<?php
namespace ITEC\DAW\PROG\classes\punto;
use ITEC\DAW\PROG\classes\punto\poligono;
use ITEC\DAW\PROG\classes\punto\punto;
class circulo extends poligono{
    private punto $A;
    private punto $B; 

    public function __construct(punto $A, punto $B){
        $this-> A = $A;
        $this-> B = $B;
    }

    public function calcularArea()
    {
        return pi() * radio()^2;
    }

    public function radio(){
        return diameter()/2;
    }

    public function diameter($A, $B){
        $diametro = createPunto($A, $B);
        return $this->$diametro -> calcularDistancia();
    }

}

?>
