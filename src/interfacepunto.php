<?php
namespace ITEC\DAW\PROG\puntospoligono;

interface interfacepunto{
    public function moveposition(array $dimension);
    public function moveto(array $dimension);
    public function getPosition():array;
    public function moveToPoint(punto $punto);
    public function getDistance(punto $punto):float;

}