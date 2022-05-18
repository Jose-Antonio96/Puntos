<?php
namespace ITEC\DAW\PROG\classes\punto;
use ITEC\DAW\PROG\classes\punto\poligono;
use ITEC\DAW\PROG\classes\punto\punto;
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

    public function calcularArea(){
        return lado()^2;
    }

    public function lado($A, $B){
        $lado = createPunto($A, $B);
        return $this-> $lado = calcularDistancia();
    }

}

?>
