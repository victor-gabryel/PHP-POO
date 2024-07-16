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
            require_once './Pessoa.php';
            require_once './Visitante.php';
            require_once './Aluno.php';
            require_once './Bolsista.php';
            require_once './Professor.php';
            require_once './Tecnico.php';
            
            //$p1 = new Pessoa();
            
            $v1 = new Visitante();
            $v1->setNome("Juvenal");
            $v1->setIdade(33);
            $v1->setSexo("M");      
            print_r($v1);
            
            $a1 = new Aluno();
            $a1->setNome("Pedro");
            $a1->setMatricula(1111);
            $a1->setIdade(16);
            $a1->setSexo("M");
            $a1->setCurso("Informática");
            $a1->pagarMensalidade();
            print_r($a1);
            
            $b1 = new Bolsista();
            $b1->setNome("Jubileu");
            $b1->setMatricula(1112);
            $b1->setIdade(17);
            $b1->setSexo("M");
            $b1->setCurso("Administração");
            $b1->pagarMensalidade();
            $b1->setBolsa(12.5);
            print_r($b1);   
            
            $p1 = new Professor();
            $p1->setNome("Breno");
            $p1->setIdade(26);
            $p1->setSexo("M");
            $p1->setEspecialidade("Matématica");
            $p1->setAumento(235);
            $p1->setSalario(1500);
            $p1->receberAumento();
            print_r($p1);   
            
            $t1 = new Tecnico();
            $t1->setNome("Victor");
            $t1->setRegistroProfissional(2469);
            $t1->setMatricula(1112);
            $t1->setIdade(18);
            $t1->setSexo("M");
            $t1->setCurso("ADS");
            $t1->praticar();
            print_r($t1);       
        ?>
        </pre>
    </body>
</html>
