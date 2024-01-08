<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $variavel = 10;
        echo 'Mostrar $variavel <br/>'; // usando ', não exibe variaveis.
        echo "Mostrar $variavel <br/>";

        //var_dump retonar o tipo da variavel e o dado.
        $x = 10.5;
        var_dump($x);
        $y = 18;
        var_dump($y);
        $z = "Olá mundo!";
        var_dump($z);

        //empty retona TRUE(1) se estiver vazio.
        $a = null;
        echo "<br/>";
        echo empty($a);

        //gettype retorna apenas o tipo da variavel.
        $b = 78.5;
        echo "<br/>";
        echo gettype($b);
        echo "<br/>";
        $muda = settype($b, "int"); //settype modifica o tipo e retorna TRUE(1).
        echo $muda. ' - ';
        echo $b;
        echo gettype($b);

        //apaga uma variável.
        unset($b);
    ?>
</body>
</html>