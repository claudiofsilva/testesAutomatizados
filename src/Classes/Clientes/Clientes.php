<?php

namespace Classes\Clientes;


class Clientes {

    private $nome;
    private $email;
    private $mailTransport;


    public function setMailTransport($mailTransport)
    {
        $this->mailTransport = $mailTransport;
    }


    public function getMailTransport()
    {
        return $this->mailTransport;
    }

    public function setEmail($email)
    {
        $res = filter_var($email,FILTER_VALIDATE_EMAIL);

        if(!$res){
            throw new \InvalidArgumentException();
        }

        $this->email = $email;
        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }


    public function getNome()
    {
        return $this->nome;
    }


} 