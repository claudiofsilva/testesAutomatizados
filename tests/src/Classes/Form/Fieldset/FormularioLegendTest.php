<?php

namespace Classes;


use Classes\Form\Fieldset\FormularioLegend;
use Classes\Form\Interfaces\FieldsetInterface;

class FormularioLegendTest extends \PHPUnit_Framework_TestCase {

    /**
     * $formLegend instancia da classe a ser testada
     */
    private $formLegend;

    public function __construct(){
        $this->formLegend = new FormularioLegend();
    }

    public function testVerificaSeOTipoDaClasseEstaCorreto()
    {
        $this->assertInstanceOf('Classes\Form\Interfaces\FieldsetInterface',new \Classes\Form\Fieldset\FormularioLegend());
        $this->assertInstanceOf('Classes\Form\Fieldset\FormularioLegend',new \Classes\Form\Fieldset\FormularioLegend());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testVerificaSetName()
    {
        $formulario = $this->formLegend->setName(1);
    }

    public function testVerificaSetEGetName()
    {
       $this->formLegend->setName('claudio');

        $this->assertEquals('claudio',$this->formLegend->getName());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testVerificaSetType()
    {
        $this->formLegend->setType(1);
    }

    public function testVerificaSetEGetType(){
        $this->formLegend->setType('input');
        $this->assertEquals('input',$this->formLegend->getType());
    }

    public function testSetEGetValue(){
        $this->formLegend->setValue('valor');
        $this->assertEquals('valor',$this->formLegend->getValue());
    }

} 