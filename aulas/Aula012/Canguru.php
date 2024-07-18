<?php
require_once './Mamifero.php';
class Canguru extends Mamifero {
    
    #[\Override]
    public function locomover() {
        echo '<p>Saltando</p>';
    }
    
    public function guardarFilhote() {
        echo 'Filho entrou na bolsa';
    }
}
