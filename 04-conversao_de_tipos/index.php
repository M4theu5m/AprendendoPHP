<?php 
    //É possível forçar o tipo da variável.
    $x = (float) 10.8;
    var_dump($x);
    echo "<br/>";

    $x = (int) 10.8; //Vai retornar 10.
    var_dump($x);
    echo "<br/>";

    //Cálculos
    $v1 = 20;
    $v2 = 10;
    $soma = $v1 + $v2;
    $subtracao = $v1 - $v2;
    $multiplicacao = $v1 * $v2;
    $divisao = $v1 / $v2;
    echo "A soma de $v1 e $v2 foi $soma<br/>";
    echo "A subtracao de $v1 e $v2 foi $subtracao<br/>";
    echo "A multiplicação foi $multiplicacao<br/>";
    echo "A divisão foi $divisao<br/>";

    //Resto da divisão
    $resto = (5%3);
    var_dump($resto);
    echo "<br/>";

    //Funções matemáticas
    //sin() - calcula o seno em ângulo em radianos
    //cos() - calcula o cosseno...
    //decbin() - retorna uma string, representada pelo sistema binário
    //dechex() - retorna um número em hexadecimais
    //bindec() - converte um número binário
    //hexdec() - coverte um hexadecimal
    //ceil() - retorna uma fração qualquel, arredondado para cima
    //log() - retorna um logaritmo de um número
    //rand(0, 0) - retorna aleatório
    //sqtr() - retorna raiz
    //pow - retorna potencias
    //pi() - retorna pi

    //Lidando com Strings
    //Concatenação - adicionamos um '.' entre as strings
    $texto1 = "Dá para unir ";
    $texto2 = " ou até mais.";
    $numeral = 10;
    $composto = $texto1.$numeral.$texto2;
    echo $composto;
    echo "<br/>";

    // substuidor de palavras e expressões.
    $e = str_replace('manga', 'pera', "Fulano comia manga, mas depois novamente comeu manga<br/>");
    echo $e;

    //strolower - tudo minúsculo
    echo strtolower("TUDO MAIUSCULO<br/>");

    //stroupper - tudo maiúsculo.
    echo strtoupper("tudo minusculo<br/>");

    //substr - retorna um pedaço da string
    $string = "ABCDEF";
    $sub = substr($string, -2);
    var_dump($sub);
    echo "<br/>";

    //ucfirst - primeira letra maiuscula.
    //ucwords - corvete a primeira letra de todas palavras em maiucula.
    //chop - elimina espaços brancos consecutivos.
    //explode - quebra a string em pedaços, usando um separador
?>