<?php

Class Teclado {
    var $modelo;
    var $cor;
    var $tamanho;
    var $tecla;
   
    
    //function teclar
    function teclar(){
        if ($this->tecla == 'H') {
            echo "<p>Teclando a letra H</p>";
        } else {
            echo "<p>Uma tecla diferente de H foi digitada</p>";
        }
    }
}

