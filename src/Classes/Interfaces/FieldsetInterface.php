<?php

namespace Classes\Interfaces;


interface FieldsetInterface {
    public function setType($type);
    public function getType();
    public function setName($name);
    public function getName();
    public function setValue($value);
    public function getValue();
}