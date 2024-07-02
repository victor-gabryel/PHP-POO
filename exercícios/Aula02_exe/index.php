<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula_02_exe - POO</title>
    </head>
    <body>
        <?php
            require_once 'Teclado.php';
            
            $c1 = new Teclado;
            $c1->modelo = 'Dragon';
            $c1->cor = 'Azul';
            $c1->tamanho = 2;
            $c1->tecla = 'J';    
            print_r($c1);
            
            echo "<br/>";
            
            $c1->teclar();
        ?>
    </body>
</html>
