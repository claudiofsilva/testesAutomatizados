<?php

namespace Classes\Form\Fieldset;




class FormularioSelectTest  extends  \PHPUnit_Framework_TestCase {

    public function testVerificaSetEGetName()
    {
        $formSelect = new FormularioSelect();
        $formSelect->setName('claudio');

        $this->assertEquals('claudio', $formSelect->getName());

    }

    public function testVerificaSetEGetType()
    {
        $formSelect = new FormularioSelect();
        $formSelect->setType('input');

        $this->assertEquals('input', $formSelect->getType());

    }

    /**
     * @expectedException InvalidArgumentException
    */

    public function testVerificaSetType()
    {
        $formSelect = new FormularioSelect();
        $formSelect->setType(1);
    }

    public function testVerificaSetEGetValue()
    {
        $formSelect = new FormularioSelect();
        $formSelect->setValue('value');

        $this->assertEquals('value', $formSelect->getValue());
    }

} 