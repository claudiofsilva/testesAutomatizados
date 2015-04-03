<?php

namespace Classes\Clientes;


class ClientesTest extends  \PHPUnit_Framework_TestCase {

    /**
     * Testar set
     * @expectedException InvalidArgumentException
     */

    public function testVerificaSetEmail()
    {
        $cliente = new Clientes();
        $cliente->setEmail('claudio');
    }

} 