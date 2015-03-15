<?php

namespace Classes\Form\Fieldset;


class FormularioFieldset {

    public $fields;

    public function __construct($field)
    {
        if(!is_array($field)){
            throw new \InvalidArgumentException('field precisa ser um array');
        }
        $this->fields = $field;
    }

    public function createFieldset()
    {
        $fieldset = "<fieldset>";

        foreach($this->fields as $fields){
            $fieldset .= $fields;
        }

        $fieldset .= "</fieldset>";

        return $fieldset;
    }

} 