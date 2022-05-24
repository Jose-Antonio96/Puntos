<?php
namespace ITEC\DAW\PROG\puntospoligono;

interface interfacepunto{
    public function moveposition(array $dimension); //relative
    public function moveto(array $dimension); //absolute
    public function getPosition():array;
    public function moveToPoint(punto $punto);
    public function getDistance(punto $punto):float;

}