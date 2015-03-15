<?php

namespace Classes\Form\Fieldset;


use Classes\Form\Interfaces\FieldsetInterface;
use Classes\Form\Interfaces\TextareaInterface;

class FormularioTextarea implements FieldsetInterface, TextareaInterface{
    public $type;
    public $name;
    public $value;
    public $row;
    public $cols;

    /**
     * @param mixed $cols
     */
    public function setCols($cols)
    {
        $this->cols = $cols;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCols()
    {
        return $this->cols;
    }

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
     * @param mixed $row
     */
    public function setRow($row)
    {
        $this->row = $row;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRow()
    {
        return $this->row;
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

} 