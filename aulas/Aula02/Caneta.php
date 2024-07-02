<?php

Class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    //Function rabiscar
    function rabiscar(){
        if ($this->tampada == true) {
            echo "<p>ERRO! Não posso rabiscar...</p>";  
        } else {
            echo "<p>Estou rabiscando...</p>";
        }   
    }
    
    //Function tampar
    function tampar() {
        $this->tampada = true;
    }
    
    //Function destampar
    function destampar() {
        $this->tampada = false;
    }
}
