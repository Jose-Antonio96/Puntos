<?php
namespace ITEC\PRESENCIAL\DAW\PROG\puntos;
use ITEC\PRESENCIAL\DAW\PROG\puntos\punto;
use ITEC\PRESENCIAL\DAW\PROG\puntos\poligono;

class rectangulo extends poligono{
    private punto $A;
    private punto $B; 
    private punto $C;
    private punto $D;

    public function __construct(punto $A, punto $B, punto $C, punto $D){
        $this-> A = $A;
        $this-> B = $B;
        $this-> C = $C;
        $this-> D = $D;
    }

    public function calcularArea()
    {
        return base() * altura();
    }

    public function base($B, $C){
        $base = createPunto($B, $C);
        return $this-> $base = calcularDistancia();
    }

    public function altura($A, $D){
        $altura = createPunto($A, $D);
        return $this->$altura = calcularDistancia(); 
    }
}

?>
}