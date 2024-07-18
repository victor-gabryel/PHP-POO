<?php
require_once './Animal.php';
class Peixe extends Animal {
    
    private $corEscama;
    
    public function soltarBolha() {
        echo '<p>Soltou uma bolha</p>';
    }

    #[\Override]
    public function locomover() {
        echo '<p>Nadando</p>';
    }
    
    #[\Override]
    public function alimentar() {
        echo '<p>Comendo Substâncias</p>';
    }
    
    #[\Override]
    public function emitirSom() {
        echo '<p>Peixe não faz som</p>';
    }
     
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }  
}
