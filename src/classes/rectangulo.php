<?php
namespace ITEC\DAW\PROG\classes\punto;
use ITEC\DAW\PROG\classes\punto\poligono;
use ITEC\DAW\PROG\classes\punto\punto;
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