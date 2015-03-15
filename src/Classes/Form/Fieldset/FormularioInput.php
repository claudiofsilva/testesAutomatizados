<?php

namespace Classes\Form\Fieldset;
use Classes\Form\Interfaces\FieldsetInterface;

class FormularioInput implements FieldsetInterface{

    public $type;
    public $name;
    public $value;
    public $values = array();

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setType($type)
    {
        if(is_numeric($type)){
            throw new \InvalidArgumentException('type não pode ser valor numerico');
        }

        $this->type = $type;
        return $this;
    }


    public function getType()
    {
        return $this->type;
    }


    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


    public function getValue()
    {
        return $this->value;
    }

} 