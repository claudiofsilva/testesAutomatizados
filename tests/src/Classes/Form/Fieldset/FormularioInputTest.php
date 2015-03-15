<?php

namespace Classes\Form\Fieldset;


class FormularioInputTest extends \PHPUnit_Framework_TestCase {

    private $formInput;

    public function __construct()
    {
        $this->formInput = new FormularioInput();
    }

    public function testSetEGetNome()
    {
        $this->formInput->setName('input');
        $this->assertEquals('input',$this->formInput->getName());
    }

    /**
     * @expectedException InvalidArgumentException
     */

    public function testSetType()
    {
       $result =  $this->formInput->setType(23);
    }

    public function testSetEGetType()
    {
        $this->formInput->setType('text');
        $this->assertEquals('text', $this->formInput->getType());
    }

} 