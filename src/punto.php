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
    //+= para ir sumandole y asi dar una nueva posicion. Mueve de forma absoluta
    /**
     * Mueve la posición del punto de manera absoluta
     * 
     * @param array $dimension un array [x,y]
     * @return void
     */
    public function moveposition(array $dimension){
        $this-> positionx += $dimension[0];
        $this-> positiony += $dimension[1];
    }
    /**
     * Mueve la posición del punto de manera relativa
     * 
     * @param array $dimension un array [x,y]
     * @return void
     */
    public function moveto(array $dimension){
        $this-> positionx = $dimension[0];
        $this-> positiony = $dimension[1];
        }
    //Mueve el punto de forma relativa  

    public function getpositionx():int{
        return $this->positionx;
    }

    public function getpositiony():int{
        return $this->positiony;
    }  

    public function getPosition():array{
        return [$this->positionx, $this->positiony];
    }

    /**
     * MoveToPoint: Mueve el punto a la posición del $p
     * 
     * $param punto $punto
     */
    public function moveToPoint(punto $punto){
        [$positionx, $positiony] = $punto->getPosition(); 
        //Destructuracion de arrays. Lo asignamos asi para que cada elemento vaya a una variable
        //Esto significa que coloca cada variable en su posicion. De getPosition tenemos
        //lo siguiente, [$this->positionx, $this->positiony], que se pondrian en [$positionx, $positiony]
        $this->moveto($positionx, $positiony);
    }
    /*
    public function moveToPoint(punto $punto){
        $this->moveto($punto->getPosition());
    }
    Alternativa simplificada a lo de arriba
    */

    public function getDistance(punto $punto):float{
        [$puntopositionx, $puntopositiony] = $punto->getPosition();
        $positionx = $this->getpositionx() - $puntopositionx;
        $positiony = $this->getpositiony() - $puntopositiony;
        return sqrt($positionx^2 + $positiony^2);
    }

    public function isUpper(punto $punto){
        [$puntopositionx, $puntopositiony] = $punto->getPosition();
        return $this->positiony < $puntopositiony && $this->positionx == $puntopositionx;
    }
    /**
     * isUpper, El punto $punto está justo encima de mí
     *
     * @param punto $punto
     * @return boolean
     * true si está justo encima
     * falso si no
     */
    public function Bottom(punto $punto){
        [$puntopositionx, $puntopositiony] = $punto->getPosition();
        return $this->positiony > $puntopositiony && $this->positionx == $puntopositionx;
    }
    /**
     * Bottom, El punto $punto está justo debajo
     *
     * @param punto $punto
     * @return boolean
     * true si está justo debajo
     * falso si no
     */

    public function isLeft(punto $punto){
        [$puntopositionx, $puntopositiony] = $punto->getPosition();
        return $this->positionx > $puntopositionx && $this->positiony == $puntopositiony;
    }
    /**
     * isLeft, El punto $punto está justo a la izquierda
     *
     * @param punto $punto
     * @return boolean
     * true si está justo a la izquierda
     * falso si no
     */

    public function isRight(punto $punto){
        [$puntopositionx, $puntopositiony] = $punto->getPosition();
        return $this->positionx < $puntopositionx && $this->positiony == $puntopositiony;
    }
    /**
     * isRight, El punto $punto está justo a la derecha
     *
     * @param punto $punto
     * @return boolean
     * true si está justo a la derecha
     * falso si no
     */
    

    public function isUpperLeft(punto $punto){
        [$puntopositionx, $puntopositiony] = $punto->getPosition();
        return $this->positionx > $puntopositionx && $this-> positiony < $puntopositiony;
    }
    /**
     * isUpperLeft, El punto $punto está justo arriba a la izquierda
     *
     * @param punto $punto
     * @return boolean
     * true si está justo arriba a la izquierda
     * falso si no
     */

    public function isUpperRight(punto $punto){
        [$puntopositionx, $puntopositiony] = $punto->getPosition();
        return $this->positionx < $puntopositionx && $this-> positiony < $puntopositiony;
    }
    /**
     * isUpperRight, El punto $punto está justo arriba a la derecha
     *
     * @param punto $punto
     * @return boolean
     * true si está justo arriba a la derecha
     * falso si no
     */

    public function isBottomLeft(punto $punto){
        [$puntopositionx, $puntopositiony] = $punto->getPosition();
        return $this->positionx > $puntopositionx && $this-> positiony > $puntopositiony;
    }
    /**
     * isBottomLeft, El punto $punto está justo abajo a la izquierda
     *
     * @param punto $punto
     * @return boolean
     * true si está justo abajo a la izquierda
     * falso si no
     */

    public function isBottomRight(punto $punto){
        [$puntopositionx, $puntopositiony] = $punto->getPosition();
        return $this->positionx < $puntopositionx && $this-> positiony > $puntopositiony;
    }
    /**
     * isBottomRight, El punto $punto está justo abajo a la derecha
     *
     * @param punto $punto
     * @return boolean
     * true si está justo abajo a la derecha
     */
}

?>
