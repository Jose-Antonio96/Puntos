<?php
namespace ITEC\PRESENCIAL\DAW\PROG\puntos;
use ITEC\PRESENCIAL\DAW\PROG\puntos\punto;
use ITEC\PRESENCIAL\DAW\PROG\puntos\poligono;

class triangulo extends poligono{
    private punto $A;
    private punto $B; 
    private punto $C;

    public function __construct(punto $A, punto $B, punto $C){
        $this-> A = $A;
        $this-> B = $B;
        $this-> C = $C;
    }

    public function calcularArea()
    {
        return 1/2 * $this->basealturacalcular();
    }

    public function basealturacalcular(){
        $base = $this-> calcularDistancia() -> createPunto();
        $altura = $this-> calcularDistancia() -> createPunto();
        return $base * $altura;
    }
}

?>
