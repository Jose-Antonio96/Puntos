<?php
namespace ITEC\PRESENCIAL\DAW\PROG\puntos;
use ITEC\PRESENCIAL\DAW\PROG\puntos\punto;
use ITEC\PRESENCIAL\DAW\PROG\puntos\poligono;

class cuadrado extends poligono{
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
        return 1/2 * $this->basealturacalcular();
    }

    public function basealturacalcular(){
        $base = $this-> calcularDistancia();
        $altura = $this-> calcularDistancia();
        return $base * $altura;
    }
}

?>
}