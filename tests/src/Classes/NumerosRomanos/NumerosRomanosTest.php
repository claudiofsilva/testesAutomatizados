<?php


namespace Classes\NumerosRomanos;


class NumerosRomanosTest  extends \PHPUnit_Framework_TestCase  {


    /**
     * Converter valor inteiro para romano
     * Converter valor romano para inteiro
     * @expectedException InvalidArgumentException
     */

    public function testVerificaValorPassadoParaFuncaoConverteValorInteiroParaRomano()
    {
        $numeroInteiro = new NumerosRomanos();
        $numeroInteiro->converteNumeroInteiroParaRomano('m');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testVerificaValorPassadoParaFuncaoConverteValorRomanoParaInteiro()
    {
        $valorRomano = new NumerosRomanos();
        $valorRomano->converteNumeroRomanoParaInteiro(1);
    }

    public function testVerificaValorRetornadoFuncaoConverteValorInteiroParaRomano()
    {
        $valorNumerico = new NumerosRomanos();
        $resultado = $valorNumerico->converteNumeroInteiroParaRomano(20);

        $this->assertEquals('XX',$resultado);
    }

    public function testVerificaValorRetornadoFuncaoConverteValorRomanoParaInteiro()
    {
        $valorRomano = new NumerosRomanos();
        $resultado = $valorRomano->converteNumeroRomanoParaInteiro("X");

        $this->assertEquals(10,$resultado);
    }


} 