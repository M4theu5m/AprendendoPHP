<?php 
    //while
    $x = 0;
    while ($x < 10) {
        $arreio[$x] = rand(0, 9);
        $x++;
    }
    while ($x > 0) {
        $x--;
        echo ($arreio[$x].' ');
    }
    echo '<br/>';

    //do while - mesma coisa, mas executa pelo menos uma vez.
    $x = 3;
    do {
        echo $x." ";
        $x++;
    } while(($x > 3) && ($x < 10));
    echo '<br/>';

    //for
    for ($i = 1; $i < 10; $i++){
        echo $i.' ';
    }

    //foreach
    $grupo = array(0=>4, 1=>8, 2=>5);
    foreach ($grupo as $registro){
        echo $registro;
        echo '<br/>';
    }

    //break e continue
?>