<?php

namespace Classes\Form\Fieldset;


class FormularioTextareaTest extends \PHPUnit_Framework_TestCase {

    public function testVerificaSetEGetCols()
    {
        $formText = new FormularioTextarea();
        $formText->setCols(4);

        $this->assertEquals(4,$formText->getCols());
    }

    public function testVerificaSetEGetName()
    {
        $formText = new FormularioTextarea();
        $formText->setName('textarea');

        $this->assertEquals('textarea', $formText->getName());
    }

    public function testVerificaSetEGetValue()
    {
        $formText = new FormularioTextarea();
        $formText->setValue('value');

        $this->assertEquals('value',$formText->getValue());
    }

    public function testVerificaSetEGetType()
    {
        $formText = new FormularioTextarea();
        $formText->setType('textarea');

        $this->assertEquals('textarea',$formText->getType());
    }

    /**
     * @expectedException InvalidArgumentException
     */

    public function testVerificaSetType()
    {
        $formText = new FormularioTextarea();
        $formText->setType(10);
    }

    public function testVerificaSetEGetRow()
    {
        $formText = new FormularioTextarea();
        $formText->setRow(10);

        $this->assertEquals(10,$formText->getRow());
    }

} 