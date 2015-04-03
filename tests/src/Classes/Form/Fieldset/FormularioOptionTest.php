<?php

namespace Classes\Form\Fieldset;




class FormularioOptionTest extends \PHPUnit_Framework_TestCase {

    /**
     * Verificar tipo da classe
     * Testar sets e gets
     */

    private $formOption;

    public function __construct(){
        $this->formOption = new FormularioOption();
    }

    public function testVerificaSeOTipoDaClasseEstaCorreto()
    {
        $this->assertInstanceOf('Classes\Form\Interfaces\OptionInterface',new \Classes\Form\Fieldset\FormularioOption());
        $this->assertInstanceOf('Classes\Form\Fieldset\FormularioOption',new \Classes\Form\Fieldset\FormularioOption());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testVerificaSetName()
    {
        $formulario = $this->formOption->setName(1);
    }

    public function testVerificaSetEGetName()
    {
        $this->formOption->setName('claudio');

       $this->assertEquals('claudio',$this->formOption->getName());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testVerificaSetType()
    {
        $this->formOption->setType(1);
    }

    public function testVerificaSetEGetType(){
        $this->formOption->setType('input');
        $this->assertEquals('input',$this->formOption->getType());
    }

    public function testSetEGetValue(){
        $this->formOption->setValue('valor');
        $this->assertEquals('valor',$this->formOption->getValue());
    }

}