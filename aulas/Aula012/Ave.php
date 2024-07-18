<?php
require_once './Animal.php';
class Ave extends Animal {
    
    private $corPena;
    
    public function fazerNinho() {
        echo '<p>Contruiu um ninho</p>';
    }

    #[\Override]
    public function alimentar() {
        echo '<p>Voando</p>';
    }

    #[\Override]
    public function emitirSom() {
        echo '<p>Comendo Frutas</p>';
    }

    #[\Override]
    public function locomover() {
        echo '<p>Som de Ave</p>';
    }
}
