<?php


namespace Classes\Form\Fieldset;


use Classes\Form\Interfaces\FieldsetInterface;
use Classes\Form\Interfaces\OptionInterface;

class FormularioOption implements OptionInterface, FieldsetInterface {

    public $type;
    public $name;
    public $value;
    public $innerText;

    /**
     * @param mixed $innerText
     */
    public function setInnerText($innerText)
    {
        $this->innerText = $innerText;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInnerText()
    {
        return $this->innerText;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        if(is_numeric($name)){
            throw new \InvalidArgumentException('name não pode ser numerico');
        }
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

    public function create(){
        $option = "<option value='".$this->getValue()."'>".$this->getInnerText()."</option>";
        return $option;
    }




} 