<?php

namespace Classes\Db;


use Classes\Clientes\Clientes;

class DbManagerTest  extends  \PHPUnit_Framework_TestCase {

    private $db;

    public function setUp()
    {
        $this->db = new \PDO('sqlite::memory:');
        $query = "CREATE table clientes(id INT AUTO_INCREMENT, nome VARCHAR(255), email VARCHAR(255));";
        $this->db->exec($query);
    }

    public function tearDown()
    {
        $this->db->exec('DROP table clientes');
    }

    public function testverificaSeTemAdaptadorValidoDeBancoDeDados()
    {
        $dbManager = new DbManager();
        $dbManager->setDbAdapter(new \PDO("sqlite::memory:"));

        $this->assertInstanceOf("\PDO",$dbManager->getConnection());
    }

    public function testVerificaInsertDadosClientes()
    {

        $cliente = new Clientes();
        $cliente->setNome('Claudio Silva');
        $cliente->setEmail('claudio@claudiosilva.com.br');


        $dbManager = new DbManager();
        $dbManager->setDbAdapter($this->db);
        $dbManager->persist($cliente);
        $dbManager->flush();

        $stmt= $this->db->query('SELECT * FROM clientes');
        $this->assertEquals(1, count($stmt->fetchAll()));

        $dbManager->flush();

        $stmt= $this->db->query('SELECT * FROM clientes');
        $this->assertEquals(2, count($stmt->fetchAll()));

    }
} 