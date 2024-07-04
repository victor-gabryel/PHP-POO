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
    <body>
        <pre>
        <?php
        require_once 'ContaBanco.php';
        
        $p1 = new ContaBanco(); //Jubileu
        $p1->setnumConta(1111);
        $p1->abrirConta("CC");
        $p1->setDono("Jubileu");
        $p1->depositar(300);
        $p1->sacar(338);
        $p1->pagarMensal();
        $p1->fecharConta(); 
        
        $p2 = new ContaBanco(); //Creuza
        $p2->setnumConta(2222);
        $p2->abrirConta("CP");
        $p2->setDono("Creuza");
        $p2->depositar(500);
        $p2->sacar(630);
        $p2->pagarMensal();
        $p2->fecharConta(); 
        
        print_r($p1);
        
        echo '<br/>';
        
        print_r($p2); 
        
        ?>
        </pre>
    </body>
</html>
