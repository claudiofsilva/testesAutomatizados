<?php

namespace Classes;


use Classes\Interfaces\FieldsetInterface;

class FormularioLegendTest extends \PHPUnit_Framework_TestCase {

    public function testVerificaSeOTipoDaClasseEstaCorreto()
    {
        $this->assertInstanceOf('Classes\Interfaces\FieldsetInterface',new \Classes\FormularioLegend());
        $this->assertInstanceOf('Classes\FormularioLegend',new \Classes\FormularioLegend());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testVerificaSetName()
    {
        $formularioLegend = new \Classes\FormularioLegend();

        $formulario = $formularioLegend->setName(1);
    }

} 