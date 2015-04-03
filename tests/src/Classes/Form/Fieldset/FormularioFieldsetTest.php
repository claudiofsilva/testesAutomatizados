<?php

namespace Classes\Form\Fieldset;


use Classes\Form\Fieldset\FormularioFieldset;

class FormularioFieldsetTest extends \PHPUnit_Framework_TestCase {

    /**
     * Testar criação Fieldset
     */

    public function testCreateFiedset()
    {
        $field = [
           0 => '<input type="text" value="1" name="teste1">',
           1 => '<input type="text" value="2" name="teste2">'
        ];

        $formFieldset = new FormularioFieldset($field);

        $this->assertEquals('<fieldset><input type="text" value="1" name="teste1"><input type="text" value="2" name="teste2"></fieldset>',$formFieldset->createFieldset());
    }

} 