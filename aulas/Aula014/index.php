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
            require_once './Gafanhoto.php';
            require_once './AcoesVideo.php';
            require_once './Video.php';
            require_once './Visualizacao.php';
            
            $v[0] = new Video('Aula 1 de POO');
            $v[1] = new Video('Aula 12 de PHP');
            $v[2] = new Video('Aula 15 de HTML5');
            print_r($v);
            
            $g[0] = new Gafanhoto('Victor', 18, 'M', 'Vit3n');
            $g[1] = new Gafanhoto('Jamily', 17, 'F', 'JL');
            print_r($g);
            
            $vis[0] = new Visualizacao($g[0], $v[2]);
            $vis[1] = new Visualizacao($g[0], $v[1]);
            
            $vis[0]->avaliar();
            $vis[1]->avaliarPorc(85);
            print_r($vis);
        ?>
    </pre>
    </body>
</html>
