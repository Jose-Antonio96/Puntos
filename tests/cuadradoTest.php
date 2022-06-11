<?php
use PHPUnit\Framework\TestCase;
use ITEC\DAW\PROG\puntospoligono\punto;
use ITEC\DAW\PROG\puntospoligono\cuadrado;
use ITEC\DAW\PROG\puntospoligono\poligono;


final class cuadradoTest extends TestCase{
    public function DPtestCuadrado(){
        $cuadrado = cuadrado::create([
            new punto(0,0),
            new punto(1,0),
            new punto(1,1),
            new punto(0,1)
        ]);
        return [
            "Prueba 1" => [
                'Cuadrado', $cuadrado
            ]
        ];
    }
    /**
     * @dataProvider DPtestCuadrado
     */

    public function testCuadrado($esperado, $actual){
        $this-> assertEquals(
            $esperado,
            $actual-> getArea());
    }
}