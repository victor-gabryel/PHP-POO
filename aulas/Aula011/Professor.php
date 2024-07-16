<?php
require_once './Pessoa.php';
class Professor extends Pessoa {
    
    private $especialidade;
    private $salario;
    private $aumento;


    public function receberAumento() {
        echo '<p>Professor '. $this->getNome().' recebeu aumento de ' . $this->getAumento(). '</p>';
    }
    
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getAumento() {
        return $this->aumento;
    }

    public function setEspecialidade($especialidade): void {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario): void {
        $this->salario = $salario;
    }

    public function setAumento($aumento): void {
        $this->aumento = $aumento;
    }       
}
