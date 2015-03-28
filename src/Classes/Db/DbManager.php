<?php

namespace Classes\Db;

class DbManager
{

    private $dbAdapter;
    private $entities = array();

    public function setDbAdapter(\PDO  $dbAdapter)
    {
        $this->dbAdapter = $dbAdapter;
    }


    public function getConnection()
    {
        return $this->dbAdapter;
    }

    public function persist($entity)
    {
        $this->entities[] = $entity;

    }

    public function flush()
    {
        foreach($this->entities as $entity){
            $query = "insert into clientes(nome,email) values ('{$entity->getNome()}','{$entity->getEmail()}');";
            $this->dbAdapter->exec($query);
        }
    }
} 