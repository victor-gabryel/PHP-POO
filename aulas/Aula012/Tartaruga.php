<?php
require_once './Reptil.php';
class Tartaruga extends Reptil {
    
    #[\Override]
    public function locomover() {
        echo '<p>Andando beeeeeeeeeeem devagar</p>';
    }
    
}
