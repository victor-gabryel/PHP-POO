<?php

Class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    //Function rabiscar
    public function rabiscar(){
        if ($this->tampada == true) {
            echo "<p>ERRO! Não posso rabiscar...</p>";  
        } else {
            echo "<p>Estou rabiscando...</p>";
        }   
    }
    
    //Function tampar
    public function tampar() {
        $this->tampada = true;
    }
    
    //Function destampar
    public function destampar() {
        $this->tampada = false;
    }
}
