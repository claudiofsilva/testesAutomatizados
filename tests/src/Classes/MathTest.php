<?php

namespace Classes;


class MathTest extends \PHPUnit_Framework_TestCase {

    public function testVerificaSeoTipoDaClasseEstaCorreto(){
        $this->assertInstanceOf('Classes\Math',new \Classes\Math());
    }

    public function somaProvider(){
        return[
            [10,10,20],
            [20,5,25],
            [12,12,24],
            [25,25,50],
            [30,30,60],
            [10,10,20],
            [2,2,4]
        ];
    }

    /**
     * @dataProvider somaProvider
     */

    public function testVerficaSeConsegueSomarComProvider($x, $y, $resultado){
        $math = new \Classes\Math();

        $res = $math->soma($x,$y);
        $this->assertEquals($resultado,$res);
    }

    public function testVerficaSeConsegueSomar(){
        $math = new \Classes\Math();

        $resultado = $math->soma(10,5);
        $this->assertEquals('15',$resultado);

        $resultado = $math->soma(15,15);
        $this->assertEquals('30',$resultado);
    }

    /**
     * @expectedException InvalidArgumentException
     */

    public function testVerficaSeConsegueSomarQuandoValorNaoENumerico(){
        $math = new \Classes\Math();

        $resultado = $math->soma(10,'isso é um teste');

    }
} 