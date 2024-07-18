<?php
require_once './Animal.php';
class Reptil extends Animal {

    private $corEscama;
    
    #[\Override]
    public function locomover() {
        echo '<p>Rastejando</p>';
    }
    
    #[\Override]
    public function alimentar() {
        echo '<p>Comendo Vegetais</p>';
    }
    
    #[\Override]
    public function emitirSom() {
        echo '<p>Som de Reptil</p>';
    }
    
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }  
}
