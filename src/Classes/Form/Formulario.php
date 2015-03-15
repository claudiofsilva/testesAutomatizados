<?php

namespace Classes\Form;
use Classes\Form\Fieldset\FormularioFieldset;
use Classes\Form\Fieldset\FormularioInput;
use Classes\Form\Fieldset\FormularioLegend;
use Classes\Form\Fieldset\FormularioSelect;
use Classes\Form\Fieldset\FormularioTextarea;
use Classes\Form\Interfaces\FieldsetInterface;
use Classes\Form\Interfaces\FormularioInterface;

class Formulario implements FormularioInterface{

    public $action;
    public $method;
    private $field = array();
    private $fieldset;


    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }


    public function getAction()
    {
        return $this->action;
    }


    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }


    public function getMethod()
    {
        return $this->method;
    }

    public function createField(FieldsetInterface $field)
    {
        if($field instanceof FormularioLegend){
            $legend = "<legend>{$field->getValue()}</legend>";
            $this->field[] = $legend;
        }

        if($field instanceof FormularioInput){
            $input = "<input type='{$field->getType()}' value='{$field->getValue()}' name='{$field->getName()}'>";
            $this->field[] = $input;
        }

        if($field instanceof FormularioSelect){

            $select = "<select>";

            foreach($field->options as $option){
                $select .= $option;
            }

            $select .= "</select>";

           $this->field[] = $select;
        }

        if($field instanceof FormularioTextarea){
            $textarea = "<textarea rows='{$field->getRow()}' cols='{$field->getCols()}'></textarea>";
            $this->field[] = $textarea;
        }
    }

    public function getField()
    {
        return $this->field;
    }

    public function addFieldset(FormularioFieldset $fieldset){
        $this->fieldset = $fieldset->createFieldset();
    }


    public function render()
    {

        $form = "<form";

        if($this->getAction()){
            $form .= " action =\"{$this->getAction()}\" ";
        }

        if($this->getMethod()){
            $form .= " method =\"{$this->getMethod()}\" ";
        }

        $form .= ">\n";

        $form .= $this->fieldset;

        $form .= "\t </form>\n";

        return $form;

    }

} 