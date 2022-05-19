<?php
namespace ITEC\DAW\PROG\puntospoligono;

interface interfacepunto{
    public function moveposition(int $positionx, int $positiony);
    public function moveto(int $positionx, int $positiony);
    public function copyto(interfacepunto $punto);

}