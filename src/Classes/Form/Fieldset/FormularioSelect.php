<?php

namespace Classes\Form\Fieldset;


use Classes\Form\Interfaces\FieldsetInterface;
use Classes\Form\Interfaces\OptionInterface;

class FormularioSelect implements  FieldsetInterface {

    public $type;
    public $name;
    public $value;
    public $options = array();

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {

       if(is_numeric($type)){
           throw new \InvalidArgumentException('type não pode ser numerico');
       }

        $this->type = $type;
        return $this;


    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    public function addOption(OptionInterface $option)
    {
        $this->options[] = $option->create();
        return $this;
    }

} 