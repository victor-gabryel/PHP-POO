<?php

class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;
    
    public function __construct($modelo, $cor, $ponta) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
    }
    
    public function getModelo() {
        return $this->modelo;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function getTampada() {
        return $this->tampada;
    }
}

