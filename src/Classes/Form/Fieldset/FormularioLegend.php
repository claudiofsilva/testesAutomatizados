<?php

namespace Classes\Form\Fieldset;


use Classes\Form\Interfaces\FieldsetInterface;

class FormularioLegend implements FieldsetInterface {

    public $type;
    public $value;
    public $name;


    public function setName($name)
    {
        if(is_numeric($name)){
            throw new \InvalidArgumentException('O valor de name não pode ser numérico');
        }
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
            throw new \InvalidArgumentException('O valor de type não pode ser numérico');
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