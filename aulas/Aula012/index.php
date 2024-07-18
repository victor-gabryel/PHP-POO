<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <pre>
        <?php
        
            require_once './Animal.php';
            require_once './Ave.php';
            require_once './Mamifero.php';
            require_once './Peixe.php';
            require_once './Reptil.php';
            require_once './Canguru.php';
            require_once './Cachorro.php';
            require_once './Cobra.php';
            require_once './Tartaruga.php';
            require_once './Goldfish.php';
            require_once './Arara.php';
                
            $a1 = new Ave();
            $m1 = new Mamifero();
            $p1 = new Peixe();              
            $r = new Reptil();
            
            $cac1 = new Cachorro();
            $can1 = new Canguru();
            $cob1 = new Cobra();
            $tar1 = new Tartaruga();
            $gol1 = new Goldfish();
            $ara1 = new Arara();
            
            $a1->setIdade(3);
            $a1->setMembros(2);
            $a1->setPeso(3);
            $a1->locomover();
            $a1->alimentar();
            $a1->emitirSom();
            $a1->fazerNinho();
            print_r($a1);    
            
            
            $m1->setIdade(59);
            $m1->setMembros(4);
            $m1->setPeso(81.2);
            $m1->locomover();
            $m1->alimentar();
            $m1->emitirSom();
            print_r($m1); 
            
            $m1->locomover();
            $can1->locomover();
            $cac1->locomover();
            $tar1->locomover();
            
            $m1->emitirSom();
            $cac1->emitirSom();
            $can1->emitirSom();
            
            
            
        ?>
    </pre>
    </body>
</html>
