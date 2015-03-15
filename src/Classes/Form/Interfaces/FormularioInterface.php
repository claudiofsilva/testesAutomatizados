<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 15/11/14
 * Time: 16:34
 */

namespace Classes\Form\Interfaces;


interface FormularioInterface {
    public function setAction($action);
    public function getAction();
    public function setMethod($method);
    public function getMethod();
} 